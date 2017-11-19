<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Profile;

use App\Controllers\AbstractBaseController;
use App\SparkPlug\Views\View;

/**
 * Class ProfileController
 *
 * @package App\Controllers\Profile
 */
class ProfileController extends AbstractBaseController
{
    /**
     * Gibt Profil-View zurück
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showProfileView()
    {
        return new View('profile.profile');
    }
}
