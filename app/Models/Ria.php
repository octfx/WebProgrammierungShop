<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 25.11.2017
 * Time: 12:20
 */

namespace App\Models;

use App\SparkPlug\Models\AbstractBaseModel as Model;

/**
 * Class Ria
 * @package App\Models
 */
class Ria extends Model
{
    protected $table = 'rias';

    protected $fillable = [
        'name',
        'description',
        'icon_name',
    ];

    public function user()
    {
        return new User($this->user_id);
    }

    public function ratings()
    {
        $ratings = new Rating();
        $ratings = $ratings->query()->where('ria_id', '=', $this->ria_id)->fetchAll();

        return $ratings;
    }

    public function totalRating(): float
    {
        $ratings = new Rating();
        $ratings = $ratings->query('rating')->where('ria_id', '=', $this->ria_id)->fetchAll();

        $sum = 0;
        if (!empty($ratings) && count($ratings) > 0) {
            foreach ($ratings as $rating) {
                $sum += intval($rating['rating']);
            }
            $sum = round($sum / count($ratings), 1);
        }

        return $sum;
    }
}
