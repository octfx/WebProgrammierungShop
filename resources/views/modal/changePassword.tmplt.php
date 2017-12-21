<!-- modal edit ria -->
<div id="modal-change-password" class="modal" <?php if (session_has('error') && session_has('password')) {
    echo 'style="display: block;"';
} ?>>

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-change-password-closeX modal-closeX">&times;</span>
            <h2>Passwort ändern</h2>
        </div>

        <?php
        if (!is_null(session_get('error')) && is_array(session_get('error')) && session_has('password')) {
            $string = '<ul class="error">';
            foreach (session_get('error') as $error) {
                $string .= "<li>{$error}</li>";
            }
            $string .= '</ul>';

            echo $string;
        }
        ?>
        <form method="post" action="@route('changePassword')" id="modal-change-password-form">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>"/>

            <div class="modal-body">

                <div class="input-group">
                    <label for="modal-change-password-input">Neues Passwort</label>
                    <input id="modal-change-password-input" name="password" type="password" required tabindex="1"/>
                </div>

                <div class="input-group">
                    <label for="modal-change-password-wiederholt-input">Neues Passwort wiederholen</label>
                    <input id="modal-change-password-wiederholt-input" type="password" name="password_confirmation"
                           required tabindex="2"/>
                </div>
            </div>
            <div class="modal-footer">
                <button id="modal-change-password-save" type="submit" class="extra-small-button main-button">Änderungen
                    speichern
                </button>
                <a id="modal-change-password-cancel" class="button extra-small-button secondary-button">Abbrechen</a>
            </div>
        </form>
    </div>
</div>