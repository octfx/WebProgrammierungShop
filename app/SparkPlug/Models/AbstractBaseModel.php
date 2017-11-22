<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 12.10.2017
 * Time: 20:40
 */

namespace App\SparkPlug\Models;

use App\Models\User;
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
    /** @var DBAccessInterface */
    private $db;
    private $attributes;
    private $query;

    protected $table;
    protected $primary_key;
    protected $fillable = [];
    protected $hidden = [];


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

    public function all(): ModelCollection
    {
        /** @var \PDOStatement $statement */
        $statement = $this->db->getDB()->query("SELECT * FROM {$this->table}");

        $collection = new ModelCollection();

        foreach ($statement->fetchAll() as $user) {
            $collection->add(new User($user));
        }

        return $collection;
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
}
