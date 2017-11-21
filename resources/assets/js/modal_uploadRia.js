window.onload = function () {

    var modalUploadRia = document.getElementById('modal-upload-ria');
    var modalUploadRia_openBtn = document.getElementById('btn-upload-ria');
    if(modalUploadRia_openBtn != null) {
        console.log("Btn upload Ria loaded");
    }
    var modalUploadRia_closeXBtn = document.getElementById('modal-upload-ria-closeX');
    var modalUploadRia_saveBtn = document.getElementById('modal-upload-ria-save');
    var modalUploadRia_closeBtn = document.getElementById('modal-upload-ria-close');

    var modalUploadRia_chooseFileBtn = document.getElementById('modal-upload-ria-choose-file');
    var modalUploadRia_fileInput = document.getElementById('modal-upload-ria-input-file');
    var modalUploadRia_iconRadios = document.getElementsByClassName('modal-upload-ria-icon-radio');

    if (modalUploadRia_openBtn !== null) {
        modalUploadRia_openBtn.onclick = function () {
            modalUploadRia.style.display = 'block';
        };
    }

    if (modalUploadRia_closeXBtn !== null && modalUploadRia !== null) {
        modalUploadRia_closeXBtn.onclick = function () {
            modalUploadRia.style.display = 'none';
        };
    }

    window.onclick = function (event) {
        if (event.target == modalUploadRia && modalUploadRia !== null) {
            modalUploadRia.style.display = 'none';
        }
    };

    if (modalUploadRia_saveBtn !== null && modalUploadRia !== null) {
        modalUploadRia_saveBtn.onclick = function () {
            /* TODO save */
            modalUploadRia.style.display = 'none';
        };
    }

    if (modalUploadRia_closeBtn !== null && modalUploadRia !== null) {
        modalUploadRia_closeBtn.onclick = function () {
            modalUploadRia.style.display = 'none';
        };
    }

    if (modalUploadRia_chooseFileBtn !== null && modalUploadRia_fileInput !== null) {
        modalUploadRia_chooseFileBtn.onclick = function (e) {
            e.preventDefault();
            modalUploadRia_fileInput.click();
        };
    }

    if(modalUploadRia_iconRadios !== null) {
        for(var i = 0; i < modalUploadRia_iconRadios.length; i++) {
            modalUploadRia_iconRadios[i].addEventListener('click', function () {
                removeSelectedFromAllIconRadios();
                this.classList.add('selected');
            });
        }
    }


    var removeSelectedFromAllIconRadios = function () {
        if(modalUploadRia_iconRadios !== null) {
            for(var i = 0; i < modalUploadRia_iconRadios.length; i++) {
                modalUploadRia_iconRadios[i].classList.remove('selected');
            }
        }
    };
};



