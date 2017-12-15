<!--  upload ria modal -->
<div id="modal-upload-ria" class="modal" <?php if (!is_null(session_get('error'))) { echo 'style="display: block;"'; } ?>>
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-upload-ria-closeX">&times;</span>
            <h2>RIA hochladen</h2>
        </div>
        <div class="modal-body">

            @include('snippets.errors')
            <form method="post" action="@route('uploadRia')" id="ria-upload-form">
                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

                <label>Icon wählen</label>
                <div id="modal-upload-ria-icon-grid">
                    <!-- selected default icon for ria -->
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio selected">
                        <input type="radio" name="icon_name" value="file" checked>
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="car">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="bell">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="university">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="area-chart">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="cube">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="camera">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="calculator">
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="envelope">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="coffee">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="rocket">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="hourglass">
                        <i class="fa fa-hourglass" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="folder-open">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="microphone">
                        <i class="fa fa-microphone" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="icon_name" value="flag">
                        <i class="fa fa-flag" aria-hidden="true"></i>
                    </div>

            </div>

                <div>
                    <label for="input-upload-ria-title">RIA Titel</label>
                    <input id="input-upload-ria-title" type="text" name="name" required tabindex="1" value="<?php echo old('name'); ?>">
                </div>

                <div>
                    <label for="modal-upload-ria-description">Beschreibung</label>
                    <textarea id="modal-upload-ria-description" name="description" tabindex="2"><?php echo old('description'); ?></textarea>
                </div>

                <div>
                    <label>RIA Datei</label>
                    <p>Wählen Sie eine Datei im .war Format aus.</p>
                    <button id="modal-upload-ria-choose-file" class="extra-small-button main-button">Datei auswählen...</button>
                    <input type="file" id="modal-upload-ria-input-file" accept=".war" name="riaFile">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button id="modal-upload-ria-save" class="extra-small-button main-button">Speichern</button>
            <button id="modal-upload-ria-close" class="extra-small-button secondary-button">Abbrechen</button>
        </div>
    </div>
</div>