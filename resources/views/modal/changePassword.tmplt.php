<!-- modal edit ria -->
<div id="modal-change-password" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-change-password-closeX modal-closeX">&times;</span>
            <h2>Passwort ändern</h2>
        </div>

        @include('snippets.errors')
        <form method="post" action="@route('changePassword')">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

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
                <button id="modal-change-password-save" type="submit" class="extra-small-button main-button">Änderungen speichern</button>
                <a id="modal-change-password-cancel" type="button" class="extra-small-button secondary-button">Abbrechen</a>
            </div>

        </form>
    </div>
</div>