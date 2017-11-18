<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Ria;

use App\Controllers\AbstractBaseController;
use App\SparkPlug\Views\View;

class RiaController extends AbstractBaseController
{
    public function showRiaDetailsView()
    {
        return new View('ria.riaDetails');
    }

}