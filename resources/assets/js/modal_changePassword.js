var profileBtnChangePassword = document.getElementById('btn-change-password');
var modalChangePassword = document.getElementById('modal-change-password');
var modalChangePassword_closeXBtn = document.getElementsByClassName('modal-change-password-closeX');
var modalChangePassword_saveBtn = document.getElementById('modal-change-password-save');
var modalChangePassword_cancelBtn = document.getElementById('modal-change-password-cancel');

var changePasswordModal_input1 = document.getElementById('modal-change-password-input');
var changePasswordModal_input2 = document.getElementById('modal-change-password-wiederholt-input');


if(profileBtnChangePassword !== null) {
    profileBtnChangePassword.onclick = function () {
            modalChangePassword.style.display = 'block';
    };
}

if (modalChangePassword_closeXBtn !== null) {
    for (var i = 0; i < modalChangePassword_closeXBtn.length; i++) {
        modalChangePassword_closeXBtn[i].onclick = function () {
            closeModalAndResetValues();
        };
    }
}

window.onclick = function (event) {
    if (event.target === modalChangePassword) {
        closeModalAndResetValues();
    }
};

if (modalChangePassword_saveBtn !== null) {
    modalChangePassword_saveBtn.onclick = function () {
        /* TODO save */


        closeModalAndResetValues();
    };
}

if (modalChangePassword_cancelBtn !== null) {
    modalChangePassword_cancelBtn.onclick = function () {
        closeModalAndResetValues();
    };
}

var closeModalAndResetValues = function() {
    if(changePasswordModal_input1 !== null) {
        changePasswordModal_input1.value = "";
    }
    if(changePasswordModal_input2 !== null) {
        changePasswordModal_input2.value = "";
    }
    if(modalChangePassword !== null) {
        modalChangePassword.style.display = 'none';
    }

};
