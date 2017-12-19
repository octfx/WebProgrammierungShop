var modalUploadRia = document.getElementById('modal-upload-ria');
var modalUploadRia_openBtn = document.getElementById('btn-upload-ria');
var modalUploadRia_closeXBtn = document.getElementsByClassName('modal-upload-ria-closeX');
var modalUploadRia_saveBtn = document.getElementById('modal-upload-ria-save');
var modalUploadRia_closeBtn = document.getElementById('modal-upload-ria-close');

var modalUploadRia_chooseFileBtn = document.getElementById('modal-upload-ria-choose-file');
var modalUploadRia_fileInput = document.getElementById('modal-upload-ria-input-file');
var modalEditRia_iconRadios = document.getElementsByClassName('modal-upload-ria-icon-radio');

if (modalUploadRia_openBtn !== null && modalUploadRia !== null) {
    modalUploadRia_openBtn.onclick = function () {
        modalUploadRia.style.display = 'block';
    };
}

if (modalUploadRia_closeXBtn !== null && modalUploadRia !== null) {
    for (var i = 0; i < modalUploadRia_closeXBtn.length; i++) {
        modalUploadRia_closeXBtn[i].onclick = function () {
            modalUploadRia.style.display = 'none';
        };
    }
}

window.onclick = function (event) {
    if (event.target === modalUploadRia && modalUploadRia !== null) {
        modalUploadRia.style.display = 'none';
    }
};

if (modalUploadRia_saveBtn !== null && modalUploadRia !== null) {
    modalUploadRia_saveBtn.onclick = function () {
        document.getElementById('ria-upload-form').submit();
        modalUploadRia.style.display = 'none';
    };
}

if (modalUploadRia_closeBtn !== null && modalUploadRia !== null) {
    modalUploadRia_closeBtn.onclick = function () {
        modalUploadRia.style.display = 'none';
    };
}

if (modalUploadRia_chooseFileBtn !== null && modalUploadRia_fileInput !== null) {
    modalUploadRia_chooseFileBtn.onclick = function (event) {
        event.preventDefault();
        modalUploadRia_fileInput.click();
    };
}

if (modalEditRia_iconRadios !== null) {
    for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
        modalEditRia_iconRadios[i].onclick = function () {
            removeSelectedFromAllIconRadios();
            this.classList.add('selected');
            this.getElementsByTagName('input')[0].checked = true;
            // TODO process chosen icon with getClassNameOfChosenIcon();
        };
    }
}


var removeSelectedFromAllIconRadios = function () {
    if (modalEditRia_iconRadios !== null) {
        for (var i = 0; i < modalEditRia_iconRadios.length; i++) {
            modalEditRia_iconRadios[i].classList.remove('selected');
            modalEditRia_iconRadios[i].getElementsByTagName('input')[0].setAttribute("checked", "");
        }
    }
};

/**
 * @return font awesome icon class name of selected icon
 */
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

if(modalUploadRia_fileInput !== null) {
    modalUploadRia_fileInput.addEventListener('change', function (event) {
        console.log(event); // TODO remove
        var fullPath = modalUploadRia_fileInput.value;
        if(fullPath) {
            if(debug) {
                console.log("Update displayed name of chosen file")
            }
            document.getElementById('modal-upload-ria-file-name').innerHTML = fullPath;
        }

    });
}





