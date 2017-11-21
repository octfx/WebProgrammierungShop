window.onload = function () {

    var modalReviewRia = document.getElementById('modal-review-ria');
    var modalReviewRia_openBtn = document.getElementById('btn-review-ria');
    var modalReviewRia_closeXBtn = document.getElementById('modal-review-ria-closeX');
    var modalReviewRia_saveBtn = document.getElementById('modal-review-ria-save');
    var modalReviewRia_deleteBtn = document.getElementById('modal-review-ria-delete');

    if (modalReviewRia_openBtn !== null) {
        modalReviewRia_openBtn.addEventListener('click', function () {
            modalReviewRia.style.display = 'block';
        });
    }

    if (modalReviewRia_closeXBtn !== null) {
        modalReviewRia_closeXBtn.addEventListener('click', function () {
            modalReviewRia.style.display = 'none';
        });
    }

    window.addEventListener('click', function (event) {
        if (event.target === modalReviewRia && modalReviewRia !== null) {
            modalReviewRia.style.display = 'none';
        }
    });

    if (modalReviewRia_saveBtn !== null && modalReviewRia !== null) {
        modalReviewRia_saveBtn.addEventListener('click', function () {
            /* TODO save */
            modalReviewRia.style.display = 'none';
        });
    }

    if (modalReviewRia_deleteBtn !== null && modalReviewRia !== null) {
        modalReviewRia_deleteBtn.addEventListener('click', function () {

            // reset selected stars
            var selectedStarLabels = modalReviewRia.getElementsByClassName('label-rating selected');
            for (var i = 0; i < selectedStarLabels.length; i++) {
                selectedStarLabels[i].classList.remove('selected');
            }

            // reset description content
            document.getElementById('modal-review-ria-description').value = '';

            modalReviewRia.style.display = 'none';
        });
    }

};

