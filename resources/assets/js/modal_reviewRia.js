var modalReviewRia = document.getElementById('modal-review-ria');
var modalReviewRia_openBtn = document.getElementById('btn-review-ria');
var modalReviewRia_closeXBtn = document.getElementsByClassName('modal-review-ria-closeX');
var modalReviewRia_saveBtn = document.getElementById('modal-review-ria-save');
var modalReviewRia_closeBtn = document.getElementById('modal-review-ria-close');

/**
 *  reset all inputs of modal, so that inputs are clear when reopened
 */
var modalReviewRia_resetModalInputs = function() {

    if(modalReviewRia !== null) {
        // reset selected stars
        var selectedStarLabels = modalReviewRia.getElementsByClassName('label-rating selected');
        for (var i = 0; i < selectedStarLabels.length; i++) {
            selectedStarLabels[i].classList.remove('selected');
        }

        // reset description content
        var modalReviewRiaDesc = document.getElementById('modal-review-ria-description');
        if(modalReviewRiaDesc !== null) {
            modalReviewRiaDesc.value = '';
        }
    }
};

var modalReviewRia_closeModal = function () {
  if(modalReviewRia !== null) {
      modalReviewRia.style.display = 'none';
  }
    modalReviewRia_resetModalInputs();
};


if (modalReviewRia_openBtn !== null) {
    modalReviewRia_openBtn.onclick = function () {
        // TODO if(debug === true) {
        console.log("Open review ria modal button clicked")
        // }
        modalReviewRia.style.display = 'block';
    };
}

if (modalReviewRia_closeXBtn !== null) {
    for (var i = 0; i < modalReviewRia_closeXBtn.length; i++) {
        modalReviewRia_closeXBtn[i].onclick = function () {
            modalReviewRia_closeModal();
        };
    }
}

window.onclick = function (event) {
    if (event.target === modalReviewRia) {
        modalReviewRia_closeModal();
    }
};

if (modalReviewRia_saveBtn !== null) {
    modalReviewRia_saveBtn.onclick = function () {

        if(debug) {
            console.log("Save review");
        }
        document.getElementById('ria-review-modal').submit();
        modalReviewRia_closeModal();
    };
}

if (modalReviewRia_closeBtn !== null) {
    modalReviewRia_closeBtn.onclick = function () {
        modalReviewRia_closeModal();
    };
}



