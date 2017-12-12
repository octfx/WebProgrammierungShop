<!-- modal edit ria -->
<div id="modal-change-password" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-edit-ria-closeX">&times;</span>
            <h2>Passwort ändern</h2>
        </div>
        <div class="modal-body">

            <div class="input-group">
                <label for="modal-change-password-input">Neues Passwort</label>
                <input id="modal-change-password-input" name="password" type="password" required tabindex="1"/>
            </div>

            <div class="input-group">
                <label for="modal-change-password-wiederholt-input">Neues Passwort wiederholen</label>
                <input id="modal-change-password-wiederholt-input" type="password" name="password_confirmation" required tabindex="2"/>
            </div>
        </div>
        <div class="modal-footer">
            <a id="modal-change-password-save" type="button" class="extra-small-button main-button">Änderungen speichern</a>
            <a id="modal-change-password-cancel" type="button" class="extra-small-button secondary-button">Abbrechen</a>
        </div>
    </div>
</div>