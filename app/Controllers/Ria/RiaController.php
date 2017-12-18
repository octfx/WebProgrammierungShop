<?php declare(strict_types = 1);
/**
 * User: Nastassia
 * Date: 17.11.2017
 * Time: 16:38
 */

namespace App\Controllers\Ria;

use App\Models\Ria;
use App\SparkPlug\Auth\Auth;
use App\SparkPlug\Controllers\AbstractController as Controller;
use App\SparkPlug\Validation\Validation;
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
                'id'  => $id,
                'ria' => new Ria($id),
            ]
        );

        return $view;
    }

    /**
     * Lädt Ria hoch
     *
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function uploadRia()
    {
        if (!login_check()) {
            return redirect('/login');
        }

        $validator = new Validation();

        $data = $validator->validate(
            [
                // TODO set data
                'name'        => 'string|unique:rias|min:1|max:255',
                'description' => 'string|min:3|max:1000',
                'riaFile'     => 'file',
                'icon_name'   => 'alpha_dash|min:2|max:20',
            ],
            $this->request
        );

        if (pathinfo($data['riaFile']['name'], PATHINFO_EXTENSION) !== 'war') {
            session_set('error', ['Es dürfen nur WAR Dateien hochgeladen werden']);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

            return back();
        }

        if ($data['riaFile']['size'] > $this->maxFileUploadInBytes()) {
            session_set('error', ['Datei zu groß']);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

            return back();
        }

        $ria = new Ria();
        $ria->name = $data['name'];
        $ria->description = $data['description'];
        $ria->icon_name = $data['icon_name'];
        $ria->user_id = app()->make(Auth::class)->getUser()->user_id;

        $fileName = sha1($data['riaFile']['name'].uniqid()).'.'.pathinfo($data['riaFile']['name'], PATHINFO_EXTENSION);
        $fileName = 'rias/'.$fileName;

        if (!move_uploaded_file($data['riaFile']['tmp_name'], storage_path('').$fileName)) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }

        $ria->storage_path = $fileName;

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }

        return back();
    }

    /**
     * Bearbeiten der Ria
     *
     * @param int $id
     *
     * @return mixed
     * @throws \App\SparkPlug\Validation\Exceptions\ValidationException
     */
    public function editRia(int $id)
    {
        if (!login_check()) {
            return redirect('/login');
        }

        $validator = new Validation();

        $data = $validator->validate(
            [
                // TODO set data
                'riaTitle'       => 'string|min:1|max:255',
                'riaDescription' => 'string|max:1000',
                'riaIcon'        => 'alpha_dash|min:2|max:20',
            ],
            $this->request
        );

        $ria = new Ria($id);

        if ($ria->user_id !== app()->make(Auth::class)->getUser()->user_id) {
            session_set('error', ['Keine Berechtigung!']);

            return back();
        }

        $ria->name = $data['riaTitle'];
        $ria->icon_name = $data['riaIcon'];
        $ria->description = $data['riaDescription'];

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }
        session_set('message', 'Gespeichert');

        return back();
    }

    /**
     * @param $val
     *
     * @return int|string
     */
    private function returnBytes($val)
    {
        $val = trim($val);
        $last = strtolower($val[strlen($val) - 1]);
        $val = intval($val);

        switch ($last) {
            case 'g':
            case 'm':
            case 'k':
                $val *= 1024;
                break;
        }

        return $val;
    }

    /**
     * @return mixed
     */
    private function maxFileUploadInBytes()
    {
        $maxUpload = $this->returnBytes(ini_get('upload_max_filesize'));
        $maxPost = $this->returnBytes(ini_get('post_max_size'));
        $memoryLimit = $this->returnBytes(ini_get('memory_limit'));

        return min($maxUpload, $maxPost, $memoryLimit);
    }
}
