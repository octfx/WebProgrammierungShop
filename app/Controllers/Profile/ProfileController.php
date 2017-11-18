<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Gallery;

use App\Controllers\AbstractBaseController;
use App\SparkPlug\Views\View;

class GalleryController extends AbstractBaseController
{
    public function showGalleryView()
    {
        return new View('ria.gallery');
    }

}