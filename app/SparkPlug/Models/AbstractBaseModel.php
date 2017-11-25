<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 12.10.2017
 * Time: 20:40
 */

namespace App\SparkPlug\Models;

use App\Models\User;
use App\SparkPlug\Collections\CollectionInterface;
use App\SparkPlug\Database\DBAccessInterface;
use App\SparkPlug\Database\Exceptions\QueryException;
use App\SparkPlug\Models\Exceptions\MissingTableException;
use App\SparkPlug\Models\Exceptions\ModelNotFoundException;

/**
 * Class AbstractBaseModel
 *
 * @package App\SparkPlug\Models
 */
abstract class AbstractBaseModel
{
    protected $table;
    protected $primary_key;
    protected $fillable = [];
    protected $hidden = [];
    /** @var DBAccessInterface */
    private $db;
    private $attributes;
    /** @var  \PDOStatement */
    private $query;
    private $queryString;

    public function __construct($options = null)
    {
        $this->getDB();

        if (is_null($this->table)) {
            throw new MissingTableException('Table attribute not set!');
        }

        if (is_null($this->primary_key)) {
            $this->primary_key = substr($this->table, 0, -1).'_id';
        }

        if (is_numeric($options)) {
            $this->loadModelById(intval($options));
        }

        if (is_array($options)) {
            $this->attributes = $options;
        }
    }

    public function __get($name)
    {
        if (isset($this->attributes[$name]) && !in_array($name, $this->hidden)) {
            return $this->attributes[$name];
        }

        return null;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function all()
    {
        $statement = $this->db->getDB()->query("SELECT * FROM {$this->table}");

        return $this->createCollectionFromResult($statement->fetchAll());
    }

    public function save()
    {
        if (!isset($this->attributes[$this->primary_key])) {
            $this->createModelFromAttributes();
        } else {
            $this->updateModelByAttributes();
        }
    }

    public function query($cols = []): AbstractBaseModel
    {
        $query = "SELECT ";
        if (empty($cols)) {
            $query .= '* ';
        } else {
            if (is_array($cols)) {
                $query .= rtrim(implode(', ', $cols), ', ').' ';
            } else {
                $query .= $cols.' ';
            }
        }

        $query = "{$query} from {$this->table} ";

        $this->queryString = $query;


        return $this;
    }

    public function where($col, $comparator, $value): AbstractBaseModel
    {
        $addString = " WHERE ";
        if (str_contains($this->queryString, 'WHERE')) {
            $addString = " AND ";
        }

        $this->queryString .= "{$addString} {$col} {$comparator} {$value}";

        $this->query = $this->db->getDB()->prepare($this->queryString);

        return $this;
    }

    public function fetch()
    {
        if (is_null($this->query)) {
            return false;
        }

        $this->query->execute();

        $result = $this->query->fetch();

        if (!empty($result)) {
            return new static($result);
        }

        return false;
    }


    public function fetchAll()
    {
        if (is_null($this->query)) {
            return false;
        }

        $this->query->execute();

        return $this->createCollectionFromResult($this->query->fetchAll());
    }

    public function __toString()
    {
        $return = "";

        foreach ($this->attributes as $key => $attribute) {
            if (!in_array($key, $this->hidden)) {
                $return .= "{$key}: {$attribute}\n";
            }
        }

        return $return;
    }

    private function createCollectionFromResult(array $result): CollectionInterface
    {
        $collection = new ModelCollection();

        foreach ($result as $model) {
            $collection->add(new static($model));
        }

        return $collection;
    }

    private function updateModelByAttributes()
    {
        $fillableAttributes = $this->getFillableAttributes();
        if (!empty($fillableAttributes)) {
            $statement = $this->db->getDB()->query(
                "UPDATE {$this->table} SET ".implode(
                    ' = ?, ',
                    array_keys($fillableAttributes)
                )."= ? WHERE {$this->primary_key} = {$this->attributes[$this->primary_key]}"
            );
            $statement->execute(array_values($fillableAttributes));
        }
    }

    private function createModelFromAttributes()
    {
        if (!empty($this->attributes)) {
            $values = '';
            for ($i = 0; $i < count($this->attributes); $i++) {
                $values .= '?, ';
            }
            $values = rtrim($values, ', ');


            $statement = $this->db->getDB()->query(
                "INSERT INTO {$this->table} (".implode(',', array_keys($this->attributes)).") VALUES ({$values})"
            );
            $statement->execute(array_values($this->attributes));

            $this->attributes[$this->primary_key] = $this->db->getDB()->lastInsertId();
        }
    }

    private function getFillableAttributes()
    {
        return array_intersect_key($this->attributes, array_flip($this->fillable));
    }

    private function loadModelById(int $id)
    {
        /** @var \PDOStatement $statement */
        $statement = $this->db->getDB()->prepare("SELECT * FROM {$this->table} WHERE {$this->primary_key} = ?");
        if (!$statement->execute([$id])) {
            throw new QueryException('Query failed');
        } else {
            $this->attributes = $statement->fetch();

            if (empty($this->attributes)) {
                throw new ModelNotFoundException("Model in Table {$this->table} with ID {$id} not found");
            }
        }
    }

    private function getDB()
    {
        $this->db = app()->make(DBAccessInterface::class);
    }
}
