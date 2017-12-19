<!--  upload ria modal -->
<div id="modal-upload-ria" class="modal" <?php if (session_has('error')) { echo 'style="display: block;"'; } ?>>
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-upload-ria-closeX">&times;</span>
            <h2>RIA hochladen</h2>
        </div>
        <div class="modal-body">

            @include('snippets.errors')
            <form method="post" action="@route('uploadRia')" id="ria-upload-form" enctype="multipart/form-data">
                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

                <label>Icon wählen</label>
                <div id="modal-upload-ria-icon-grid">
                    <!-- selected default icon for ria -->
                    <?php foreach (app()->make(\App\Models\Icon::class)->all() as $icon) { ?>
                        <div class="modal-upload-ria-icon modal-upload-ria-icon-radio <?php if ($icon->name == 'file') { ?>selected<?php } ?>">
                            <input type="radio" name="riaIcon" value="<?php echo $icon->name ?>" <?php if ($icon->name == 'file') { ?>checked<?php } ?>>
                            <i class="fa fa-<?php echo $icon->name ?>" aria-hidden="true"></i>
                        </div>
                    <?php } ?>

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
                    <p id="modal-upload-ria-file-name">Wählen Sie eine Datei im .war Format aus.</p>
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