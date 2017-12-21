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
use ZipArchive;

/**
 * Class RiaController
 *
 * @package App\Controllers\Ria
 */
class RiaController extends Controller
{
    const RIA_EXTENSION = '.war';

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
                'file'        => 'file',
                'icon_id'     => 'int|exists:icons',
            ],
            $this->request
        );

        if ('.'.pathinfo($data['file']['name'], PATHINFO_EXTENSION) !== static::RIA_EXTENSION) {
            session_set('error', ['Es dürfen nur WAR Dateien hochgeladen werden']);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

            return back();
        }

        $ria = new Ria();
        $ria->name = $data['name'];
        $ria->description = $data['description'];
        $ria->icon_id = $data['icon_id'];
        $ria->user_id = app()->make(Auth::class)->getUser()->user_id;

        $fileHash = sha1($data['file']['name'].uniqid());
        $fileName = $fileHash;
        $fileName = 'rias/'.$fileName;

        if (!move_uploaded_file($data['file']['tmp_name'], storage_path('').$fileName.static::RIA_EXTENSION)) {
            session_set('error', ['Fehler beim Speichern der RIA']);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

            return back();
        }

        $ria->storage_path = $fileName;

        $zip = new ZipArchive();
        $archive = $zip->open(storage_path('').$fileName.static::RIA_EXTENSION);

        if ($archive !== true) {
            session_set('error', ['Fehler beim Entpacken der RIA']);
            unlink(storage_path('').$fileName.static::RIA_EXTENSION);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

            return back();
        }

        $zip->extractTo(storage_path('').$fileName);
        $zip->close();

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);
            session_set('name', $data['name']);
            session_set('description', $data['description']);

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
                'ria_name'    => 'string|min:1|max:255',
                'description' => 'string|max:1000',
                'icon_id'     => 'int|exists:icons',
            ],
            $this->request
        );

        $ria = new Ria($id);

        if ($ria->user_id !== app()->make(Auth::class)->getUser()->user_id) {
            session_set('error', ['Keine Berechtigung!']);

            return back();
        }

        $ria->name = $data['ria_name'];
        $ria->icon_id = $data['icon_id'];
        $ria->description = $data['description'];

        try {
            $ria->save();
        } catch (\PDOException $e) {
            session_set('error', ['Fehler beim Speichern der RIA']);

            return back();
        }
        session_set('message', 'Gespeichert');

        return back();
    }
}
