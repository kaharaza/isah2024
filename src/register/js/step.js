let country = [
  { name: "Aland Islands", code: "AX" },
  { name: "Albania", code: "AL" },
  { name: "Algeria", code: "DZ" },
  { name: "American Samoa", code: "AS" },
  { name: "AndorrA", code: "AD" },
  { name: "Angola", code: "AO" },
  { name: "Anguilla", code: "AI" },
  { name: "Antarctica", code: "AQ" },
  { name: "Antigua and Barbuda", code: "AG" },
  { name: "Argentina", code: "AR" },
  { name: "Armenia", code: "AM" },
  { name: "Aruba", code: "AW" },
  { name: "Australia", code: "AU" },
  { name: "Austria", code: "AT" },
  { name: "Azerbaijan", code: "AZ" },
  { name: "Bahamas", code: "BS" },
  { name: "Bahrain", code: "BH" },
  { name: "Bangladesh", code: "BD" },
  { name: "Barbados", code: "BB" },
  { name: "Belarus", code: "BY" },
  { name: "Belgium", code: "BE" },
  { name: "Belize", code: "BZ" },
  { name: "Benin", code: "BJ" },
  { name: "Bermuda", code: "BM" },
  { name: "Bhutan", code: "BT" },
  { name: "Bolivia", code: "BO" },
  { name: "Bosnia and Herzegovina", code: "BA" },
  { name: "Botswana", code: "BW" },
  { name: "Bouvet Island", code: "BV" },
  { name: "Brazil", code: "BR" },
  { name: "British Indian Ocean Territory", code: "IO" },
  { name: "Brunei Darussalam", code: "BN" },
  { name: "Bulgaria", code: "BG" },
  { name: "Burundi", code: "BI" },
  { name: "Cambodia", code: "KH" },
  { name: "Cameroon", code: "CM" },
  { name: "Canada", code: "CA" },
  { name: "Cape Verde", code: "CV" },
  { name: "Cayman Islands", code: "KY" },
  { name: "Chile", code: "CL" },
  { name: "China", code: "CN" },
  { name: "Christmas Island", code: "CX" },
  { name: "Cocos (Keeling) Islands", code: "CC" },
  { name: "Colombia", code: "CO" },
  { name: "Comoros", code: "KM" },
  { name: "Congo", code: "CG" },
  { name: "Cook Islands", code: "CK" },
  { name: "Costa Rica", code: "CR" },
  { name: "Cote D'Ivoire", code: "CI" },
  { name: "Croatia", code: "HR" },
  { name: "Cuba", code: "CU" },
  { name: "Cyprus", code: "CY" },
  { name: "Czech Republic", code: "CZ" },
  { name: "Denmark", code: "DK" },
  { name: "Djibouti", code: "DJ" },
  { name: "Dominica", code: "DM" },
  { name: "Dominican Republic", code: "DO" },
  { name: "Ecuador", code: "EC" },
  { name: "Egypt", code: "EG" },
  { name: "El Salvador", code: "SV" },
  { name: "Equatorial Guinea", code: "GQ" },
  { name: "Estonia", code: "EE" },
  { name: "Falkland Islands (Malvinas)", code: "FK" },
  { name: "Faroe Islands", code: "FO" },
  { name: "Fiji", code: "FJ" },
  { name: "Finland", code: "FI" },
  { name: "France", code: "FR" },
  { name: "French Guiana", code: "GF" },
  { name: "French Polynesia", code: "PF" },
  { name: "French Southern Territories", code: "TF" },
  { name: "Gabon", code: "GA" },
  { name: "Georgia", code: "GE" },
  { name: "Germany", code: "DE" },
  { name: "Ghana", code: "GH" },
  { name: "Gibraltar", code: "GI" },
  { name: "Greece", code: "GR" },
  { name: "Greenland", code: "GL" },
  { name: "Grenada", code: "GD" },
  { name: "Guadeloupe", code: "GP" },
  { name: "Guam", code: "GU" },
  { name: "Guatemala", code: "GT" },
  { name: "Guernsey", code: "GG" },
  { name: "Guinea", code: "GN" },
  { name: "Guyana", code: "GY" },
  { name: "Haiti", code: "HT" },
  { name: "Heard Island and Mcdonald Islands", code: "HM" },
  { name: "Holy See (Vatican City State)", code: "VA" },
  { name: "Honduras", code: "HN" },
  { name: "Hong Kong", code: "HK" },
  { name: "Hungary", code: "HU" },
  { name: "Iceland", code: "IS" },
  { name: "India", code: "IN" },
  { name: "Indonesia", code: "ID" },
  { name: "Iran, Islamic Republic Of", code: "IR" },
  { name: "Iraq", code: "IQ" },
  { name: "Ireland", code: "IE" },
  { name: "Isle of Man", code: "IM" },
  { name: "Israel", code: "IL" },
  { name: "Italy", code: "IT" },
  { name: "Jamaica", code: "JM" },
  { name: "Japan", code: "JP" },
  { name: "Jersey", code: "JE" },
  { name: "Jordan", code: "JO" },
  { name: "Kazakhstan", code: "KZ" },
  { name: "Kenya", code: "KE" },
  { name: "Kiribati", code: "KI" },
  { name: "Korea, Republic of", code: "KR" },
  { name: "Kuwait", code: "KW" },
  { name: "Kyrgyzstan", code: "KG" },
  { name: "Lao People'S Democratic Republic", code: "LA" },
  { name: "Latvia", code: "LV" },
  { name: "Lebanon", code: "LB" },
  { name: "Lesotho", code: "LS" },
  { name: "Libyan Arab Jamahiriya", code: "LY" },
  { name: "Liechtenstein", code: "LI" },
  { name: "Lithuania", code: "LT" },
  { name: "Luxembourg", code: "LU" },
  { name: "Macao", code: "MO" },
  { name: "Macedonia, The Former Yugoslav Republic of", code: "MK" },
  { name: "Malaysia", code: "MY" },
  { name: "Maldives", code: "MV" },
  { name: "Malta", code: "MT" },
  { name: "Marshall Islands", code: "MH" },
  { name: "Martinique", code: "MQ" },
  { name: "Mauritania", code: "MR" },
  { name: "Mauritius", code: "MU" },
  { name: "Mayotte", code: "YT" },
  { name: "Mexico", code: "MX" },
  { name: "Micronesia, Federated States of", code: "FM" },
  { name: "Moldova, Republic of", code: "MD" },
  { name: "Monaco", code: "MC" },
  { name: "Mongolia", code: "MN" },
  { name: "Montserrat", code: "MS" },
  { name: "Morocco", code: "MA" },
  { name: "Myanmar", code: "MM" },
  { name: "Namibia", code: "NA" },
  { name: "Nauru", code: "NR" },
  { name: "Nepal", code: "NP" },
  { name: "Netherlands", code: "NL" },
  { name: "Netherlands Antilles", code: "AN" },
  { name: "New Caledonia", code: "NC" },
  { name: "New Zealand", code: "NZ" },
  { name: "Nicaragua", code: "NI" },
  { name: "Nigeria", code: "NG" },
  { name: "Niue", code: "NU" },
  { name: "Norfolk Island", code: "NF" },
  { name: "Northern Mariana Islands", code: "MP" },
  { name: "Norway", code: "NO" },
  { name: "Oman", code: "OM" },
  { name: "Pakistan", code: "PK" },
  { name: "Palau", code: "PW" },
  { name: "Palestinian Territory, Occupied", code: "PS" },
  { name: "Panama", code: "PA" },
  { name: "Papua New Guinea", code: "PG" },
  { name: "Paraguay", code: "PY" },
  { name: "Peru", code: "PE" },
  { name: "Philippines", code: "PH" },
  { name: "Pitcairn", code: "PN" },
  { name: "Poland", code: "PL" },
  { name: "Portugal", code: "PT" },
  { name: "Puerto Rico", code: "PR" },
  { name: "Qatar", code: "QA" },
  { name: "Reunion", code: "RE" },
  { name: "Romania", code: "RO" },
  { name: "Russian Federation", code: "RU" },
  { name: "Saint Helena", code: "SH" },
  { name: "Saint Kitts and Nevis", code: "KN" },
  { name: "Saint Lucia", code: "LC" },
  { name: "Saint Pierre and Miquelon", code: "PM" },
  { name: "Saint Vincent and the Grenadines", code: "VC" },
  { name: "Samoa", code: "WS" },
  { name: "San Marino", code: "SM" },
  { name: "Sao Tome and Principe", code: "ST" },
  { name: "Saudi Arabia", code: "SA" },
  { name: "Senegal", code: "SN" },
  { name: "Serbia and Montenegro", code: "CS" },
  { name: "Seychelles", code: "SC" },
  { name: "Singapore", code: "SG" },
  { name: "Slovakia", code: "SK" },
  { name: "Slovenia", code: "SI" },
  { name: "Solomon Islands", code: "SB" },
  { name: "South Africa", code: "ZA" },
  { name: "South Georgia and the South Sandwich Islands", code: "GS" },
  { name: "Spain", code: "ES" },
  { name: "Sri Lanka", code: "LK" },
  { name: "Suriname", code: "SR" },
  { name: "Svalbard and Jan Mayen", code: "SJ" },
  { name: "Swaziland", code: "SZ" },
  { name: "Sweden", code: "SE" },
  { name: "Switzerland", code: "CH" },
  { name: "Taiwan, Province of China", code: "TW" },
  { name: "Tajikistan", code: "TJ" },
  { name: "Tanzania, United Republic of", code: "TZ" },
  { name: "Timor-Leste", code: "TL" },
  { name: "Tokelau", code: "TK" },
  { name: "Tonga", code: "TO" },
  { name: "Trinidad and Tobago", code: "TT" },
  { name: "Tunisia", code: "TN" },
  { name: "Turkey", code: "TR" },
  { name: "Turkmenistan", code: "TM" },
  { name: "Turks and Caicos Islands", code: "TC" },
  { name: "Tuvalu", code: "TV" },
  { name: "Ukraine", code: "UA" },
  { name: "United Arab Emirates", code: "AE" },
  { name: "United Kingdom", code: "GB" },
  { name: "United States", code: "US" },
  { name: "United States Minor Outlying Islands", code: "UM" },
  { name: "Uruguay", code: "UY" },
  { name: "Uzbekistan", code: "UZ" },
  { name: "Vanuatu", code: "VU" },
  { name: "Venezuela", code: "VE" },
  { name: "Viet Nam", code: "VN" },
  { name: "Virgin Islands, British", code: "VG" },
  { name: "Virgin Islands, U.S.", code: "VI" },
  { name: "Wallis and Futuna", code: "WF" },
  { name: "Western Sahara", code: "EH" },
  { name: "Zambia", code: "ZM" },
  { name: "Zimbabwe", code: "ZW" },
];

let country_low = [
  {
    op: "Thailand",
  },
  {
    op: "Afghanistan",
  },
  {
    op: "Burkina Faso",
  },
  {
    op: "Central African Republic",
  },
  {
    op: "Chad",
  },
  {
    op: "Congo, Dem. Rep",
  },
  {
    op: "Eritrea",
  },
  {
    op: "Ethiopia",
  },
  {
    op: "Gambia",
  },
  {
    op: "Guinea-Bissau",
  },
  {
    op: "Korea, Dem. People's Rep ",
  },
  {
    op: "Liberia",
  },
  {
    op: "Madagascar",
  },
  {
    op: "Malawi",
  },
  {
    op: "Mali",
  },
  {
    op: "Mozambique",
  },
  {
    op: "Niger",
  },
  {
    op: "Rwanda",
  },
  {
    op: "Sierra Leone",
  },
  {
    op: "Somalia",
  },
  {
    op: "South Sudan",
  },
  {
    op: "Sudan",
  },
  {
    op: "Syrian Arab Republic",
  },
  {
    op: "Togo",
  },
  {
    op: "Uganda",
  },
  {
    op: "Yemen",
  },
];

$(document).ready(function () {
  $("#stepOne").css("display", "none");
  // $("#stepTwo").css("display", "none");
  $("#stepThree").css("display", "none");
  $("#stepFour").css("display", "none");

  // Country
  $("#id_country").css("display", "none");

  // Button
  $("#id_nextStep3").css("display", "none");
});

let host = "https://" + window.location.hostname + "/isahcmu";
let trainingwork = []; // Work
let checkconfirm = []; // Check You have read all messages.
let dateValue_1 = []; // date1
let additional = []; // Additional survey
let dateValue_3 = []; // Step-3
let dateValue_4 = []; // Step-4

function cancel_register(box) {
  if (box == "box1") {
    window.location.reload();
  } else if (box == "box2") {
    window.location.reload();
  } else if (box == "box3") {
    window.location.reload();
  } else if (box == "box4") {
    window.location.reload();
  }
}

function nextStep(step) {
  if (step == "step-1") {
    step = "isahcmu";
    if (step == "isahcmu") {
      let Objisah_1 = { work: step };
      trainingwork.splice(0, 1, Objisah_1);
      $("#stepOne").css("display", "none");
      $("#stepTwo").css("display", "block");
    } else {
    }
  } else if (step == "step-2") {
    $("#stepTwo").css("display", "none");
    $("#stepThree").css("display", "block");
  } else if (step == "step-3") {
    if (dateValue_1[0] && additional[0]) {
      formThreesubmit(additional, dateValue_1);
    } else {
      notifySwal("Alert Incomplete information is filled out", "info");
    }
  } else if (step == "step-4") {
    submitApi(dateValue_4);
  } else if (step == "step-5") {
    send(dateValue_1[0]);
  }
}

function notifySwal(messages, icon) {
  Swal.fire({
    icon: icon,
    title: messages,
    showConfirmButton: false,
    timer: 2000,
  });
}

function formThreesubmit(additional, dateValue_1) {
  let checkdateValue_1 = dateValue_1[0];

  if (checkdateValue_1 && additional[0]) {
    let tureAndfalse = true;

    const prxfix = checkdateValue_1.prxfix || "";
    const name = checkdateValue_1.name || "";
    const last = checkdateValue_1.last || "";
    const organ = checkdateValue_1.organ || "";
    const email = checkdateValue_1.email || "";
    const member = checkdateValue_1.member || null;
    const fee = checkdateValue_1.fee || 0;
    const country = checkdateValue_1.country || null;
    const attend = checkdateValue_1.attend || null;
    const selectfeejoin = additional[0]?.selectfeejoin || null;
    const selectworkshop = additional[0]?.selectworkshop || null;
    const selecttrip = additional[0]?.selecttrip || null;
    const feejoins = additional[0]?.feejoins || "";
    const food = additional[0]?.food || "";
    const checkpass = additional[0]?.passwords || "";
    const checkconfirmpass = additional[0]?.confirms || "";
    const passhash = hashPassword(checkpass);

    const total = parseInt(fee) + parseInt(feejoins) || parseInt(fee);

    if (prxfix.length <= 0) {
      tureAndfalse = false;
      notifySwal("Alert Prxfix", "info");
    } else if (name.length <= 0) {
      tureAndfalse = false;
      notifySwal("Alert First name", "info");
    } else if (last.length <= 0) {
      tureAndfalse = false;
      notifySwal("Alert Last name", "info");
    } else if (organ.length <= 0) {
      tureAndfalse = false;
      notifySwal("Alert Organization", "info");
    } else if (
      email.length <= 0 ||
      email.indexOf("@") === -1 ||
      email.indexOf(".") === -1
    ) {
      notifySwal("Email is invalid.", "info");
      tureAndfalse = false;
    } else if (member === null) {
      tureAndfalse = false;
      notifySwal("Alert Select status", "info");
    } else if (fee.length === null) {
      tureAndfalse = false;
    } else if (country === null) {
      tureAndfalse = false;
      notifySwal("Alert Country", "info");
    } else if (attend === null) {
      tureAndfalse = false;
      notifySwal("Alert I Would like to attend", "info");
    } else if (selectfeejoin === null) {
      tureAndfalse = false;
      notifySwal("Alert Additional survey", "info");
    } else if (selectworkshop === null || selecttrip === null) {
      tureAndfalse = false;
      notifySwal("Alert Workshop", "info");
    } else if (feejoins.length <= 0) {
      tureAndfalse = false;
      notifySwal("Alert Field trip", "info");
    } else if (food.length === null) {
      tureAndfalse = false;
      notifySwal("Alert food preference", "info");
    } else if (
      checkpass.length < 8 ||
      checkpass.length > 32 ||
      !/[A-Z]/.test(checkpass) ||
      !/[a-z]/.test(checkpass) ||
      !/\d/.test(checkpass) ||
      !/[!?$%^*()_\-={}\[\]:;@~#|]/.test(checkpass)
    ) {
      notifySwal("The password doesn't meet the conditions.", "info");
      tureAndfalse = false;
    } else if (checkconfirmpass.length <= 0 || checkconfirmpass !== checkpass) {
      notifySwal("Password doesn't match.", "info");
      tureAndfalse = false;
    }

    if (tureAndfalse) {
      let objstep3 = {
        ID: randomId,
        "01": prxfix,
        "02": name,
        "03": last,
        "04": organ,
        "05": email,
        "06": member,
        "07": fee,
        "08": food,
        "09": country,
        10: attend,
        11: selectfeejoin,
        12: feejoins,
        13: total,
        password: passhash,
        workshop: selectworkshop,
        trip: selecttrip,
      };

      dateValue_3.splice(0, 1, objstep3);
      step4total(dateValue_3);
      $("#stepThree").css("display", "none");
      $("#stepFour").css("display", "block");
    }
  } else {
    console.log("Error");
  }
}

function step4total(dateValue_3) {
  let d = new Date();
  let day = d.getDay();
  let month = d.getMonth() + 1;
  let year = d.getFullYear();

  let hours = d.getHours();
  let minutes = d.getMinutes();
  let seconds = d.getSeconds();

  switch (month) {
    case 1:
      monthText = "Jan";
      break;
    case 2:
      monthText = "Feb";
      break;
    case 3:
      monthText = "Mar";
      break;
    case 4:
      monthText = "Apr";
      break;
    case 5:
      monthText = "May";
      break;
    case 6:
      monthText = "Jun";
      break;
    case 7:
      monthText = "Jul";
      break;
    case 8:
      monthText = "Aug";
      break;
    case 9:
      monthText = "Sep";
      break;
    case 10:
      monthText = "Oct";
      break;
    case 11:
      monthText = "Nov";
      break;
    case 12:
      monthText = "Dec";
      break;
    default:
      monthText = "Invalid Month";
  }

  let fullday = `${day} ${monthText} ${year}`;

  // เพิ่มเลข 0 นำหน้าถ้าต้องการให้เป็นเลข 2 หลัก
  month = month < 10 ? "0" + month : month;
  day = day < 10 ? "0" + day : day;
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  let formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

  let totals = "";
  if (dateValue_3[0]["12"] == "FREE") {
    totals = parseInt(dateValue_3[0]["07"]);
  } else {
    totals = parseInt(dateValue_3[0]["07"]) + parseInt(dateValue_3[0]["12"]);
  }

  html = `
    <table class="table" style="font-size: 14px;">
        <thead class="border-bottom">
            <tr>
                <th scope="col">name:</th>
                <td scope="col">${dateValue_3[0]["01"]} ${
    dateValue_3[0]["02"]
  } ${dateValue_3[0]["03"]}</td>
                <th scope="col">invoice ID:</th>
                <td scope="col">${dateValue_3[0]["ID"]}</td>
            </tr>
            <tr>
                <th scope="col">Billing address:</th>
                <td scope="col">${dateValue_3[0]["04"]} / ${
    dateValue_3[0]["09"]
  }</td>
                <th scope="col">date issued:</th>
                <td scope="col">${fullday}</td>
            </tr>
            <tr>
                <th scope="col">Payment available period:</th>
                <td scope="col">until 15 Jun 2024</td>
            </tr>
        </thead>
        <tbody>
            <tr class="border-bottom">
                <th scope="row">No</th>
                <th>list</th>
                <th>price</th>
                <th>Currency</th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>${dateValue_3[0]["10"]}</td>
                <td>${dateValue_3[0]["07"]}</td>
                <td>USD</td>
            </tr>
            <tr class="border-bottom">
                <th scope="row">2</th>
                <td>${
                  dateValue_3[0]["workshop"] !== "NO WS/FT"
                    ? dateValue_3[0]["workshop"]
                    : dateValue_3[0]["workshop"] ||
                      dateValue_3[0]["trip"] !== "NO WS/FT"
                    ? dateValue_3[0]["trip"]
                    : dateValue_3[0]["trip"]
                }
                
                </td>
                <td>${dateValue_3[0]["12"]}</td>
                <td>USD</td>
            </tr>
            <tr class="border-bottom">
                <th scope="row">3</th>
                <td>${dateValue_3[0]["11"]}</td>
                <td>FREE</td>
                <td>USD</td>
            </tr>
            <tr>
                <th class="text-center" colspan="2" scope="row">total</th>
                <th class="border-bottom">${totals}</th>
                <th>USD</th>
            </tr>
            
        </tbody>
    </table>
    `;
  $("#table_total").html(html);

  let checktrue = true;
  const sumDate = dateValue_3[0];
  const prefix = sumDate["01"] || "";
  const firstname = sumDate["02"] || "";
  const lastname = sumDate["03"] || "";
  const organization = sumDate["04"] || "";
  const email = sumDate["05"] || "";
  const selectStatus = sumDate["06"] || "";
  const fee = sumDate["07"] || "";
  const food = sumDate["08"] || "";
  const country = sumDate["09"] || "";
  const attend = sumDate["10"] || "";
  const selectfeejoin = sumDate["11"] || "NO";
  const selectworkshop =
    sumDate["workshop"] !== "NO WS/FT"
      ? sumDate["workshop"]
      : sumDate["workshop"];
  const selecttirp =
    sumDate["trip"] !== "NO WS/FT" ? sumDate["trip"] : sumDate["trip"];
  const feejoins = sumDate["12"] || "";
  const total = sumDate["13"] || "";
  const date = formattedDate;
  const ID = sumDate.ID || "";
  const password = sumDate.password || "";

  if (checktrue) {
    let objstep4 = {
      prefix: prefix,
      firstname: firstname,
      lastname: lastname,
      organization: organization,
      email: email,
      selectStatus: selectStatus,
      fee: fee,
      country: country,
      attend: attend,
      selectfeejoin: selectfeejoin,
      selectworkshop: selectworkshop,
      selecttirp: selecttirp,
      feejoins: feejoins,
      food: food,
      total: total,
      checkDate: date,
      ID: ID,
      password: password,
    };
    dateValue_4.splice(0, 1, objstep4);
  }
}

function submitApi(dateValue_4) {
  let url =
    window.location.protocol +
    "//" +
    window.location.hostname +
    "/isahcmu/src/register/api/scb_payment.php";
  const reQuest = dateValue_4[0];

  try {
    Swal.fire({
      icon: "question",
      html: `<h1 style='color: red; font-weight: 700; '>Confirm payment</h1>
              <h3 style='font-weight: 600;'>Register ID: ${reQuest.ID}</h3>`,
      text: `${reQuest.prefix} ${reQuest.firstname} ${reQuest.lastname}`,
      footer: `Please remember your registration ID for future logins and payments on the website.`,
      showConfirmButton: true,
      showCancelButton: true,
      allowOutsideClick: false,
      allowEscapeKey: false,
    }).then((resp) => {
      if (resp.isConfirmed) {
        let timerInterval;
        Swal.fire({
          title: "Loading..",
          html: "Please wait a moment.",
          timer: 8000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading();
          },
        });
        // AJAX request
        $.ajax({
          url: url,
          method: "POST",
          data: {
            reQuest: reQuest,
          },
        })
          .done((resp) => {
            Swal.fire({
              icon: "success",
              title: "Register successful!",
              text: "Please wait a moment while we redirect you to the credit card payment system.",
              allowOutsideClick: false,
              allowEscapeKey: false,
              showConfirmButton: false,
              timer: 3000,
            }).then(() => {
              localStorage.setItem('userId', resp.response.userId);
              localStorage.setItem('pwd', resp.response.pwd);

              window.location.href = resp.response.paymentURL;
            });
          })
          .fail((err) => {
            if (err.responseJSON.message == "Duplicate") {
              Swal.fire({
                icon: "info",
                title: "Duplicate ID",
                text: "Please register as a new member.",
                timer: 3000,
              });
            }
          })
          .always(() => {
            clearInterval(timerInterval);
          });
      }
    });
  } catch (e) {
    console.error("Error:", e);
  }
  
}
// เพิ่มฟังก์ชัน validateMemberId
function validateMemberId(inputElement) {
  inputElement.value = inputElement.value.replace(/[^a-zA-Z0-9:#|/.]/g, "");
}
function isahmember() {
  htmlmember = `

    <div class="col-lg-6">
        <label for="select_country" class="form-label"><i class="fa-solid fa-earth-americas"></i> Country</label>
        <select class="form-select" id="select_country" required>
          <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your country</div>
    </div>
    <div class="col-lg-6">
        <label for="select_attend" class="form-label"><i class="fa-solid fa-clipboard-user"></i> I would like to attend</label>
        <select class="form-select" id="select_attend" onchange="selectwouldlike(value)" required>
            <option selected disabled value="">Select...</option>
            <option  value="Conference only (18-20 Sep)">Conference only (18-20 Sep)</option>
            <option  value="Workshop only (16-17 Sep)">Workshop only (16-17 Sep)</option>
            <option  value="Field trip only (17 Sep)">Field trip only (17 Sep)</option>
            <option  value="1 Workshop + conference">1 Workshop + conference</option>
            <option  value="1 Field trip + conference">1 Field trip + conference</option>
        </select>
        <div class="invalid-feedback">Please select your program </div>
    </div>
 
    `;
  $("#id_check_select").html(htmlmember);

  selectCountry(country);

  const txtprefix = document.getElementById("select_prefix");
  const txtname = document.getElementById("txt_first_name");
  const txtlast = document.getElementById("txt_last_name");
  const txtorgan = document.getElementById("txt_organization");
  const txtemail = document.getElementById("txt_email");
  const txtmember = document.getElementById("select_member");
  const txtfee = document.getElementById("txt_fee");
  const txtcountry = document.getElementById("select_country");
  const txtattend = document.getElementById("select_attend");

  document.getElementById("formThree").addEventListener("change", function () {
    const prefixValue = txtprefix.value;
    const nameValue = txtname.value;
    const lastValue = txtlast.value;
    const organValue = txtorgan.value;
    const emailValue = txtemail.value;
    const memberValue = txtmember.value;
    const countryValue = txtcountry.value;
    const attendValue = txtattend.value;
    let feeValue = 0;

    let startDate = new Date("September 16, 2023 08:00:00");
    let endDate = new Date("June 16, 2024  23:59:59");
    let currentDate = new Date();

    if (
      attendValue == "Workshop only (16-17 Sep)" ||
      attendValue == "Field trip only (17 Sep)"
    ) {
      feeValue = 0;
      $("#txt_fee").val(0);
    } else {
      if (currentDate >= startDate && currentDate <= endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(300);
      } else if (currentDate > endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(350);
      }
    }

    let Objdatevalue = {
      prxfix: prefixValue,
      name: nameValue,
      last: lastValue,
      organ: organValue,
      email: emailValue,
      member: memberValue,
      fee: feeValue,
      country: countryValue,
      attend: attendValue,
    };

    dateValue_1.splice(0, 1, Objdatevalue);
  });
}

function nonisahmember() {
  $("#txt_id_member").val("");
  html = `
    <div class="col-lg-6">
        <label for="select_country" class="form-label"><i class="fa-solid fa-earth-americas"></i> Country</label>
        <select class="form-control" id="select_country" required>
          <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your country</div>
    </div>
    <div class="col-lg-6">
        <label for="select_attend" class="form-label"><i class="fa-solid fa-clipboard-user"></i> I would like to attend</label>
        <select class="form-select" id="select_attend" onchange="selectwouldlike(value)" required>
            <option selected disabled value="">Select...</option>
            <option  value="Conference only (18-20 Sep)">Conference only (18-20 Sep)</option>
            <option  value="Workshop only (16-17 Sep)">Workshop only (16-17 Sep)</option>
            <option  value="Field trip only (17 Sep)">Field trip only (17 Sep)</option>
            <option  value="1 Workshop + conference">1 Workshop + conference</option>
            <option  value="1 Field trip + conference">1 Field trip + conference</option>
        </select>
        <div class="invalid-feedback">Please select your program</div>
    </div>
    `;
  $("#id_check_select").html(html);
  selectCountry(country);

  let txtprefix = document.getElementById("select_prefix");
  let txtname = document.getElementById("txt_first_name");
  let txtlast = document.getElementById("txt_last_name");
  let txtorgan = document.getElementById("txt_organization");
  let txtemail = document.getElementById("txt_email");
  let txtmember = document.getElementById("select_member");
  let txtfee = document.getElementById("txt_fee");
  let txtcountry = document.getElementById("select_country");
  let txtattend = document.getElementById("select_attend");

  document.getElementById("formThree").addEventListener("change", function () {
    const prefixValue = txtprefix.value;
    const nameValue = txtname.value;
    const lastValue = txtlast.value;
    const organValue = txtorgan.value;
    const emailValue = txtemail.value;
    const memberValue = txtmember.value;
    const countryValue = txtcountry.value;
    const attendValue = txtattend.value;
    let feeValue = 0;

    let startDate = new Date("September 16, 2023 08:00:00");
    let endDate = new Date("June 16, 2024  23:59:59");
    let currentDate = new Date();

    if (
      attendValue == "Workshop only (16-17 Sep)" ||
      attendValue == "Field trip only (17 Sep)"
    ) {
      feeValue = 0;
      $("#txt_fee").val(0);
    } else {
      if (currentDate >= startDate && currentDate <= endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(350);
      } else if (currentDate > endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(400);
      }
    }

    let Objdatevalue = {
      prxfix: prefixValue,
      name: nameValue,
      last: lastValue,
      organ: organValue,
      email: emailValue,
      member: memberValue,
      fee: feeValue,
      country: countryValue,
      attend: attendValue,
    };

    dateValue_1.splice(0, 1, Objdatevalue);
  });
}

function student() {
  $("#txt_id_member").val("");
  html = `
    <div class="col-lg-6">
        <label for="select_country" class="form-label"><i class="fa-solid fa-earth-americas"></i> Country</label>
        <select class="form-select" id="select_country" required>
          <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your country</div>
    </div>
    <div class="col-lg-6">
        <label for="select_attend" class="form-label"><i class="fa-solid fa-clipboard-user"></i> I would like to attend</label>
        <select class="form-select" id="select_attend" onchange="selectwouldlike(value)" required>
            <option selected disabled value="">Select...</option>
            <option  value="Conference only (18-20 Sep)">Conference only (18-20 Sep)</option>
            <option  value="Workshop only (16-17 Sep)">Workshop only (16-17 Sep)</option>
            <option  value="Field trip only (17 Sep)">Field trip only (17 Sep)</option>
            <option  value="1 Workshop + conference">1 Workshop + conference</option>
            <option  value="1 Field trip + conference">1 Field trip + conference</option>
        </select>
        <div class="invalid-feedback">Please select your program</div>
    </div>
    `;
  $("#id_check_select").html(html);
  selectCountry(country);

  let txtprefix = document.getElementById("select_prefix");
  let txtname = document.getElementById("txt_first_name");
  let txtlast = document.getElementById("txt_last_name");
  let txtorgan = document.getElementById("txt_organization");
  let txtemail = document.getElementById("txt_email");
  let txtmember = document.getElementById("select_member");
  let txtfee = document.getElementById("txt_fee");
  let txtcountry = document.getElementById("select_country");
  let txtattend = document.getElementById("select_attend");

  document.getElementById("formThree").addEventListener("change", function () {
    const prefixValue = txtprefix.value;
    const nameValue = txtname.value;
    const lastValue = txtlast.value;
    const organValue = txtorgan.value;
    const emailValue = txtemail.value;
    const memberValue = txtmember.value;
    const countryValue = txtcountry.value;
    const attendValue = txtattend.value;
    let feeValue = 0;

    let startDate = new Date("September 16, 2023 08:00:00");
    let endDate = new Date("June 16, 2024  23:59:59");
    let currentDate = new Date();

    if (
      attendValue == "Workshop only (16-17 Sep)" ||
      attendValue == "Field trip only (17 Sep)"
    ) {
      feeValue = 0;
      $("#txt_fee").val(0);
    } else {
      if (currentDate >= startDate && currentDate <= endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(250);
      } else if (currentDate > endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(300);
      }
    }

    let Objdatevalue = {
      prxfix: prefixValue,
      name: nameValue,
      last: lastValue,
      organ: organValue,
      email: emailValue,
      member: memberValue,
      fee: feeValue,
      country: countryValue,
      attend: attendValue,
    };

    dateValue_1.splice(0, 1, Objdatevalue);
  });
}

function lowincome() {
  $("#txt_id_member").val("");
  html = `
 
    <div class="col-lg-6">
        <label for="select_country" class="form-label"><i class="fa-solid fa-earth-americas"></i> Country</label>
        <select class="form-select" id="select_country" required>
            <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your conutry</div>
    </div>

    <div class="col-lg-6">
        <label for="select_attend" class="form-label"><i class="fa-solid fa-clipboard-user"></i> I would like to attend</label>
        <select class="form-select" id="select_attend" onchange="selectwouldlike(value)" required>
            <option selected disabled value="">Select...</option>
            <option  value="Conference only (18-20 Sep)">Conference only (18-20 Sep)</option>
            <option  value="Workshop only (16-17 Sep)">Workshop only (16-17 Sep)</option>
            <option  value="Field trip only (17 Sep)">Field trip only (17 Sep)</option>
            <option  value="1 Workshop + conference">1 Workshop + conference</option>
            <option  value="1 Field trip + conference">1 Field trip + conference</option>
        </select>
        <div class="invalid-feedback">Please select your program</div>
    </div>
    `;
  $("#id_check_select").html(html);
  selectCountry_low(country_low);

  let txtprefix = document.getElementById("select_prefix");
  let txtname = document.getElementById("txt_first_name");
  let txtlast = document.getElementById("txt_last_name");
  let txtorgan = document.getElementById("txt_organization");
  let txtemail = document.getElementById("txt_email");
  let txtmember = document.getElementById("select_member");
  let txtfee = document.getElementById("txt_fee");
  let txtcountry = document.getElementById("select_country");
  let txtattend = document.getElementById("select_attend");

  document.getElementById("formThree").addEventListener("change", function () {
    const prefixValue = txtprefix.value;
    const nameValue = txtname.value;
    const lastValue = txtlast.value;
    const organValue = txtorgan.value;
    const emailValue = txtemail.value;
    const memberValue = txtmember.value;
    const countryValue = txtcountry.value;
    const attendValue = txtattend.value === "" ? "NO WS/FT" : txtattend.value;
    let feeValue = 0;

    let startDate = new Date("September 16, 2023 08:00:00");
    let endDate = new Date("June 16, 2024  23:59:59");
    let currentDate = new Date();

    if (
      attendValue == "Workshop only (16-17 Sep)" ||
      attendValue == "Field trip only (17 Sep)"
    ) {
      feeValue = 0;
      $("#txt_fee").val(0);
    } else {
      if (currentDate >= startDate && currentDate <= endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(250);
      } else if (currentDate > endDate) {
        feeValue = txtfee.value;
        $("#txt_fee").val(300);
      }
    }

    let Objdatevalue = {
      prxfix: prefixValue,
      name: nameValue,
      last: lastValue,
      organ: organValue,
      email: emailValue,
      member: memberValue,
      fee: feeValue,
      country: countryValue,
      attend: attendValue,
    };

    dateValue_1.splice(0, 1, Objdatevalue);
  });
}

// เพิ่มฟังก์ชัน validatePassword
function validatePassword(inputElement) {
  inputElement.value = inputElement.value.replace(/[^a-zA-Z0-9?$:@#|.]/g, "");
}
function validatePasswordConfirm(inputElement) {
  inputElement.value = inputElement.value.replace(/[^a-zA-Z0-9?$:@#|.]/g, "");
}
function selectwouldlike(value) {
  if (value == "Conference only (18-20 Sep)") {
    $("#id_package_select").css("display", "flex");
    html = `
        <div class="col-lg-10">
            <label for="select_join" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Additional survey</label>
            <select class="form-select" id="select_join" onchange="selectjoin(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="Join welcome reception (17 Sep)">Join welcome reception (17 Sep)</option>
                <option value="Join farewell dinner (19 Sep)">Join farewell dinner (19 Sep)</option>
                <option value="Join welcome reception (17 Sep) & Farewell dinner (19 Sep)">Join welcome reception (17 Sep) & Farewell dinner (19 Sep)</option>
                <option value="Not interested">Not interested</option>
            </select>
            <div class="invalid-feedback">Please select your additional survey </div>
        </div>

        <div class="col-lg-4">
          <label for="select_food" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Food Preference</label>
          <select class="form-select" id="select_food"  required>
              <option selected disabled value="">Select...</option>
              <option  value="No Dietary Restrictions">No Dietary Restrictions</option>
              <option  value="Vegetarian/Vegan">Vegetarian/Vegan</option>
              <option  value="Halal">Halal</option>
              <option  value="Food Allergies">Food Allergies</option>
          </select>
          <div class="invalid-feedback">Please select your food preference</div>
        </div>
      
        <div class="col-lg-12 card p-2">
            Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters:  ? $ : @  # | . 
        </div>
        <div class="col-lg-6">
            <label for="txt_password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Password" oninput="validatePassword(this)" required>
                <button type="button" class="input-group-text" onclick="togglePassword()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="txt_password_confirm" class="form-label"><i class="fa-solid fa-key"></i> Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password_confirm" placeholder="Confirm Password" oninput="validatePasswordConfirm(this)" required>
                <button type="button" class="input-group-text" onclick="togglePasswordconfirm()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your confirm password</div>
            </div>
        </div>
        `;
    $("#id_package_select").html(html);
  } else if (value == "1 Workshop + conference") {
    $("#id_package_select").css("display", "flex");
    html = `
        <div class="col-lg-10">
            <label for="select_join" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Additional survey</label>
            <select class="form-select" id="select_join" onchange="selectjoin(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="Join welcome reception (17 Sep)">Join welcome reception (17 Sep)</option>
                <option value="Join farewell dinner (19 Sep)">Join farewell dinner (19 Sep)</option>
                <option value="Join welcome reception (17 Sep) & Farewell dinner (19 Sep)">Join welcome reception (17 Sep) & Farewell dinner (19 Sep)</option>
                <option value="Not interested">Not interested</option>
            </select>
            <div class="invalid-feedback">Please select your additional survey</div>
        </div>
        <div class="col-lg-10">
            <label for="select_workshop" class="form-label"><i class="fa-solid fa-clipboard-user"></i> workshop</label>
            <select class="form-select" id="select_workshop" onchange="selectworkshop(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="Risk Assessment & Transmission and Epidemiology of Zoonotic Pathogens (16-17 Sep)">Risk Assessment & Transmission and Epidemiology of Zoonotic Pathogens (16-17 Sep)</option>
               
            </select>
            <div class="invalid-feedback">Please select your workshop</div>
        </div>
     
        <div class="col-lg-2" id="joinfeedinner" style="display: none;">
            <label for="feejoin" class="form-label"><i class="fa-solid fa-dollar-sign"></i> fee</label>
            <div class="input-group">
                <input type="text" class="form-control" id="feejoin"  required disabled readonly>
                <span class="input-group-text">USD</span>
            </div>
        </div>

        <div class="col-lg-4">
          <label for="select_food" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Food Preference</label>
          <select class="form-select" id="select_food"  required>
              <option selected disabled value="">Select...</option>
              <option  value="No Dietary Restrictions">No Dietary Restrictions</option>
              <option  value="Vegetarian/Vegan">Vegetarian/Vegan</option>
              <option  value="Halal">Halal</option>
              <option  value="Food Allergies">Food Allergies</option>
          </select>
          <div class="invalid-feedback">Please select your food preference</div>
        </div>

        <div class="col-lg-12 card p-2">
            Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters:  ? $ : @  # | . 
        </div>
        <div class="col-lg-6">
            <label for="txt_password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Password" oninput="validatePassword(this)" required>
                <button type="button" class="input-group-text" onclick="togglePassword()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="txt_password_confirm" class="form-label"><i class="fa-solid fa-key"></i> Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password_confirm" placeholder="Confirm Password" oninput="validatePasswordConfirm(this)" required>
                <button type="button" class="input-group-text" onclick="togglePasswordconfirm()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your confirm password</div>
            </div>
        </div>
        `;
    $("#id_package_select").html(html);
  } else if (value == "Workshop only (16-17 Sep)") {
    $("#id_package_select").css("display", "flex");
    html = `
        <div class="col-lg-10" style="display: none;">
            <label for="select_join" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Additional survey</label>
            <select class="form-select" id="select_join" onchange="selectjoin(value)">
                <option value="NO">NO</option>
            </select>
        </div>
        <div class="col-lg-10">
            <label for="select_workshop" class="form-label"><i class="fa-solid fa-clipboard-user"></i> workshop</label>
            <select class="form-select" id="select_workshop" onchange="selectworkshop(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="Risk Assessment & Transmission and Epidemiology of Zoonotic Pathogens (16-17 Sep)">Risk Assessment & Transmission and Epidemiology of Zoonotic Pathogens (16-17 Sep)</option>
                
            </select>
            <div class="invalid-feedback">Please select your workshop</div>
        </div>
     
        <div class="col-lg-2" id="joinfeedinner" style="display: none;">
            <label for="feejoin" class="form-label"><i class="fa-solid fa-dollar-sign"></i> fee</label>
            <div class="input-group">
                <input type="text" class="form-control" id="feejoin"  required disabled readonly>
                <span class="input-group-text">USD</span>
            </div>
        </div>

        <div class="col-lg-4">
          <label for="select_food" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Food Preference</label>
          <select class="form-select" id="select_food"  required>
              <option selected disabled value="">Select...</option>
              <option  value="No Dietary Restrictions">No Dietary Restrictions</option>
              <option  value="Vegetarian/Vegan">Vegetarian/Vegan</option>
              <option  value="Halal">Halal</option>
              <option  value="Food Allergies">Food Allergies</option>
          </select>
          <div class="invalid-feedback">Please select your food preference</div>
        </div>

        <div class="col-lg-12 card p-2">
            Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters:  ? $ : @  # | . 
        </div>

        <div class="col-lg-6">
            <label for="txt_password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Password" oninput="validatePassword(this)" required>
                <button type="button" class="input-group-text" onclick="togglePassword()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="txt_password_confirm" class="form-label"><i class="fa-solid fa-key"></i> Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password_confirm" placeholder="Confirm Password" oninput="validatePasswordConfirm(this)" required>
                <button type="button" class="input-group-text" onclick="togglePasswordconfirm()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your confirm password</div>
            </div>
        </div>
        `;
    $("#id_package_select").html(html);
  } else if (value == "Field trip only (17 Sep)") {
    $("#id_package_select").css("display", "flex");
    html = `
        <div class="col-lg-10" style="display: none;">
            <label for="select_join" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Additional survey</label>
            <select class="form-select" id="select_join" onchange="selectjoin(value)">
                <option value="NO">NO</option>
            </select>
        </div>
   
        <div class="col-lg-10">
            <label for="select_trip" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Field trip</label>
            <select class="form-select" id="select_trip" onchange="selecttrip(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="trip1">1.Mae Rim Elephant Home and Elephant Poopoopaper Park</option>
                <option value="trip2">2.Huai Hong Khrai Royal Development Study Center: sufficiency economy for a sustainable life </option>
                <option value="trip3">3.Integrated dairy cattle farming (dairy Cattle, food processing, biogas plant)</option>
                <option value="trip4">4.Doi Suthep + Chiang Mai Livestock Product Research and Development Center</option>
            </select>
            <div class="invalid-feedback">Please select your field trip</div>
        </div>
        <div class="col-lg-2" id="joinfeedinner" style="display: none;">
            <label for="feejoin" class="form-label"><i class="fa-solid fa-dollar-sign"></i> fee</label>
            <div class="input-group">
                <input type="text" class="form-control" id="feejoin"  required disabled readonly>
                <span class="input-group-text">USD</span>
            </div>
        </div>

        <div class="col-lg-4">
          <label for="select_food" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Food Preference</label>
          <select class="form-select" id="select_food"  required>
              <option selected disabled value="">Select...</option>
              <option  value="No Dietary Restrictions">No Dietary Restrictions</option>
              <option  value="Vegetarian/Vegan">Vegetarian/Vegan</option>
              <option  value="Halal">Halal</option>
              <option  value="Food Allergies">Food Allergies</option>
          </select>
          <div class="invalid-feedback">Please select your food preference</div>
        </div>

        <div class="col-lg-12 card p-2">
            Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters:  ? $ : @  # | . 
        </div>
        <div class="col-lg-6">
            <label for="txt_password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Password" oninput="validatePassword(this)" required>
                <button type="button" class="input-group-text" onclick="togglePassword()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="txt_password_confirm" class="form-label"><i class="fa-solid fa-key"></i> Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password_confirm" placeholder="Confirm Password" oninput="validatePasswordConfirm(this)" required>
                <button type="button" class="input-group-text" onclick="togglePasswordconfirm()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your confirm password</div>
            </div>
        </div>
        `;
    $("#id_package_select").html(html);
  } else if (value == "1 Field trip + conference") {
    $("#id_package_select").css("display", "flex");

    html = `
        <div class="col-lg-10">
            <label for="select_join" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Additional survey</label>
            <select class="form-select" id="select_join" onchange="selectjoin(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="Join welcome reception (17 Sep)">Join welcome reception (17 Sep)</option>
                <option value="Join farewell dinner (19 Sep)">Join farewell dinner (19 Sep)</option>
                <option value="Join welcome reception (17 Sep) & Farewell dinner (19 Sep)">Join welcome reception (17 Sep) & Farewell dinner (19 Sep)</option>
                <option value="Not interested">Not interested</option>
            </select>
            <div class="invalid-feedback">Please select your additional survey</div>
        </div>
   
        <div class="col-lg-10">
            <label for="select_trip" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Field trip</label>
            <select class="form-select" id="select_trip" onchange="selecttrip(value)" required>
                <option selected disabled value="">Select...</option>
                <option value="trip1">1.Mae Rim Elephant Home and Elephant Poopoopaper Park</option>
                <option value="trip2">2.Huai Hong Khrai Royal Development Study Center: sufficiency economy for a sustainable life </option>
                <option value="trip3">3.Integrated dairy cattle farming (dairy Cattle, food processing, biogas plant)</option>
                <option value="trip4">4.Doi Suthep + Chiang Mai Livestock Product Research and Development Center</option>
            </select>
            <div class="invalid-feedback">Please select your field trip</div>
        </div>
        <div class="col-lg-2" id="joinfeedinner" style="display: none;">
            <label for="feejoin" class="form-label"><i class="fa-solid fa-dollar-sign"></i> fee</label>
            <div class="input-group">
                <input type="text" class="form-control" id="feejoin"  required disabled readonly>
                <span class="input-group-text">USD</span>
            </div>
        </div>

        <div class="col-lg-4">
          <label for="select_food" class="form-label"><i class="fa-solid fa-clipboard-user"></i> Food Preference</label>
          <select class="form-select" id="select_food"  required>
              <option selected disabled value="">Select...</option>
              <option  value="No Dietary Restrictions">No Dietary Restrictions</option>
              <option  value="Vegetarian/Vegan">Vegetarian/Vegan</option>
              <option  value="Halal">Halal</option>
              <option  value="Food Allergies">Food Allergies</option>
          </select>
          <div class="invalid-feedback">Please select your food preference</div>
        </div>

        <div class="col-lg-12 card p-2">
            Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters:  ? $ : @  # | . 
        </div>
        <div class="col-lg-6">
            <label for="txt_password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password" placeholder="Password" oninput="validatePassword(this)" required>
                <button type="button" class="input-group-text" onclick="togglePassword()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="txt_password_confirm" class="form-label"><i class="fa-solid fa-key"></i> Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="txt_password_confirm" placeholder="Confirm Password" oninput="validatePasswordConfirm(this)" required>
                <button type="button" class="input-group-text" onclick="togglePasswordconfirm()" id="basic-addon2">
                    <img width="18" height="18" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1" />
                </button>
                <div class="invalid-feedback">Please enter your confirm password</div>
            </div>
        </div>
        `;
    $("#id_package_select").html(html);
  } else {
    alert("error");
  }
}

function selectjoin(value) {
  if (value == "Join welcome reception (17 Sep)") {
    $("#id_nextStep3").css("display", "flex");
    selectAttendWorkandSurvey();
  } else if (value == "Join farewell dinner (19 Sep)") {
    $("#id_nextStep3").css("display", "flex");
    selectAttendWorkandSurvey();
  } else if (
    value == "Join welcome reception (17 Sep) & Farewell dinner (19 Sep)"
  ) {
    $("#id_nextStep3").css("display", "flex");
    selectAttendWorkandSurvey();
  } else if (value == "Not interested") {
    $("#id_nextStep3").css("display", "flex");
    selectAttendWorkandSurvey();
  }
}

function selectworkshop(value) {
  if (
    value ==
    "Risk Assessment & Transmission and Epidemiology of Zoonotic Pathogens (16-17 Sep)"
  ) {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(50);
    selectAttendWorkandSurvey();
  } else if (value == "AMR hands-on workshop (lab-based) (16-17 Sep)") {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(50);
    selectAttendWorkandSurvey();
  }
}

function selecttrip(value) {
  if (value == "trip1") {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(60);
    selectAttendWorkandSurvey();
  } else if (value == "trip2") {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(30);
    selectAttendWorkandSurvey();
  } else if (value == "trip3") {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(30);
    selectAttendWorkandSurvey();
  } else if (value == "trip4") {
    $("#joinfeedinner").css("display", "block");
    $("#feejoin").val(30);
    selectAttendWorkandSurvey();
  }
}

function checkRegisterStep3(value) {
  if (value == "isahmember") {
    isahmember();
  } else if (value == "nonisahmember") {
    nonisahmember();
  } else if (value == "student") {
    student();
  } else if (value == "lowincome") {
    lowincome();
  }
}

function selectCountry_low(country_low) {
  let select = document.getElementById("select_country");
  for (let i = 0; i < country_low.length; i++) {
    let option = document.createElement("option");
    option.value = country_low[i].op;
    option.textContent = country_low[i].op;
    select.appendChild(option);
  }
}
function selectCountry(country) {
  let select = document.getElementById("select_country");
  for (let i = 0; i < country.length; i++) {
    let option = document.createElement("option");
    option.value = country[i].name;
    option.textContent = country[i].name;
    select.appendChild(option);
  }
}

function selectAttendWorkandSurvey() {
  let selectfeejoin = document.getElementById("select_join");
  let selectworkshop = document.getElementById("select_workshop");
  let selecttrip = document.getElementById("select_trip");
  let feejoins = document.getElementById("feejoin");
  let food = document.getElementById("select_food");
  let password = document.getElementById("txt_password");
  let confirm = document.getElementById("txt_password_confirm");

  confirm.addEventListener("change", function () {
    const txtselectfeejoin = selectfeejoin.value || "NO";
    const txtworkshop = selectworkshop
      ? selectworkshop.value === ""
        ? "NO WS/FT"
        : selectworkshop.value
      : "NO WS/FT";
    const txttrip = selecttrip
      ? selecttrip.value === ""
        ? "NO WS/FT"
        : selecttrip.value
      : "NO WS/FT";
    const txtfeejoin = feejoins
      ? feejoins.value === ""
        ? "FREE"
        : feejoins.value
      : "FREE";
    const foodValue = food.value;
    const txtpass = password.value;
    const txtconfirm = confirm.value;

    let objAdditional = {
      selectfeejoin: txtselectfeejoin,
      selectworkshop: txtworkshop,
      selecttrip: txttrip,
      feejoins: txtfeejoin,
      food: foodValue,
      passwords: txtpass,
      confirms: txtconfirm,
    };
    additional.splice(0, 1, objAdditional);
  });

  $("#id_nextStep3").css("display", "flex");
}

function numberWithCommas(x) {
  x = x.toString();
  var pattern = /(-?\d+)(\d{3})/;
  while (pattern.test(x)) x = x.replace(pattern, "$1,$2");
  return x;
}

function togglePassword() {
  let passwordInput = document.getElementById("txt_password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}

function togglePasswordconfirm() {
  let passwordInput = document.getElementById("txt_password_confirm");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
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

let usedInvoiceNumbers = [];

function generateUniqueInvoiceNumber() {
  while (true) {
    let invoiceNumber = "ISAH" + String(Math.floor(Math.random() * 900) + 100);
    if (!usedInvoiceNumbers.includes(invoiceNumber)) {
      usedInvoiceNumbers.push(invoiceNumber);
      return invoiceNumber;
    }
  }
}

let randomId = generateUniqueInvoiceNumber();
