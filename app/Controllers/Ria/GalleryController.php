<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Ria;

use App\Models\Ria;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Views\View;

/**
 * Class GalleryController
 */
class GalleryController extends Controller
{
    /**
     * Gibt Gallerie View zurück
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showGalleryView()
    {
        $rias = new Ria();
        $rias = $rias->query()->where('visible', '=', 1)->where('deleted', '=', 0)->fetchAll();

        $view = new View('ria.gallery');
        $view->setVars(['rias' => $rias]);

        return $view;
    }
}
