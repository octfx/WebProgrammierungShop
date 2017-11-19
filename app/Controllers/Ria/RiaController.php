<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Ria;

use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Views\View;

/**
 * Class RiaController
 *
 * @package App\Controllers\Ria
 */
class RiaController extends Controller
{
    /**
     * Gibt RiaDetail View zurück
     *
     * @param int $id ID der RIA
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showRiaDetailsView(int $id)
    {
        $view = new View('ria.riaDetails');
        $view->setVars(
            [
                'id' => $id,
            ]
        );

        return $view;
    }
}
