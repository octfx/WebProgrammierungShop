<!-- ------- upload ria modal -------- -->
<div id="modal-upload-ria" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-upload-ria-closeX">&times;</span>
            <h2>RIA hochladen</h2>
        </div>
        <div class="modal-body">

            @include('snippets.errors')
            <form method="post" action="@route('uploadRia')">
                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

                <label>Icon wählen</label>
                <div id="modal-upload-ria-icon-grid">
                    <!-- selected default icon for ria -->
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio selected">
                        <input type="radio" name="riaIcon" value="file">
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="car">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="bell">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="university">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="area-chart">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="cube">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="camera">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="calculator">
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="envelope">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="coffee">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="rocket">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="hourglass">
                        <i class="fa fa-hourglass" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="folder-open">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="microphone">
                        <i class="fa fa-microphone" aria-hidden="true"></i>
                    </div>
                    <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                        <input type="radio" name="riaIcon" value="flag">
                        <i class="fa fa-flag" aria-hidden="true"></i>
                    </div>

            </div>

                <div>
                    <label for="input-upload-ria-title">RIA Titel</label>
                    <input id="input-upload-ria-title" type="text" name="riaTitle" required tabindex="1" value="<?php echo old('riaTitle'); ?>">
                </div>

                <div>
                    <label for="modal-upload-ria-description">Beschreibung</label>
                    <textarea id="modal-upload-ria-description" name="riaDescription" tabindex="2" value="<?php echo old('riaDescription'); ?>"></textarea>
                </div>

                <div>
                    <label>RIA Datei</label>
                    <p>Wählen Sie eine Datei im .war Format aus.</p>
                    <a style="margin-left: 10px" id="modal-upload-ria-choose-file" type="button" class="extra-small-button main-button">Datei auswählen...</a>
                    <input type="file" id="modal-upload-ria-input-file" accept=".war" name="riaFile">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a id="modal-upload-ria-save" type="button" class="extra-small-button main-button">Speichern</a>
            <a id="modal-upload-ria-close" type="button" class="extra-small-button secondary-button">Abbrechen</a>
        </div>
    </div>
</div>