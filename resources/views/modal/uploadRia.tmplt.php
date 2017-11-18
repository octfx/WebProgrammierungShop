<!-- ------- upload ria modal -------- -->
<div id="modal-upload-ria" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>RIA hochladen</h2>
        </div>
        <div class="modal-body">

            <img class="ria-image" src="/img/ria_detail_placeholder.png" alt="RIA icon">
            <a id="btn-change-icon" type="button" class="extra-small-button main-button">Icon wählen</a>
            <div>
                <label for="input-upload-ria-title">RIA Titel</label>
                <input id="input-upload-ria-title" type="text" placeholder="RIA Title">
            </div>
            <label for="modal-upload-ria-description">Beschreibung</label>
            <textarea id="modal-upload-ria-description"></textarea>

            <label>RIA Datei</label>
            <p style="display: inline-block">Wählen Sie eine Datei im .war Format aus.</p>
            <a style="margin-left: 10px" id="modal-upload-ria-choose-file" type="button" class="extra-small-button main-button">Datei auswählen...</a>
            <input type="file" id="input-ria-file" accept=".war"> <!-- TODO server side testing of accepted file type -->
        </div>
        <div class="modal-footer">
            <a id="modal-upload-ria-save" type="button" class="extra-small-button main-button">Speichern</a>
            <a id="modal-upload-ria-close" type="button" class="extra-small-button secondary-button">Löschen</a>
        </div>
    </div>
</div>