var editableStarRatings = document.getElementsByClassName('editable-star-rating');
var ratingValue = document.getElementsByName('ratingDoubleValue');

if (editableStarRatings !== null) {
    for (var i = 0; i < editableStarRatings.length; i++) {
        var inputs = editableStarRatings[i].getElementsByClassName('input-rating');

        for (var j = 0; j < inputs.length; j++) {
            inputs[j].addEventListener('change', function () {
                var radio = this;
                var selectedStarLabels = document.getElementsByClassName('label-rating selected');
                for (var i = 0; i < selectedStarLabels.length; i++) {
                    selectedStarLabels[i].classList.remove('selected');
                }
                var label = closestNodeWithClass(radio, 'label-rating');
                if (label !== null) {
                    label.classList.add('selected');
                }
            });
        }
    }
}

/**
 *
 * @param rating double value between 0.0 and 5.0
 * @param ratingDiv div that shall contain rating stars
 */
var createNonEditableStarRating = function (rating, ratingDiv) {
    var numOfStars = getStarNumFromRating(rating);

    // TODO if(debug === true) {
    console.log("DB rating value processed to " + numOfStars + " stars to be showed");
    // }
    var innerHtml = '';

    for(var i = 5; i >= 1; i--) {
        innerHtml += '<span class="star big-star star' + i;

        // add filled or half-filled attribute to html star element if necessary
        if(numOfStars-i+1 === 0.5) {
            innerHtml += ' half-filled';
        } else if(Math.floor(numOfStars) - i >= 0){
            innerHtml += ' filled';
        }
        innerHtml += '"></span>';
    }

    if(ratingDiv !== null) {
        ratingDiv.innerHTML = innerHtml;
    }
};

/**
 *
 * @param rating double value between 0.0 and 5.0
 * x.0 =< rating < x.3 results in x whole stars,
 * x.3 =< rating < x.7 results in x whole stars and 1 half star
 * x.7 =< rating < x+1.0 results in x+1 whole stars
 * @return num of filled stars (0.5 for half filled stars)
 */
var getStarNumFromRating = function (rating) {
    if(rating < 0 || rating > 5) {
        return 0;
    }

    var restRatingVal = rating - Math.floor(rating);
    if(restRatingVal >= 0.0 && restRatingVal < 0.3) {
        // non filled star
        return Math.floor(rating);
    } else if(restRatingVal >= 0.3 && restRatingVal < 0.7) {
        // half filled star
        return Math.floor(rating) + 0.5;
    } else { // restRatingVal >= 0.7 && restRatingVal < 1.0)
        // filled star
        return Math.ceil(rating);
    }
};

// TODO fetch rating from view when accessible in view
// var rating = getPageData("ria-details", "rating");

if(ratingValue !== null) {
    createNonEditableStarRating(ratingValue.value, document.getElementById('ria-details-header-star-rating'));
}





