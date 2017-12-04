<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 12.10.2017
 * Time: 20:38
 */

namespace App\Controllers\User\Auth;

use App\SparkPlug\Auth\Auth;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Session;
use App\SparkPlug\Validation\Validation;
use App\SparkPlug\Views\View;
use App\SparkPlug\Views\ViewInterface;

/**
 * Class LoginController
 *
 * @package App\Controllers\User\Auth
 */
class LoginController extends Controller
{
    /**
     * Login View
     *
     * @return \App\SparkPlug\Views\ViewInterface
     */
    public function showLoginView(): ViewInterface
    {
        return new View('user.auth.login');
    }

    /**
     * @return mixed
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function login()
    {
        $validator = new Validation();

        $validator->validate(
            [
                'username' => 'username|min:3|max:255',
                'password' => 'min:3|max:255',
            ],
            $this->request
        );

        /** @var Auth $auth */
        $auth = app()->make(Auth::class);
        if (!$auth->attempt(
            $this->request->all()
        )) {
            /** @var Session $session */
            $session = app()->make(Session::class);
            $session->error = 'Benutzername oder Passwort falsch!';
            $session->username = $this->request->get('username');

            return back();
        }

        return redirect('/profile');
    }

    public function logout()
    {
        session_set('user', null);
        session_write_close();

        return redirect('/');
    }
}
