window.onload = function () {
  checkAuthen();
  fecthData();
};

function fecthData() {
    const userId = localStorage.getItem('userId');
    const fullname = localStorage.getItem('prefix') + localStorage.getItem('firstname') + ' ' + localStorage.getItem('lastname');

    if (userId && fullname) {
        $('#userId').text(userId);
        $('#fullName').text(fullname);
    } 
}

function checkAuthen() {
  const authenzition = localStorage.getItem("userId");
  if (!authenzition) {
    window.location.href = "./../forgotPassword";
  }
}

function goToSingIn() {
    localStorage.clear();
    window.location.href = "./../singin";
}

function showPassword() {
  let passwordInput = document.getElementById("txt_new_password");
  let confirmPasswordInput = document.getElementById(
    "txt_new_confirm_password"
  );
  let showPasswordCheckbox = document.getElementById("showNewPassword");

  if (showPasswordCheckbox.checked) {
    passwordInput.type = "text";
    confirmPasswordInput.type = "text";
  } else {
    passwordInput.type = "password";
    confirmPasswordInput.type = "password";
  }
}

// เพิ่มฟังก์ชัน validatePassword
function validatePassword(inputElement) {
  inputElement.value = inputElement.value.replace(/[^a-zA-Z0-9?$:@#|.]/g, "");
}
function validatePasswordConfirm(inputElement) {
  inputElement.value = inputElement.value.replace(/[^a-zA-Z0-9?$:@#|.]/g, "");
}
