const passwordInput = document.getElementById("txt_new_password");
const confirmPasswordInput = document.getElementById(
  "txt_new_confirm_password"
);
const requirementList = document.getElementById("requirementList").children;
const passwordMatchMessage = document.getElementById("passwordMatchMessage");
const submitButton = document.getElementById("submitButton");

const requirements = [
  {
    regex: /.{8,}/,
    index: 0,
  },
  {
    regex: /[@!:#$%]/,
    index: 1,
  },
  {
    regex: /[a-z]/,
    index: 2,
  },
  {
    regex: /\d/,
    index: 3,
  },
  {
    regex: /[A-Z]/,
    index: 4,
  },
];

passwordInput.addEventListener("input", () => {
  checkPassword();
});

confirmPasswordInput.addEventListener("input", () => {
  checkPassword();
});

function checkPassword() {
  const password = passwordInput.value;
  const confirmPassword = confirmPasswordInput.value;

  let isValid = true;

  requirements.forEach((item, index) => {
    const requirementItem = requirementList[index];
    const isItemValid = item.regex.test(password);

    if (isItemValid) {
      requirementItem.classList.add("valid");
      requirementItem.firstElementChild.className = "fa fa-check";
    } else {
      requirementItem.classList.remove("valid");
      requirementItem.firstElementChild.className = "fa fa-times";
      isValid = false;
    }
  });

  if (password === confirmPassword && isValid) {
    passwordMatchMessage.classList.remove("invalid");
    passwordMatchMessage.classList.add("valid");
    passwordMatchMessage.textContent = "Passwords match!";
    submitButton.disabled = false;
  } else {
    passwordMatchMessage.classList.remove("valid");
    passwordMatchMessage.classList.add("invalid");
    passwordMatchMessage.textContent = "Passwords do not match!";
    submitButton.disabled = true;
  }
}

function newPassword() {
  const _userId = localStorage.getItem("userId");
  const pwd = hashPassword(document.getElementById("txt_new_password").value);
  const confirmPwd = hashPassword(
    document.getElementById("txt_new_confirm_password").value
  );

  let check = true;

  if (_userId.length <= 0) {
    check = false;
  } else if (pwd !== confirmPwd) {
    check = false;
  }

  if (check) {
    const url = new URL(
      "/isahcmu/src/user/api/NewPassword",
      window.location.protocol + "//" + window.location.hostname
    );
    const payload = {
      userId: _userId,
      pwd: pwd,
    };
    Swal.fire({
      icon: "question",
      title: "Confirm reset password",
      showCancelButton: true,
      showConfirmButton: true,
    }).then((resp) => {
      if (resp.isConfirmed) {
        $.ajax({
          url: url,
          method: "POST",
          dataType: "json",
          data: {
            payload: payload,
          },
        })
          .done((resp) => {
            if (resp.message === "Success") {
              Swal.fire({
                icon: "success",
                title: "Reset password successfully",
                timer: 2000,
              }).then((resp) => {
                const url = new URL(
                  "/isahcmu/src/user/singin",
                  window.location.protocol + "//" + window.location.hostname
                );
                window.location.href = url;
              });
            }
          })
          .fail((err) => {
            Swal.fire({
              icon: "error",
              title: err.responseJSON.message,
            });
          });
      }
    });
  }
}

// ฟังก์ชันสำหรับแปลงรหัสผ่านเป็นแฮช SHA-256
function hashPassword(password) {
  // แปลงรหัสผ่านเป็นแบบ UTF-8 ก่อน
  let utf8Password = CryptoJS.enc.Utf8.parse(password);
  // ทำการแฮช SHA-256
  let hashedPassword = CryptoJS.SHA256(utf8Password);
  // แปลงผลลัพธ์แฮชเป็นรหัสที่อ่านง่าย
  let hashHex = hashedPassword.toString(CryptoJS.enc.Hex);

  return hashHex;
}
