<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 21.10.2017
 * Time: 17:38
 */

namespace App\SparkPlug\Interfaces;

/**
 * Interface CollectionInterface
 * Generisches Interface für Collections
 *
 * @package App\SparkPlug\Interfaces
 */
interface CollectionInterface
{
    /**
     * Fügt Element Collection hinzu
     *
     * @param mixed $data
     *
     * @return array
     */
    public function add($data): array;

    /**
     * Suche nach Element
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * Gibt alle gespeicherten Elemente zurück
     *
     * @return array
     */
    public function all(): array;
}
