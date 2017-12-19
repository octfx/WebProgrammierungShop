var riaGallerySearchInput = document.getElementById('ria-gallery-search-input');

if(riaGallerySearchInput !== null) {
    riaGallerySearchInput.addEventListener('input', function() {
        var searchInput = this.value.toLowerCase();

        if(debug) {
            console.log('Search for ria named ' + searchInput);
        }

        var galleryEntries = document.getElementsByClassName('gallery-entry');

        for(var i = 0; i < galleryEntries.length; i++) {
            var riaName = galleryEntries[i].getElementsByClassName('ria-name')[0].innerHTML.toLowerCase();
            if(riaName.indexOf(searchInput) === -1) { // ria name does not contain search input as substring
                galleryEntries[i].style.display = 'none';
            } else {
                galleryEntries[i].style.display = 'inline-block';
            }
        }
    });
}
