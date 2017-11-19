<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Ria;

use App\Controllers\AbstractBaseController;
use App\SparkPlug\Views\View;

/**
 * Class RiaController
 *
 * @package App\Controllers\Ria
 */
class RiaController extends AbstractBaseController
{
    /**
     * Gibt RiaDetail View zurück
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showRiaDetailsView()
    {
        return new View('ria.riaDetails');
    }
}
