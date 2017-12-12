var profileBtnChangePassword = document.getElementById('btn-change-password');
var modalChangePassword = document.getElementById('modal-change-password');

if(profileBtnChangePassword !== null && modalChangePassword !== null) {
    profileBtnChangePassword.onclick = function () {
        modalChangePassword.style.display = 'block';
    };
}
