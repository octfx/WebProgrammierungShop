<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 22.11.2017
 * Time: 23:29
 */

namespace App\SparkPlug\Models;

use App\SparkPlug\Collections\AbstractBaseCollection as Collection;
use InvalidArgumentException;

class ModelCollection extends Collection
{
    /**
     * Fügt Element Collection hinzu
     *
     * @param mixed $data
     *
     * @return array
     */
    public function add($data): array
    {
        if (is_object($data) && is_subclass_of($data, AbstractBaseModel::class)) {
            $this->data[] = $data;
        } else {
            throw new InvalidArgumentException("Only Models can be added");
        }

        return $this->data;
    }

    /**
     * Suche nach Element
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function find($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }

    /**
     * Gibt alle gespeicherten Elemente zurück
     *
     * @return array
     */
    public function all(): array
    {
        return $this->data;
    }
}
