var editableStarRating = document.getElementsByClassName('editable-star-rating');
for(var i = 0; i < editableStarRating.length; i++) {
    var inputs = editableStarRating[i].getElementsByClassName('input');
    for(var j = 0; j < inputs.length; j++) {
        inputs[i].addEventListener('change', function () {
            var radio = this;
            var selectedStars = document.getElementsByClassName('rating').getElementsByClassName('selected');
            for (var i = 0; i < selectedStars.length; i++) {
                selectedStars[i].classList.remove('selected');
            }
            radio.closest('label').addClass('selected');
        });
    }
}
