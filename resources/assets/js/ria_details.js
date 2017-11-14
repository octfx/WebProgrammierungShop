/* --------------- Bewertung Modal --------------- */

var modalBewertung = document.getElementById('modal-bewertung');
var btnBewertung = document.getElementById("btn-bewertung");
var spanBewertung = modalBewertung.getElementsByClassName("close")[0];
var saveBtnBewertung = document.getElementById("modal-bewertung-save");
var deleteBtnBewertung = document.getElementById("modal-bewertung-delete");

btnBewertung.onclick = function() {
    modalBewertung.style.display = "block";
};

spanBewertung.onclick = function() {
    modalBewertung.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modalBewertung) {
        modalBewertung.style.display = "none";
    }
};

saveBtnBewertung.onclick = function() {
    /* TODO save */
    modalBewertung.style.display = "none";
};

deleteBtnBewertung.onclick = function() {
    /* TODO delete */
   modalBewertung.style.display = "none";
};

/* --------------- Bearbeiten Modal --------------- */

/*
var modalBearbeiten = document.getElementById('modal-bearbeiten');
var btnBearbeiten = document.getElementById("btn-bearbeiten");
var spanBearbeiten = modalBearbeiten.getElementsByClassName("close")[0];
var saveBtnBearbeiten = document.getElementById("modal-bearbeiten-save");
var deleteBtnBearbeiten = document.getElementById("modal-bearbeiten-delete");

btnBearbeiten.onclick = function() {
    modalBearbeiten.style.display = "block";
};

spanBearbeiten.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modalBearbeiten) {
        modalBearbeiten.style.display = "none";
    }
};

saveBtnBearbeiten.onclick = function() {
    // TODO save
    modalBearbeiten.style.display = "none";
};

deleteBtnBearbeiten.onclick = function() {
    // TODO delete
    modalBearbeiten.style.display = "none";
};

*/

