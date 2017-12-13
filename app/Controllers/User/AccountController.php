<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 12.10.2017
 * Time: 20:36
 */

namespace App\Controllers\User;

use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Views\View;

/**
 * Class AccountController
 * Controller für Login/Logout/Registrierung
 *
 * @package App\Controllers\User
 */
class AccountController extends Controller
{
    /**
     * Gibt Profil-View zurück
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showProfileView()
    {
        if (!login_check()) {
            return redirect('/login');
        }

        return new View('user.profile');
    }


    public function changePassword()
    {

        $validator = new Validation();

        $data = $validator->validate(
            [
                'password' => 'confirmed|min:3|max:255',
            ],
            $this->request
        );

        $userId = app()->make(Auth::class)->getUser().user_id;
        /* TODO get user, change password
        $user->password = bcrypt($data['password']);

        try {
            $user->save();
        } catch (\PDOException $e) {

            return back();
        }
        }
     */
        return redirect('/profile');
    }

}
