<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 25.11.2017
 * Time: 12:24
 */

namespace App\Models;

use App\SparkPlug\Models\AbstractBaseModel as Model;

/**
 * Class Rating
 * @package App\Models
 */
class Rating extends Model
{
    protected $table = 'ratings';

    protected $fillable = [
        'rating',
        'comment',
    ];

    /**
     * Gibt User Objekt des Ratings zurück
     *
     * @return \App\Models\User
     */
    public function user()
    {
        return new User($this->user_id);
    }

    /**
     * Gibt Ria des Ratings zurück
     *
     * @return \App\Models\Ria
     */
    public function ria()
    {
        return new Ria($this->ria_id);
    }
}
