var modalUploadRia = document.getElementById('modal-upload-ria');
var modalUploadRia_openBtn = document.getElementById('btn-upload-ria');
var modalUploadRia_closeXBtn = modalUploadRia.getElementsByClassName('close')[0];
var modalUploadRia_saveBtn = document.getElementById('modal-upload-ria-save');
var modalUploadRia_closeBtn = document.getElementById('modal-upload-ria-close');
var modalUploadRia_chooseFileBtn = document.getElementById('modal-upload-ria-choose-file');
var modalUploadRia_fileInput = document.getElementById('input-ria-file');

modalUploadRia_openBtn.onclick = function () {
    modalUploadRia.style.display = 'block';
};

modalUploadRia_closeXBtn.onclick = function () {
    modalUploadRia.style.display = 'none';
};

window.onclick = function (event) {
    if (event.target === modalUploadRia) {
        modalUploadRia.style.display = 'none';
    }
};

modalUploadRia_saveBtn.onclick = function () {
    /* TODO save */
    modalUploadRia.style.display = 'none';
};

modalUploadRia_closeBtn.onclick = function () {
    modalUploadRia.style.display = 'none';
};

modalUploadRia_chooseFileBtn.onclick = function (e) {
    e.preventDefault();
    modalUploadRia_fileInput.click();
};

