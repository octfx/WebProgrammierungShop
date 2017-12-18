<!-- modal review ria -->
<div id="modal-review-ria" class="modal" <?php if (session_has('error')) { echo 'style="display: block;"'; } ?>>
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-review-ria-closeX modal-closeX">&times;</span>
            <h2>RIA bewerten</h2>
        </div>

        @include('snippets.errors')
        <form method="post" action="@route('add_rating')" id="ria-review-modal">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />
            <input type="hidden" name="ria_id" value="<?php echo $id; ?>" />
            <div class="modal-body">

                <label style="margin-top:0;">Wertung</label>
                <span class="editable-star-rating">
                    <input type="hidden" name="ratingDoubleValue" value="4.3"> <!-- TODO set rating value from db -->

                   <label class="label-rating">
                       <input name="rating" class="input-rating" type="radio" value="5">
                     </label>
                     <label class="label-rating">
                       <input name="rating" class="input-rating" type="radio" value="4">
                     </label>
                     <label class="label-rating">
                       <input name="rating" class="input-rating" type="radio" value="3">
                     </label>
                     <label class="label-rating">
                       <input name="rating" class="input-rating" type="radio" value="2">
                     </label>
                     <label class="label-rating">
                       <input name="rating" class="input-rating" type="radio" value="1">
                     </label>
                </span>
                <label for="modal-review-ria-description">Beschreibung</label>
                <textarea id="modal-review-ria-description" name="comment"></textarea>
            </div>
            <div class="modal-footer">
                <a id="modal-review-ria-save" class="button extra-small-button main-button">Speichern</a>
                <a id="modal-review-ria-close" class="button extra-small-button secondary-button">Abbrechen</a>
            </div>

        </form>
    </div>
</div>