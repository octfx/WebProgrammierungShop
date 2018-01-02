var profile_updateProfileForm = document.getElementById("profile-update-profile-form");
var profile_colorChooser = document.getElementById("profile-color-input");

if(profile_updateProfileForm !== null && profile_colorChooser !== null) {
    profile_colorChooser.addEventListener('change', function (event) {
        if(debug) {
            console.log('Submit update profile form');
        }
        profile_updateProfileForm.submit();
    });
}
