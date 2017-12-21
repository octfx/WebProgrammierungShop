<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 18.12.2017
 * Time: 17:16
 */

namespace App\Controllers;

use App\Models\Rating;
use App\SparkPlug\Auth\Auth;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Validation\Validation;

class RatingController extends Controller
{
    /**
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function addRating()
    {
        if (!login_check()) {
            return redirect('/login');
        }

        $validator = new Validation();

        $data = $validator->validate(
            [
                'rating'  => 'int|min:1|max:5',
                'comment' => 'nullable|string|min:3|max:255',
                'ria_id'  => 'int|exists:rias',
            ],
            $this->request
        );

        $rating = new Rating($data);
        $rating->ria_id = $data['ria_id'];
        $rating->user_id = app()->make(Auth::class)->getUser()->user_id;

        try {
            $rating->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern des Kommentars']);

            return back();
        }

        return back();
    }
}
