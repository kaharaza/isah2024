window.onload = () => {
  const userId = localStorage.getItem("userId");
  const passwordHash = localStorage.getItem("pwd");

  if (userId && passwordHash) {
    const url =
    window.location.protocol +
    "//" +
    window.location.hostname +
    "/isahcmu/src/user/api/singin_api";
    const payload = {
      userId: userId,
      passwordHash: passwordHash,
    };
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
          localStorage.clear(payload['passwordHash']); // clear passwordHash
          localStorage.setItem("userId", resp.response.userId);
          localStorage.setItem("paymentID", resp.response.paymentID);
          localStorage.setItem(
            "transactionDateTime",
            resp.response.transactionDateTime
          );
          localStorage.setItem("webTokenUrl", resp.response.tokerpayment);
          localStorage.setItem("attend", resp.response.attend);
          localStorage.setItem("prefix", resp.response.prefix);
          localStorage.setItem("firstname", resp.response.firstname);
          localStorage.setItem("lastname", resp.response.lastname);
          localStorage.setItem("email", resp.response.email);
          localStorage.setItem("organization", resp.response.organization);
          localStorage.setItem("country", resp.response.country);
          localStorage.setItem("selectfeejoin", resp.response.selectfeejoin);
          localStorage.setItem("selectworkshop", resp.response.selectworkshop);
          localStorage.setItem("selecttirp", resp.response.selecttirp);
          localStorage.setItem("paymentExpiry", resp.response.paymentExpiry);
          localStorage.setItem("statusPayment", resp.response.statusPayment);
          localStorage.setItem("food", resp.response.food);
           localStorage.setItem("amount", resp.response.amount);
          localStorage.setItem("respCode", resp.response.respCode);
          localStorage.setItem("respDesc", resp.response.respDesc);
          Swal.fire({
            icon: "success",
            title: "Successfully sign in",
            timer: 800,
            showConfirmButton: false,
          }).then(() => {
            window.location.href = "./pages/paymentStatus";
          });
        }
      })
      .fail((err) => {
        if (err.responseJSON.message === "Not Found") {
          Swal.fire({
            icon: "error",
            text: "Wrong ID or wrong password.",
          });
        }
      });
  } else {
    // localStorage.clear();
  }
};
// localStorage.clear();
function singIn() {
  let check = true;
  const textId = $("#txtUserId").val();
  const textPassword = $("#txtPassword").val();

  if (textId.length !== 3) {
    // console.log("กรุณากรอก Number ID ให้ถูกต้อง (ต้องมี 3 ตัวเลข)");
    Swalalert(
      "Please enter Number ID correctly (must have 3 numbers).",
      "info"
    );
    check = false;
  } else if (textPassword.length < 8) {
    // console.log("พาสเวิดผิด (ต้องมีอย่างน้อย 8 ตัวอักษร)");
    Swalalert("Password (must have at least 8 characters)", "info");
    check = false;
  }

  if (check) {
    const userId = "ISAH" + textId;
    const passwordHash = CryptoJS.SHA256(textPassword).toString(
      CryptoJS.enc.Hex
    );
    const url =
      window.location.protocol +
      "//" +
      window.location.hostname +
      "/isahcmu/src/user/api/singin_api";

    const payload = {
      userId: userId,
      passwordHash: passwordHash,
    };

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
          localStorage.setItem("userId", resp.response.userId);
          localStorage.setItem("paymentID", resp.response.paymentID);
          localStorage.setItem(
            "transactionDateTime",
            resp.response.transactionDateTime
          );
          localStorage.setItem("webTokenUrl", resp.response.tokerpayment);
          localStorage.setItem("attend", resp.response.attend);
          localStorage.setItem("prefix", resp.response.prefix);
          localStorage.setItem("firstname", resp.response.firstname);
          localStorage.setItem("lastname", resp.response.lastname);
          localStorage.setItem("email", resp.response.email);
          localStorage.setItem("organization", resp.response.organization);
          localStorage.setItem("country", resp.response.country);
          localStorage.setItem("selectfeejoin", resp.response.selectfeejoin);
          localStorage.setItem("selectworkshop", resp.response.selectworkshop);
          localStorage.setItem("selecttirp", resp.response.selecttirp);
          localStorage.setItem("paymentExpiry", resp.response.paymentExpiry);
          localStorage.setItem("statusPayment", resp.response.statusPayment);
          localStorage.setItem("food", resp.response.food);
          localStorage.setItem("amount", resp.response.amount);
          localStorage.setItem("respCode", resp.response.respCode);
          localStorage.setItem("respDesc", resp.response.respDesc);
          Swal.fire({
            icon: "success",
            title: "Successfully sign in",
            timer: 800,
            showConfirmButton: false,
          }).then(() => {
            window.location.href = "./pages/paymentStatus";
          });
        }
      })
      .fail((err) => {
        if (err.responseJSON.message === "Not Found") {
          Swal.fire({
            icon: "error",
            text: "Wrong ID or wrong password.",
          });
        }
      });
  } else {
  }
}

function togglePassword() {
  const passwordInput = document.getElementById("txtPassword");
  const showPasswordCheckbox = document.getElementById("showPassword");

  if (showPasswordCheckbox.checked) {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}

function Swalalert(messages, icon) {
  Swal.fire({
    icon: icon,
    text: messages,
    showConfirmButton: false,
    timer: 1500,
  });
}

function reSetPassword() {
  window.location.href = "forgotPassword";
}
