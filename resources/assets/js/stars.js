var editableStarRatings = document.getElementsByClassName('editable-star-rating');

for(var i = 0; i < editableStarRatings.length; i++) {
    var inputs = editableStarRatings[i].getElementsByClassName('input-rating');

    for (var j = 0; j < inputs.length; j++) {
        inputs[j].addEventListener('change', function () {
            var radio = this;
            var selectedStarLabels = document.getElementsByClassName('label-rating selected');
            for (var i = 0; i < selectedStarLabels.length; i++) {
                selectedStarLabels[i].classList.remove('selected');
            }
            var label = closestNodeWithClass(radio, 'label-rating');
            if(label !== null) {
                label.classList.add('selected');
            }
        });
    }
}

var closestNodeWithClass = function(startElement, nodeClass) {
    var el = startElement;

    while (el.className !== nodeClass) {
        el = el.parentNode;
        if (!el) {
            return null;
        }
    }
    return el;
};