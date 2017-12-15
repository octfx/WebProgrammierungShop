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
 * Class RiaController
 *
 * @package App\Controllers\Ria
 */
class RiaController extends Controller
{
    /**
     * Gibt RiaDetail View zurück
     *
     * @param int $id ID der RIA
     *
     * @return \App\SparkPlug\Views\View
     */
    public function showRiaDetailsView(int $id)
    {
        $view = new View('ria.riaDetails');
        $view->setVars(
            [
                'id' => $id,
                'ria' => new Ria($id),
            ]
        );

        return $view;
    }

    /**
     * Lädt Ria hoch
     *
     */
    public function uploadRia()
    {
        $validator = new Validation();

        $data = $validator->validate(
            [
                // TODO set data
                'riaTitle' => 'string|unique:rias|min:1|max:255',
                'riaDescription' => 'string|max:1000',
                'riaFile'    => '',
                'riaIcon' => 'alpha_dash|min:2|max:20'
            ],
            $this->request
        );

        $ria = new Ria();
        $ria->name = $data['riaTitle'];
        $ria->icon = $data['riaIcon'];
        $ria->description = $data['riaDescription'];
        $ria->storage_path = $data['riaFile'];
        $ria->user_id = app()->make(Auth::class)->getUser().user_id;

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }
    }

    /**
     * Bearbeiten der Ria
     *
     */
    public function editRia(int $id)
    {
        $validator = new Validation();

        $data = $validator->validate(
            [
                // TODO set data
                'riaTitle' => 'string|unique:rias|min:1|max:255',
                'riaDescription' => 'string|max:1000',
                'riaFile'    => '',
                'riaIcon' => 'alpha_dash|min:2|max:20'
            ],
            $this->request
        );

        $ria = new Ria($id);
        $ria->name = $data['riaTitle'];
        $ria->icon = $data['riaIcon'];
        $ria->storage_path = $data['riaFile'];
        $ria->description = $data['riaDescription'];
        $ria->user_id = app()->make(Auth::class)->getUser().user_id;

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }

    }


}
