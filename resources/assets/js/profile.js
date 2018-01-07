var colorInput = document.getElementById('profile-color-input');

if (null !== colorInput) {
    colorInput.addEventListener('change', function (ev) {
        if (debug) {
            console.log('Profile color changed to ' + ev.target.value);
        }
        document.getElementById('profile-update-profile-form').submit();
    })
}