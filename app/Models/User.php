<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 22.11.2017
 * Time: 19:56
 */

namespace App\Models;

use App\SparkPlug\Models\AbstractBaseModel as Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'color',
    ];

    /**
     * Gibt alle RIAs des Users als Collection zurück
     *
     * @return \App\SparkPlug\Collections\CollectionInterface|\App\SparkPlug\Models\ModelCollection|bool
     */
    public function rias()
    {
        $rias = new Ria();
        $rias = $rias->query()->where('user_id', '=', $this->user_id)->fetchAll();

        return $rias;
    }

    public function ratingsForRia(int $riaId)
    {
        $ratings = new Rating();
        $ratings = $ratings->query()->where('ria_id', '=', $riaId)->where('user_id', '=', $this->user_id)->fetchAll();

        return $ratings;
    }
}
