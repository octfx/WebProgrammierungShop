<!-- modal edit ria -->
<div id="modal-edit-ria" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-edit-ria-closeX">&times;</span>
            <h2>RIA bearbeiten</h2>
        </div>

        @include('snippets.errors')
        <form method="post" action="href="@route('editRia', $id)"">

            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

            <div class="modal-body">

                <label>Icon</label>
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
                    <label for="input-edit-ria-title">RIA Titel</label>
                    <input id="input-edit-ria-title" type="text" name="riaTitle" required tabindex="1" value="<?php $ria->name ?>">
                </div>

                <div>
                    <label for="modal-edit-ria-description">Beschreibung</label>
                    <textarea id="modal-edit-ria-description" name="riaDescription" tabindex="2" value="<?php $ria->description ?>">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</textarea>
                </div>

                <div>
                    <label>RIA Datei</label>
                    <p>Dateiname.war</p> <!-- TODO file name and other ria data from db -->
                    <a style="margin-left: 10px" id="modal-edit-ria-choose-file" type="button" class="extra-small-button main-button">Andere Datei auswählen...</a>
                    <input type="file" id="modal-edit-ria-input-file" accept=".war" name="riaFile" value="<?php $ria->storage_path ?>">
                </div>
            </div>
            <div class="modal-footer">
                <a id="modal-edit-ria-save" type="button" class="extra-small-button main-button">Speichern</a>
                <a id="modal-edit-ria-delete" type="button" class="extra-small-button secondary-button">Löschen</a>
            </div>
        </form>
    </div>
</div>