const handleChange = async (index) => {
  try {
    if (index === 0) {
      inputChange(index);
    }
  } catch (e) {
    alert("message:", e);
  }
};

const inputChange = async (change) => {
  try {
    if (change === 0) {
      
      let html = "";
      html +=`
            <form class=" was-validated">
                <div class="input-group">
                    <span class="input-group-text">ISAH</span>
                    <input type="text" class="form-control" placeholder="999" required>
                </div>
                <button type="submit" class="btn btn-userId mt-3 w-50">Submit</button>
            </form>
        `;
      $("#userId").html(html);
    }
  } catch (e) {
    alert("message:", e);
  }
};
