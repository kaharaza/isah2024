window.onload = function() {
    localStorage.clear()
}

function newPassword() {
  const userId = document.getElementById("txtUserId");
  const email = document.getElementById("txtEmail");
  const userIdValue = userId.value;
  const emailValue = email.value;

  let check = true;
  if (userIdValue.length !== 3) {
    check = false;
    Swalalert("Please enter Number ID correctly (must have 3 numbers).", "info");
  } else if (emailValue.length <= 0) {
    check = false;
    Swalalert("Please enter an Email.", "info");
  }
  if (check) {
    const url =
      window.location.protocol +
      "//" +
      window.location.hostname +
      "/isahcmu/src/user/api/Repassword";
    const repassword = {
      userId: "ISAH" + userIdValue,
      email: emailValue,
    };
    $.ajax({
      url: url,
      method: "POST",
      dataType: "json",
      data: {
        reQuest: repassword,
      },
    })
      .done((resp) => {
        if (resp.message === 'Success') {
            let url =
            window.location.protocol +
            "//" +
            window.location.hostname +
            "/isahcmu/src/user/pages/setNewPassword";
            localStorage.setItem('userId', resp.response.userId);
            localStorage.setItem('prefix', resp.response.prefix);
            localStorage.setItem('firstname', resp.response.firstname);
            localStorage.setItem('lastname', resp.response.lastname);
            window.location.href = url;
        }

      })
      .fail((err) => {
        if (err.responseJSON.message === 'NOT FOUND') {
            Swalalert(err.responseJSON.message, "error");
        }
      });
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

