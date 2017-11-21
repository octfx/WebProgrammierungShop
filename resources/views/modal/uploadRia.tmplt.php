<!-- ------- upload ria modal -------- -->
<div id="modal-upload-ria" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX" id="modal-upload-ria-closeX">&times;</span>
            <h2>RIA hochladen</h2>
        </div>
        <div class="modal-body">

            <label>Icon wählen</label>
            <div id="modal-upload-ria-icon-grid">
                <!-- selected default icon for ria -->
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio selected">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-car" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-calculator" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-coffee" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-hourglass" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-microphone" aria-hidden="true"></i>
                </div>
                <div class="modal-upload-ria-icon modal-upload-ria-icon-radio">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                </div>
            </div>

            <div>
                <label for="input-upload-ria-title">RIA Titel</label>
                <input id="input-upload-ria-title" type="text" placeholder="RIA Title">
            </div>

            <div>
                <label for="modal-upload-ria-description">Beschreibung</label>
                <textarea id="modal-upload-ria-description"></textarea>
            </div>

            <div>
                <label>RIA Datei</label>
                <p>Wählen Sie eine Datei im .war Format aus.</p>
                <a style="margin-left: 10px" id="modal-upload-ria-choose-file" type="button" class="extra-small-button main-button">Datei auswählen...</a>
                <input type="file" id="modal-upload-ria-input-file" accept=".war"> <!-- TODO server side testing of accepted file type -->
            </div>
        </div>
        <div class="modal-footer">
            <a id="modal-upload-ria-save" type="button" class="extra-small-button main-button">Speichern</a>
            <a id="modal-upload-ria-close" type="button" class="extra-small-button secondary-button">Löschen</a>
        </div>
    </div>
</div>