document.getElementById("ria-gallery-search-input").addEventListener('input', function() {
    var searchInput = this.value.toLowerCase();

    var galleryEntries = document.getElementsByClassName("gallery-entry");

    for(var i = 0; i < galleryEntries.length; i++) {
        var riaName = galleryEntries[i].getElementsByClassName("ria-name")[0].innerHTML.toLowerCase();
        if(riaName.indexOf(searchInput) === -1) { // ria name does not contain search input as substring
            galleryEntries[i].style.display = "none";
        } else {
            galleryEntries[i].style.display = "inline-block";
        }
    }
});