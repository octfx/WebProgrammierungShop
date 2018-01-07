var modalUploadRia = document.getElementById('modal-upload-ria');
var modalUploadRia_openBtn = document.getElementById('btn-upload-ria');
var modalUploadRia_closeXBtn = document.getElementsByClassName('modal-upload-ria-closeX');
var modalUploadRia_saveBtn = document.getElementById('modal-upload-ria-save');
var modalUploadRia_closeBtn = document.getElementById('modal-upload-ria-close');

var modalUploadRia_chooseFileBtn = document.getElementById('modal-upload-ria-choose-file');
var modalUploadRia_fileInput = document.getElementById('modal-upload-ria-input-file');
var modalEditRia_iconRadios = document.getElementsByClassName('modal-upload-ria-icon-radio');


/**
 *  reset all inputs of modal, so that inputs are clear when reopened
 */
var modalUploadRia_resetModalInputs = function() {

    if(debug) {
        console.log("Resetting upload ria modal input values to database values");
    }
    location.reload();
};

var modalUploadRia_closeModal = function () {
    if(modalUploadRia !== null) {
        modalUploadRia.style.display = 'none';
    }
    modalUploadRia_resetModalInputs();

    if(debug) {
        console.log("Upload ria modal closed");
    }
};

if (modalUploadRia_openBtn !== null && modalUploadRia !== null) {

    modalUploadRia_openBtn.onclick = function () {
        if(debug) {
            console.log("Open upload ria modal button clicked");
        }
        modalUploadRia.style.display = 'block';
    };
}

if (modalUploadRia_closeXBtn !== null && modalUploadRia !== null) {
    for (var j = 0; j < modalUploadRia_closeXBtn.length; j++) {
        modalUploadRia_closeXBtn[j].onclick = function () {
            modalUploadRia_closeModal();
        };
    }
}

window.onclick = function (event) {
    if (event.target === modalUploadRia && modalUploadRia !== null) {
        modalUploadRia_closeModal();
    }
};

if (modalUploadRia_saveBtn !== null && modalUploadRia !== null) {
    modalUploadRia_saveBtn.onclick = function () {
        if(debug) {
            console.log('Upload ria')
        }
        document.getElementById('ria-upload-form').submit();
    };
}

if (modalUploadRia_closeBtn !== null && modalUploadRia !== null) {
    modalUploadRia_closeBtn.onclick = function () {
        modalUploadRia_closeModal();
    };
}

if (modalUploadRia_chooseFileBtn !== null && modalUploadRia_fileInput !== null) {
    modalUploadRia_chooseFileBtn.onclick = function (event) {
        event.preventDefault();
        if(debug) {
            console.log("Choose file button clicked");
        }
        modalUploadRia_fileInput.click();
    };
}

if (modalEditRia_iconRadios !== null) {
    for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
        modalEditRia_iconRadios[i].onclick = function () {
            removeSelectedFromAllIconRadios();
            this.classList.add('selected');
            this.getElementsByTagName('input')[0].checked = true;
        };
    }
}


var removeSelectedFromAllIconRadios = function () {
    if(debug) {
        console.log('Remove selected attribute from all icons');
    }
    if (modalEditRia_iconRadios !== null) {
        for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
            modalEditRia_iconRadios[i].classList.remove('selected');
            modalEditRia_iconRadios[i].getElementsByTagName('input')[0].setAttribute("checked", "");
        }
    }
};

if(modalUploadRia_fileInput !== null) {
    modalUploadRia_fileInput.addEventListener('change', function () {
        var fullPath = modalUploadRia_fileInput.value;

        if(fullPath) {

            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var fileName = fullPath.substring(startIndex);
            if (fileName.indexOf('\\') === 0 || fileName.indexOf('/') === 0) {
                fileName = fileName.substring(1);
            }

            if(debug) {
                console.log("Update displayed name of chosen file")
            }
            document.getElementById('modal-upload-ria-file-name').innerHTML = fileName;
        }

    });
}





