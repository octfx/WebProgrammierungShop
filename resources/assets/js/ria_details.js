document.getElementsByClassName('editable-star-rating')
    .getElementsByClassName('input')
    .addEventListener('change', function () {
    var radio = this;
    var selectedStars = document.getElementsByClassName('rating').getElementsByClassName('selected');
    for (var i = 0; i < selectedStars.length; i++) {
        selectedStars[i].classList.remove('selected');
    }

    radio.closest('label').addClass('selected');
});