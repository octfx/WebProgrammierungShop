<!-- modal review ria -->
<div id="modal-bewertung" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>RIA bewerten</h2>
        </div>
        <div class="modal-body">
            <label style="margin-top:0;">Wertung</label>
            <span class="editable-star-rating">
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
            <label for="modal-bewertung-description">Beschreibung</label>
            <textarea id="modal-bewertung-description"></textarea>
        </div>
        <div class="modal-footer">
            <a id="modal-bewertung-save" type="button" class="extra-small-button main-button">Speichern</a>
            <a id="modal-bewertung-delete" type="button" class="extra-small-button secondary-button">Löschen</a>
        </div>
    </div>
</div>