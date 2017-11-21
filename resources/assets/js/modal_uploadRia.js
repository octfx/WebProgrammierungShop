window.onload = function () {

    var modalUploadRia = document.getElementById('modal-upload-ria');
    var modalUploadRia_openBtn = document.getElementById('btn-upload-ria');
    var modalUploadRia_closeXBtn = document.getElementById('modal-upload-ria-closeX');
    var modalUploadRia_saveBtn = document.getElementById('modal-upload-ria-save');
    var modalUploadRia_closeBtn = document.getElementById('modal-upload-ria-close');

    var modalUploadRia_chooseFileBtn = document.getElementById('modal-upload-ria-choose-file');
    var modalUploadRia_fileInput = document.getElementById('modal-upload-ria-input-file');
    var modalUploadRia_iconRadios = document.getElementsByClassName('modal-upload-ria-icon-radio');

    if (modalUploadRia_openBtn !== null) {
        modalUploadRia_openBtn.addEventListener('click', function () {
            modalUploadRia.style.display = 'block';
        });
    }

    if (modalUploadRia_closeXBtn !== null && modalUploadRia !== null) {
        modalUploadRia_closeXBtn.addEventListener('click', function () {
            modalUploadRia.style.display = 'none';
        });
    }

    window.addEventListener('click', function (event) {
        if (event.target == modalUploadRia && modalUploadRia !== null) {
            modalUploadRia.style.display = 'none';
        }
    });

    if (modalUploadRia_saveBtn !== null && modalUploadRia !== null) {
        modalUploadRia_saveBtn.addEventListener('click', function () {
            /* TODO save */
            modalUploadRia.style.display = 'none';
        });
    }

    if (modalUploadRia_closeBtn !== null && modalUploadRia !== null) {
        modalUploadRia_closeBtn.addEventListener('click', function () {
            modalUploadRia.style.display = 'none';
        });
    }

    if (modalUploadRia_chooseFileBtn !== null && modalUploadRia_fileInput !== null) {
        modalUploadRia_chooseFileBtn.addEventListener('click', function (event) {
            event.preventDefault();
            modalUploadRia_fileInput.click();
        });
    }

    if(modalUploadRia_iconRadios !== null) {
        for(var i = 0; i < modalUploadRia_iconRadios.length; i++) {
            modalUploadRia_iconRadios[i].addEventListener('click', function () {
                removeSelectedFromAllIconRadios();
                this.classList.add('selected');
                getClassNameOfChosenIcon();
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

    /**
     * @return font awesome icon class name of selected icon
     */
    var getClassNameOfChosenIcon = function () {
        if(modalUploadRia_iconRadios !== null) {
            for(var i = 0; i < modalUploadRia_iconRadios.length; i++) {
                if(modalUploadRia_iconRadios[i].classList.contains('selected')) {

                    var fa = modalUploadRia_iconRadios[i].getElementsByClassName('fa')[0];
                    for(var j = 0; j < fa.classList.length; j++) {

                        if(fa.classList[j].match('fa-')) {

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
};



