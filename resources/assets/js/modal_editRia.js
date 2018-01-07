var modalEditRia = document.getElementById('modal-edit-ria');
var modalEditRia_openBtn = document.getElementById('btn-edit-ria');
var modalEditRia_closeXBtn = document.getElementsByClassName('modal-edit-ria-closeX');
var modalEditRia_saveBtn = document.getElementById('modal-edit-ria-save');
var modalEditRia_cancelBtn = document.getElementById('modal-edit-ria-cancel');

var modalEditRia_chooseFileBtn = document.getElementById('modal-edit-ria-choose-file');
var modalEditRia_fileInput = document.getElementById('modal-edit-ria-input-file');

/**
 *  reset all inputs of modal, so that inputs are clear when reopened
 */
var modalEditRia_resetModalInputs = function() {

    if(debug) {
        console.log("Resetting edit ria modal input values to database values");
    }
    location.reload();
};

var modalEditRia_closeModal = function () {
    if(modalEditRia !== null) {
        modalEditRia.style.display = 'none';
    }
    modalEditRia_resetModalInputs();

    if(debug) {
        console.log("Edit ria modal closed");
    }
};


if (modalEditRia_openBtn !== null) {
    modalEditRia_openBtn.onclick = function () {
        if(debug) {
            console.log("Open edit ria modal button clicked");
        }
        modalEditRia.style.display = 'block';
        if(debug) {
            console.log("Showing edit ria modal");
        }
    };
}

if (modalEditRia_closeXBtn !== null && modalEditRia !== null) {
    for (var i = 0; i < modalEditRia_closeXBtn.length; i++) {
        modalEditRia_closeXBtn[i].onclick = function () {
            if(debug) {
                console.log("Close edit ria modal button clicked");
            }
            modalEditRia_closeModal();
        };
    }
}

window.onclick = function (event) {
    if (event.target === modalEditRia && modalEditRia !== null) {
        modalEditRia_closeModal();
    }
};

if (modalEditRia_saveBtn !== null && modalEditRia !== null) {
    modalEditRia_saveBtn.onclick = function () {
        if(debug) {
            console.log("Saving ria values");
        }
        modalEditRia_closeModal();
    };
}

if (modalEditRia_cancelBtn !== null && modalEditRia !== null) {
    modalEditRia_cancelBtn.onclick = function () {
        if(debug) {
            console.log("Cancel editing ria button clicked");
        }
        modalEditRia_closeModal();
    };
}

if (modalEditRia_chooseFileBtn !== null && modalEditRia_fileInput !== null) {
    modalEditRia_chooseFileBtn.onclick = function (event) {
        event.preventDefault();
        if(debug) {
            console.log("Choose file button clicked");
        }
        modalEditRia_fileInput.click();
    };
}
