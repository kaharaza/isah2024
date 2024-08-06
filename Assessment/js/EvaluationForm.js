let numberId = {};
let selectedValues1 = {};
let selectedValues2 = {};
let selectedValues3 = {};

let formDataremark2 = {};
let formDataremark3 = {};
const inputChange = async (change) => {
  try {
    if (change === 0) {
      $("#userId").css("display", "block");
      $("#open").css("display", "none");
    }
    if (change === 1) {
      $("#userId").css("display", "none");
      $("#open").css("display", "block");
    }
  } catch (e) {
    alert("message:", e);
  }
};

$("#numberId").on("input", function (e) {
  numberId = e.target.value;
});

$("input[name='question-1']").on("change", function () {
  let selectedValue = $("input[name='question-1']:checked").val();
  selectedValues1 = selectedValue;
  console.log("Selected value for question-1:", selectedValue);
});

$("input[name='question-2']").on("change", function () {
  let selectedValue = $("input[name='question-2']:checked").val();
  selectedValues2 = selectedValue;
  console.log("Selected value for question-2:", selectedValue);
});
$("#remark-question-2").on("input", function () {
  let remarkValue = $(this).val();
  formDataremark2 = remarkValue;
  console.log("Remark for question-2:", remarkValue);
});

$("input[name='question-3']").on("change", function () {
  let selectedValue = $("input[name='question-3']:checked").val();
  selectedValues3 = selectedValue;
  console.log("Selected value for question-3:", selectedValue);
});
$("#remark-question-3").on("input", function () {
  let remarkValue = $(this).val();
  formDataremark3 = remarkValue;
  console.log("Remark for question-3:", remarkValue);
});

$("#myForm").on("submit", function (e) {
  e.preventDefault();
  console.log({
    numberId: numberId,
    question1: selectedValues1,
    question2: selectedValues2,
    remark2: formDataremark2,
    question3: selectedValues3,
    remark3: formDataremark3,
  });
  if (numberId !== null) {
    handleOpenDownload(
      "https://docs.google.com/presentation/d/1LsKLhe_7ysZcZ9Epp3Kinq_1UtyfGZB6e2YObpPP2Ds/edit?usp=sharing"
    );
    $("#buttonSend").css("display", "none");
    $("#userId").css("display", "none");
    $("#text-remak-final").css("display", "block");
    $("#text-remak").css("display", "none");
  }
});

const handleOpenDownload = (link) => {
  let html = `
    <div class="input-group mt-3">
        <a type="button" href="${link}" target="_blank" class="input-group-text btn btn-download">Click the link to download certificate</a>
        <input type="text" class="form-control" value="${link}" id="downloadLink" readonly>
        <button class="btn btn-download copyButton">Copy</button>
    </div>
  `;
  $("#openDownload").html(html);

  $(".copyButton").click(() => {
    const copyText = document.getElementById("downloadLink");
    copyText.select();
    copyText.setSelectionRange(0, 99999); // mobile devices
    document.execCommand("copy");
    Swal.fire({
      title: "Copy link success",
      text: `${copyText.value}`,
      icon: "success",
      timer: 2000,
    });
  });
};
