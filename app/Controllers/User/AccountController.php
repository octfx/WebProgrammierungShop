<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 12.10.2017
 * Time: 20:36
 */

namespace App\Controllers\User;

use App\SparkPlug\Auth\Auth;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Validation\Validation;
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

        $view = new View('user.profile');
        $view->setVars(
            [
                'rias' => app()->make(Auth::class)->getUser()->rias(),
            ]
        );

        return $view;
    }


    /**
     * @return \App\SparkPlug\Response\Redirect
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function changePassword()
    {
        $validator = new Validation();

        $data = $validator->validate(
            [
                'password' => 'confirmed|min:3|max:255',
            ],
            $this->request
        );

        $user = app()->make(Auth::class)->getUser();

        $user->password = bcrypt($data['password']);

        try {
            $user->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler bei der Speicherung']);

            return back();
        }

        session_set('message', 'Passwort gespeichert');

        return back();
    }

    /**
     * @return \App\SparkPlug\Response\Redirect
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function updateProfile()
    {
        $validator = new Validation();

        $data = $validator->validate(
            [
                'color' => 'string|min:7|max:7',
            ],
            $this->request
        );

        /** @var \App\Models\User $user */
        $user = app()->make(Auth::class)->getUser();
        $user->color = $data['color'];

        try {
            $user->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler bei der Speicherung']);

            return back();
        }

        session_set('message', 'Farbe gespeichert');

        return back();
    }
}