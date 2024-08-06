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
  { name: "Thailand", code: "TH" },
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

let only_one = [];
let only_two = [];

function selectCountry(country) {
  let select = document.getElementById("select_country");
  for (let i = 0; i < country.length; i++) {
    let option = document.createElement("option");
    option.value = country[i].name;
    option.textContent = country[i].name;
    select.appendChild(option);
  }
}

const selectCountry_low = (country_low) => {
  let select = document.getElementById("select_country");
  for (let i = 0; i < country_low.length; i++) {
    let option = document.createElement("option");
    option.value = country_low[i].op;
    option.textContent = country_low[i].op;
    select.appendChild(option);
  }
};

const downloadTemplate = () => {
  const url = new URL(
    "/isahcmu/src/abstracts-file/file/AbstractTemplate.docx",
    window.location.protocol + "//" + window.location.hostname
  );
  window.open(url);
};

const setSeclectCategory = (value) => {
  if (value == "Non-low-income") {
    handleNonLowIncome();
  } else if (value == "Low-income") {
    handleLowIncome();
  }
};

const handleNonLowIncome = () => {
  let html = "";
  html += `
    <div class="col-lg-12">
        <label for="select_country" class="form-label">Select your country</label>
        <select class="form-select" id="select_country" required>
            <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your conutry</div>
    </div>
    <div class="col-lg-8 col-12">
        <label for="" class="form-label">Presentation title</label>
        <input type="text" class="form-control" id="txt_research" oninput="this.value = this.value.replace(/[^a-zA-Z()' '.]/g, '')" required>
        <div class="invalid-feedback">Please enter your presentation title</div>
    </div>
    <div class="col-lg-4 col-12">
        <label for="" class="form-label">Conference topic</label>
        <select class="form-select" id="txt_topic" required>
          <option selected disabled value="">Select...</option>
          <option value="Antimicrobial Resistance">Antimicrobial Resistance</option>
          <option value="Infectious and Transboundary Diseases">Infectious and Transboundary Diseases</option>
          <option value="Sustainable Animal Production & Environmental Health">Sustainable Animal Production & Environmental Health</option>
          <option value="Animal Welfare">Animal Welfare</option>
          <option value="Innovation Technology for Animal and Food Production">Innovation Technology for Animal and Food Production</option>
          <option value="Disaster Management and Epidemics/Pandemics Preparedness">Disaster Management and Epidemics/Pandemics Preparedness</option>
        </select>
        <div class="invalid-feedback">Please select your conference topic</div>
    </div>
    <div class="col-lg-4 col-12">
        <label for="" class="form-label">I prefer</label>
        <select class="form-select" id="select_prefer" required>
            <option selected disabled value="">Select...</option>
            <option value="Oral">Oral presentation</option>
            <option value="Poster">Poster presentation</option>
            <option value="Both">Both</option>
        </select>
        <div class="invalid-feedback">Please select your preference</div>
    </div>
    <div class="col-lg-8 col-12">
        <label for="" class="form-label"> Submit abstract file </label>
        <div class="input-group">
            <input type="file" class="form-control" id="add_files" accept=".docx" required>
            <div class="invalid-feedback">Please attach .docx file only.</div>
        </div>
    </div>
    <div class="col-12" id="hiddenSubmit">
      <button class="btn btn-primary text-uppercase w-100" onclick="submitAbstract_only('non-low')"> <i class="fa-regular fa-paper-plane me-2"></i> Submit</button>
    </div>
    
  `;
  $("#country").html(html);
  selectCountry(country);
};

const handleLowIncome = () => {
  let html = "";
  html += `
    <div class="col-lg-6 col-12">
        <label for="select_country" class="form-label">Select your country</label>
        <select class="form-select" id="select_country" required>
            <option selected disabled value="">Select...</option>
        </select>
        <div class="invalid-feedback">Please select your conutry</div>
    </div>
    <div class="col-lg-6 col-12">
      <label for="select_country" class="form-label"> Apply for Scholarship</label>
      <select class="form-select" id="txt_scholarship" required>
          <option selected disabled value="">Select...</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
      </select>
      <div class="invalid-feedback">Please select your preference</div>
    </div>
     <div class="col-lg-8 col-12">
        <label for="" class="form-label">Presentation title</label>
        <input type="text" class="form-control" id="txt_research" oninput="this.value = this.value.replace(/[^a-zA-Z()' '.]/g, '')" required>
        <div class="invalid-feedback">Please enter your presentation title</div>
    </div>
    <div class="col-lg-4 col-12">
        <label for="" class="form-label">Conference topic</label>
        <select class="form-select" id="txt_topic" required>
          <option selected disabled value="">Select...</option>
          <option value="Antimicrobial Resistance">Antimicrobial Resistance</option>
          <option value="Infectious and Transboundary Diseases">Infectious and Transboundary Diseases</option>
          <option value="Sustainable Animal Production & Environmental Health">Sustainable Animal Production & Environmental Health</option>
          <option value="Animal Welfare">Animal Welfare</option>
          <option value="Innovation Technology for Animal and Food Production">Innovation Technology for Animal and Food Production</option>
          <option value="Disaster Management and Epidemics/Pandemics Preparedness">Disaster Management and Epidemics/Pandemics Preparedness</option>
        </select>
        <div class="invalid-feedback">Please select your conference topic</div>
    </div>
    <div class="col-lg-4 col-12">
        <label for="" class="form-label">I prefer</label>
        <select class="form-select" id="select_prefer" required>
            <option selected disabled value="">Select...</option>
            <option value="Oral">Oral presentation</option>
            <option value="Poster">Poster presentation</option>
            <option value="Both"> Both</option>
        </select>
        <div class="invalid-feedback">Please select your preference</div>
    </div>
    <div class="col-lg-8 col-12">
        <label for="" class="form-label"> Submit abstract file </label>
        <div class="input-group">
            <input type="file" class="form-control" id="add_files" accept=".docx" required>
            <div class="invalid-feedback">Please attach .docx file only.</div>
        </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary text-uppercase w-100" onclick="submitAbstract_only('low-in')"> <i class="fa-regular fa-paper-plane me-2"></i> Submit</button>
    </div>
  `;
  $("#country").html(html);
  selectCountry_low(country_low);
};

const submitAbstract_only = (index) => {
  if (index == "non-low") {
    const firstname = document.getElementById("txt_first_name");
    const lastname = document.getElementById("txt_last_name");
    const email = document.getElementById("txt_email");
    const category = document.getElementById("select_category");
    const country = document.getElementById("select_country");
    const research = document.getElementById("txt_research");
    const topic = document.getElementById("txt_topic");
    const prefer = document.getElementById("select_prefer");
    const fileInput = $("#add_files")[0].files[0];

    const object = {
      firstname: firstname.value,
      lastname: lastname.value,
      email: email.value,
      category: category.value,
      country: country.value,
      research: research.value,
      topic: topic.value,
      prefer: prefer.value,
      flieUpload: fileInput,
    };
    only_one.splice(0, 1, object);

    handleRequestNonlowincome(only_one);
  } else if (index == "low-in") {
    const firstname = document.getElementById("txt_first_name");
    const lastname = document.getElementById("txt_last_name");
    const email = document.getElementById("txt_email");
    const category = document.getElementById("select_category");
    const country = document.getElementById("select_country");
    const scholarship = document.getElementById("txt_scholarship");
    const research = document.getElementById("txt_research");
    const topic = document.getElementById("txt_topic");
    const prefer = document.getElementById("select_prefer");
    const fileInput = $("#add_files")[0].files[0];

    const object = {
      firstname: firstname.value,
      lastname: lastname.value,
      email: email.value,
      category: category.value,
      country: country.value,
      scholarship: scholarship.value,
      research: research.value,
      topic: topic.value,
      prefer: prefer.value,
      flieUpload: fileInput,
    };

    only_two.splice(0, 1, object);

    handleRequestLowincome(only_two);
  }
};

const handleRequestNonlowincome = (resp) => {
  let check = true;
  const results = resp[0];

  if (results.firstname.length <= 0) {
    check = false;
    showAlert("Please enter your first name.");
  } else if (results.lastname.length <= 0) {
    check = false;
    showAlert("Please enter your last name.");
  } else if (results.email.length <= 0) {
    check = false;
    showAlert("Please enter your email.");
  } else if (results.category == "") {
    check = false;
    showAlert("Please select your category.");
  } else if (results.country == "") {
    check = false;
    showAlert("Please select your country.");
  } else if (results.research.length <= 0) {
    check = false;
    showAlert("Please enter your research.");
  } else if (results.topic == "") {
    check = false;
    showAlert("Please select your conference topic.");
  } else if (results.prefer == "") {
    check = false;
    showAlert("Please select your i preference.");
  } else if (results.flieUpload == undefined) {
    check = false;
    showAlert("Please select a file.");
  }

  if (check) {
    let upLoadFile = true;
    const fileSizeInbytes = results.flieUpload.size;
    const fileSizeMB = fileSizeInbytes / (1024 * 1024);
    if (fileSizeMB > 1) {
      showAlert("File size should not exceed 1 MB.");
      upLoadFile = false;
    } else {
      const allowedEx = /(\.docx)$/i;
      if (!allowedEx.test(results.flieUpload.name)) {
        showAlert("Incorrect file extension. Please upload a .docx file.");
        upLoadFile = false;
      }
    }
    if (upLoadFile) {
      const readerAbstract = new FileReader();
      readerAbstract.onload = function (e) {
        const url = new URL(
          "/isahcmu/src/abstracts-file/api/only-api",
          window.location.protocol + "//" + window.location.hostname
        );
        const uploadFileAbstract = e.target.result;
        const reQuestObject = {
          inputObject: results,
          uploadFileAbstract: uploadFileAbstract,
        };

        Swal.fire({
          icon: "question",
          title: "Confirm submission of abstract",
          text: "Research title: " + reQuestObject.inputObject.research,
          showCancelButton: true,
          showConfirmButton: true,
          confirmButtonText: "Comfirm",
          allowOutsideClick: false,
          allowEscapeKey: false,
        })
          .then((resp) => {
            if (resp.isConfirmed) {
              // เพิ่มดีเล เข้าไปด้วย 
              $.ajax({
                url: url,
                method: "POST",
                data: JSON.stringify({ abstract: reQuestObject }),
                contentType: "application/json",
              })
                .done((resp) => {
                  Swal.fire({
                    icon: "success",
                    title: "Successfully uploaded abstract file.",
                    footer:
                      "You will be contacted via email by the organizer once the review process finished.",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                  }).then((resp) => {
                    const url = new URL(
                      "/isahcmu/",
                      window.location.protocol + "//" + window.location.hostname
                    );
                    window.location.href = url;
                  });
                })
                .fail((err) => {
                  if (err.responseJSON.message === "DuplicateResearchTitle") {
                    Swal.fire({
                      icon: "error",
                      text: "The abstract has been previously submitted. Once per abstract, the same title may be utilized.",
                      footer:
                        'Please contact <a href="mailto:isah2024cmu@gmail.com">isah2024cmu@gmail.com</a> for assistance with any revisions or resubmissions that may be necessary.',
                    });
                  }
                });
            }
          })  
      };
      readerAbstract.readAsDataURL(results.flieUpload);
    }
  }
};

const handleRequestLowincome = (resp) => {
  let check = true;
  const results = resp[0];

  if (results.firstname.length <= 0) {
    check = false;
    showAlert("Please enter your first name.");
  } else if (results.lastname.length <= 0) {
    check = false;
    showAlert("Please enter your last name.");
  } else if (results.email.length <= 0) {
    check = false;
    showAlert("Please enter your email.");
  } else if (results.category == "") {
    check = false;
    showAlert("Please select your category.");
  } else if (results.country == "") {
    check = false;
    showAlert("Please select your country.");
  } else if (results.scholarship == "") {
    check = false;
    showAlert("Please enter your scholarship.");
  } else if (results.research.length <= 0) {
    check = false;
    showAlert("Please enter your research.");
  } else if (results.topic == "") {
    check = false;
    showAlert("Please select your conference topic.");
  } else if (results.prefer == "") {
    check = false;
    showAlert("Please select your i preference.");
  } else if (results.flieUpload == undefined) {
    check = false;
    showAlert("Please select a file.");
  }

  if (check) {
    let upLoadFile = true;
    const fileSizeInbytes = results.flieUpload.size;
    const fileSizeMB = fileSizeInbytes / (1024 * 1024);
    if (fileSizeMB > 1) {
      showAlert("File size should not exceed 1 MB.");
      upLoadFile = false;
    } else {
      const allowedEx = /(\.docx)$/i;
      if (!allowedEx.test(results.flieUpload.name)) {
        showAlert("Incorrect file extension. Please upload a .docx file.");
        upLoadFile = false;
      }
    }

    if (upLoadFile) {
      const readerAbstract = new FileReader();
      readerAbstract.onload = function (e) {
        const url = new URL(
          "/isahcmu/src/abstracts-file/api/only-api",
          window.location.protocol + "//" + window.location.hostname
        );
        const uploadFileAbstract = e.target.result;
        const reQuestObject = {
          inputObject: results,
          uploadFileAbstract: uploadFileAbstract,
        };

        Swal.fire({
          icon: "question",
          title: "Confirm submission of abstract",
          text: "Research title: " + reQuestObject.inputObject.research,
          showCancelButton: true,
          showConfirmButton: true,
          confirmButtonText: "Comfirm",
          allowOutsideClick: false,
          allowEscapeKey: false,
        })
          .then((resp) => {
            if (resp.isConfirmed) {
               // เพิ่มดีเล เข้าไปด้วย 
              $.ajax({
                url: url,
                method: "POST",
                data: JSON.stringify({ abstract: reQuestObject }),
                contentType: "application/json",
              })
                .done((resp) => {
                  Swal.fire({
                    icon: "success",
                    title: "Successfully uploaded abstract file.",
                    footer:
                      "You will be contacted via email by the organizer once the review process finished.",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                  }).then((resp) => {
                    const url = new URL(
                      "/isahcmu/",
                      window.location.protocol + "//" + window.location.hostname
                    );
                    window.location.href = url;
                  });
                })
                .fail((err) => {
                  if (err.responseJSON.message === "DuplicateResearchTitle") {
                    Swal.fire({
                      icon: "error",
                      text: "The abstract has been previously submitted. Once per abstract, the same title may be utilized.",
                      footer:
                        'Please contact <a href="mailto:isah2024cmu@gmail.com">isah2024cmu@gmail.com</a> for assistance with any revisions or resubmissions that may be necessary.',
                    });
                  }
                });
            }
          })
      };
      readerAbstract.readAsDataURL(results.flieUpload);
    }

  }
};

const backFullPaper2 = () => {
  const url = new URL(
    "/isahcmu/src/abstracts-file/full",
    window.location.protocol + "//" + window.location.hostname
  );
  window.location.href = url;
};

// Function to show alert messages
const showAlert = (message) => {
  Swal.fire({
    icon: "info",
    title: message,
  });
};
