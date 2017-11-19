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
 * Class GalleryController
 *
 * @package App\Controllers\Ria
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
        return new View('ria.gallery');
    }
}
