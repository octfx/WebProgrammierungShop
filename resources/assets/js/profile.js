var profile_uploadUserImgBtn = document.getElementById('profile-upload-user-img-btn');
var profile_uploadUserImgInput = document.getElementById('profile-upload-user-img-input');
var profile_deleteUserImgBtn = document.getElementById('profile-delete-user-img-btn');

if(profile_uploadUserImgBtn !== null && profile_uploadUserImgInput !== null) {
    profile_uploadUserImgBtn.addEventListener('click', function (event) {
        event.preventDefault();
        profile_uploadUserImgInput.click();
    });
}

if(profile_deleteUserImgBtn !== null) {
    profile_deleteUserImgBtn.addEventListener('click', function () {
        // TODO delete image
    });
}
