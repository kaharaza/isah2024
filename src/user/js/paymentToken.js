window.onload = function () {
  paymentToken();
  fecthDatalocalStorage();
};

function fecthDatalocalStorage() {
  const local = {
    userId: localStorage.getItem("userId"),
    paymentID: localStorage.getItem("paymentID"),
    transactionDateTime: localStorage.getItem("transactionDateTime"),
    webTokenUrl: localStorage.getItem("webTokenUrl"),
    attend: localStorage.getItem("attend"),
    prefix: localStorage.getItem("prefix"),
    firstname: localStorage.getItem("firstname"),
    lastname: localStorage.getItem("lastname"),
    email: localStorage.getItem("email"),
    organization: localStorage.getItem("organization"),
    country: localStorage.getItem("country"),
    selectfeejoin: localStorage.getItem("selectfeejoin"),
    selectworkshop: localStorage.getItem("selectworkshop"),
    selecttirp: localStorage.getItem("selecttirp"),
    paymentExpiry: localStorage.getItem("paymentExpiry"),
    statusPayment: localStorage.getItem("statusPayment"),
    food: localStorage.getItem("food"),
    respCode: localStorage.getItem("respCode"),
    respDesc: localStorage.getItem("respDesc"),
  };

  const fullname = local.prefix + " " + local.firstname + " " + local.lastname;

  $("#InvoiceNo").text(local.userId);
  $("#fullName").text(fullname);
  if (local.respCode === "0000") {
    $("#respCode").text("PAID").css("color", "#00D76F");
  } else if (local.respCode === "0003") {
    $("#respCode").text("FAILED").css("color", "red");
    $("#respCode2").text("FAILED").css("color", "red");
  } else {
    $("#respCode").text("FAILED").css("color", "red");
    $("#respCode2").text("FAILED").css("color", "red");
  }
  if (local.paymentID) {
    $("#paymentID").text(local.paymentID).css("color", "#00D76F");
  }

  $("#counTry").text(local.country).css("color", "#00D76F");
  $("#foodPre").text(local.food).css("color", "#00D76F");
  $("#attend").val(local.attend);
  let selectworkshop = local.selectworkshop;
  let selectfeejoin = local.selectfeejoin;
  selectworkshop = selectworkshop.replace("&amp;", "&");
  selectfeejoin = selectfeejoin.replace("&amp;", "&");
  $("#selectfeejoin").val(selectfeejoin);
  $("#selectworkshop").val(selectworkshop);

  const transactionDate = new Date(
    parseInt(local.transactionDateTime.substring(0, 4)), // ปี
    parseInt(local.transactionDateTime.substring(4, 6)) - 1, // เดือน (ลบ 1 เพราะเดือนใน JavaScript เริ่มจาก 0)
    parseInt(local.transactionDateTime.substring(6, 8)), // วัน
    parseInt(local.transactionDateTime.substring(8, 10)), // ชั่วโมง
    parseInt(local.transactionDateTime.substring(10, 12)), // นาที
    parseInt(local.transactionDateTime.substring(12, 14)) // วินาที
  );
  const formattedTransactionDateTime = `${transactionDate.getFullYear()}/${(
    transactionDate.getMonth() + 1
  )
    .toString()
    .padStart(2, "0")}/${transactionDate
    .getDate()
    .toString()
    .padStart(2, "0")} ${transactionDate
    .getHours()
    .toString()
    .padStart(2, "0")}:${transactionDate
    .getMinutes()
    .toString()
    .padStart(2, "0")}:${transactionDate
    .getSeconds()
    .toString()
    .padStart(2, "0")}`;
  $("#timepayment").text(formattedTransactionDateTime);

  const trip = {
    trip1: "Trip1 Mae Rim Elephant Home and Elephant Poopoopaper Park",
    trip2:
      "Trip2 Royal Project for fish farming, frog farming, and modern livestock farming",
    trip3:
      "Trip3 RIntegrated dairy cattle farming (dairy Cattle, food processing, biogas plant)",
    trip4: "Trip4 Doi Suthep + Provincial Livestock Office",
  };

  if (local.selecttirp === "trip1") {
    $("#selecttirp").val(trip.trip1);
  } else if (local.selecttirp === "trip2") {
    $("#selecttirp").val(trip.trip2);
  } else if (local.selecttirp === "trip3") {
    $("#selecttirp").val(trip.trip3);
  } else if (local.selecttirp === "trip4") {
    $("#selecttirp").val(trip.trip4);
  } else {
    $("#selecttirp").val(local.selecttirp);
  }
}

function payMent() {
  const payload = {
    userId: localStorage.getItem("userId"),
    amount: localStorage.getItem("amount"),
  };

  Swal.fire({
    icon: "question",
    title: "Confirm payment ID: " + payload.userId,
    showConfirmButton: true,
    showCancelButton: true,
  }).then((result) => {
    if (result.isConfirmed) {
      const url =
        window.location.protocol +
        "//" +
        window.location.hostname +
        "/isahcmu/src/user/api/returnPayment";

      $.ajax({
        url: url,
        method: "POST",
        dataType: "json",
        data: {
          payload: payload,
        },
      }).done((resp) => {
        if (resp.message === 200) {
            const link = resp.response
            window.location.href = link;
          
        }
      })
    }
  });
}

function paymentToken() {
  const paymentToken = localStorage.getItem("webTokenUrl");
  if (!paymentToken) {
    localStorage.clear();
    window.location.href = "../singin";
  }
}

function logout() {
  const userId = localStorage.getItem("userId");
  if (userId) {
    localStorage.clear();
    window.location.href = "../singin";
  }
}
