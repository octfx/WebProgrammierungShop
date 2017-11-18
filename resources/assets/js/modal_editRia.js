var modalBearbeiten = document.getElementById('modal-bearbeiten');
var btnBearbeiten = document.getElementById('btn-bearbeiten');
var closeBearbeitenModal = modalBearbeiten.getElementsByClassName('close')[0];
var saveBtnBearbeiten = document.getElementById('modal-bearbeiten-save');
var deleteBtnBearbeiten = document.getElementById('modal-bearbeiten-delete');

btnBearbeiten.onclick = function() {
    modalBearbeiten.style.display = 'block';
};

closeBearbeitenModal.onclick = function() {
    modal.style.display = 'none';
};

window.onclick = function(event) {
    if (event.target == modalBearbeiten) {
        modalBearbeiten.style.display = 'none';
    }
};

saveBtnBearbeiten.onclick = function() {
    // TODO save
    modalBearbeiten.style.display = 'none';
};

deleteBtnBearbeiten.onclick = function() {
    // TODO delete
    modalBearbeiten.style.display = 'none';
};
