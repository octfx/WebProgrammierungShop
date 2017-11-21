window.onload = function () {

    var modalEditRia = document.getElementById('modal-edit-ria');
    var modalEditRia_openBtn = document.getElementById('btn-edit-ria');
    var modalEditRia_closeXBtn = document.getElementById('modal-edit-ria-closeX');
    var modalEditRia_saveBtn = document.getElementById('modal-edit-ria-save');
    var modalEditRia_deleteBtn = document.getElementById('modal-edit-ria-delete');

    if (modalEditRia_openBtn !== null) {
        modalEditRia_openBtn.onclick = function () {
            modalEditRia.style.display = 'block';
        };
    }

    if (modalEditRia_closeXBtn !== null && modalEditRia !== null) {
        modalEditRia_closeXBtn.onclick = function () {
            modalEditRia.style.display = 'none';
        };
    }

    window.onclick = function (event) {
        if (event.target === modalEditRia && modalEditRia !== null) {
            modalEditRia.style.display = 'none';
        }
    };

    if (modalEditRia_saveBtn !== null && modalEditRia !== null) {
        modalEditRia_saveBtn.onclick = function () {
            // TODO save
            modalEditRia.style.display = 'none';
        };
    }

    if (modalEditRia_deleteBtn !== null && modalEditRia !== null) {
        modalEditRia_deleteBtn.onclick = function () {
            // TODO delete
            modalEditRia.style.display = 'none';
        };
    }

}