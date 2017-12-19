<!-- modal edit ria -->
<div id="modal-edit-ria" class="modal" <?php if (session_has('error')) { echo 'style="display: block;"'; } ?>>

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-closeX modal-edit-ria-closeX">&times;</span>
            <h2>RIA bearbeiten</h2>
        </div>

        @include('snippets.errors')
        <form id="modal-edit-ria-form" method="post" action="@route('editRia', <?php echo $id; ?>)">

            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />

            <div class="modal-body">

                <label>Icon</label>
                <div id="modal-upload-ria-icon-grid">

                    <?php foreach (app()->make(\App\Models\Icon::class)->all() as $icon) { ?>
                        <div class="modal-upload-ria-icon modal-upload-ria-icon-radio <?php if ($ria->icon() == $icon->name) { ?>selected<?php } ?>">
                            <input type="radio" name="riaIcon" value="<?php $icon->name ?>" <?php if ($ria->icon() == $icon->name) { ?>checked<?php } ?>>
                            <i class="fa fa-<?php $icon->name ?>" aria-hidden="true"></i>
                        </div>
                    <?php } ?>

                </div>

                <div>
                    <label for="input-edit-ria-title">RIA Titel</label>
                    <input id="input-edit-ria-title" type="text" name="riaTitle" required tabindex="1" value="<?php echo $ria->name ?>">
                </div>

                <div>
                    <label for="modal-edit-ria-description">Beschreibung</label>
                    <textarea id="modal-edit-ria-description" name="riaDescription" tabindex="2"><?php echo $ria->description ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button id="modal-edit-ria-save" type="submit" class="extra-small-button main-button">Speichern</button>
                <a id="modal-edit-ria-cancel" class="button extra-small-button secondary-button">Abbrechen</a>
            </div>
        </form>
    </div>
</div>