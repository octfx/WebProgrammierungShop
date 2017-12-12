var modalEditRia = document.getElementById('modal-edit-ria');
var modalEditRia_openBtn = document.getElementById('btn-edit-ria');
var modalEditRia_closeXBtn = document.getElementsByClassName('modal-edit-ria-closeX');
var modalEditRia_saveBtn = document.getElementById('modal-edit-ria-save');
var modalEditRia_deleteBtn = document.getElementById('modal-edit-ria-delete');

var modalEditRia_chooseFileBtn = document.getElementById('modal-edit-ria-choose-file');
var modalEditRia_fileInput = document.getElementById('modal-edit-ria-input-file');

/*
var modalEditRia_iconRadios = document.getElementsByClassName('modal-edit-ria-icon-radio');
*/

if (modalEditRia_openBtn !== null) {
    modalEditRia_openBtn.onclick = function () {
        // TODO if(debug === true) {
        console.log("Open edit ria modal button clicked");
        // }
        modalEditRia.style.display = 'block';
    };
}

if (modalEditRia_closeXBtn !== null && modalEditRia !== null) {
    for (var i = 0; i < modalEditRia_closeXBtn.length; i++) {
        modalEditRia_closeXBtn[i].onclick = function () {
            modalEditRia.style.display = 'none';
        };
    }
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

if (modalEditRia_chooseFileBtn !== null && modalEditRia_fileInput !== null) {
    modalEditRia_chooseFileBtn.onclick = function (event) {
        event.preventDefault();
        modalEditRia_fileInput.click();
    };
}

/*

if (modalEditRia_iconRadios !== null) {
    for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
        modalEditRia_iconRadios[i].onclick = function () {
            removeSelectedFromAllIconRadios();
            this.classList.add('selected');
            // TODO process chosen icon with getClassNameOfChosenIcon();
        };
    }
}


var removeSelectedFromAllIconRadios = function () {
    if (modalEditRia_iconRadios !== null) {
        for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
            modalEditRia_iconRadios[i].classList.remove('selected');
        }
    }
};
*/
/**
 * @return font awesome icon class name of selected icon
 */
/*
var getClassNameOfChosenIcon = function () {
    if (modalEditRia_iconRadios !== null) {
        for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
            if (modalEditRia_iconRadios[i].classList.contains('selected')) {

                var fa = modalEditRia_iconRadios[i].getElementsByClassName('fa')[0];
                for (var j = 0; j < fa.classList.length; j++) {

                    if (fa.classList[j].match('fa-')) {

                        // TODO if(debug === true) {
                        console.log("Font awesome icon for RIA with class " + fa.classList[j] + " selected");
                        // }
                        return fa.classList[j];
                    }
                }
            }
        }
    }
    return null;
}
*/