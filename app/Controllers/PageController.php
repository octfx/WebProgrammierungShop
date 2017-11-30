<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Hanne
 * Date: 15.11.2017
 * Time: 23:20
 */

namespace App\Controllers;

use App\Models\User;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Views\View;

/**
 * Class PageController
 *
 * @package App\Controllers
 */
class PageController extends Controller
{
    /**
     * Startseite des Shops
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showIndexView()
    {
        $user = new User();

        $test = $user->query()->join('comments', 'left')->fetch();

        echo $test;

        return new View('index');
    }
}
