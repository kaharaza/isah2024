let url =
window.location.protocol +
"//" +
window.location.hostname +
"/isahcmu";
window.onload = function () {
  fetchData();
};

const fetchData = () => {
  $.ajax({
    url: url + "/backoffice/src/api/register.controller.php",
    method: "GET",
    datatype: "json",
  })
    .done((resp) => {
      tableList(resp.response);
    })
    .fail((err) => {
      
    });
};
 
const tableList = (items) => {
    html = "";
    html += `
          <table id="myTable" class="table table-bordered table-striped table-responsive-md">
              <thead>
                  <tr>
                      <th>UserId</th>
                      <th>ชื่อ</th>
                      <th>องค์กร</th>
                      <th>ประเทศ</th>
                      <th>การชำระเงิน</th>
                      <th>จำนวน(USD)</th>
                      <th>ออฟชั่น</th>
                      <th>อาหาร</th>
                      <th>อีเมล</th>
                  </tr>
              </thead>
              <tbody>
                  ${
                    items.length > 0
                      ? items
                          .map(
                            (item) => `
                                      <tr>
                                          <td class="text-success" style="font-size: 24px">${item.userId}</td>
                                          <td>${
                                            item.prefix +
                                            " " +
                                            item.firstname +
                                            " " +
                                            item.lastname
                                          }</td>
                                          <td>${item.organization}</td>
                                          <td>${item.country}</td>
                                          <td class="text-center ">
                                              <div class="w-100 btn ${item.statusPayment === "success" ? "btn-success btn-sm" : "btn-danger btn-sm"}">
                                                  ${item.statusPayment}
                                              </div>
                                          </td>
                                          <td>${item.total}</td>
                                          <td>${
                                            "1. " +
                                            item.selectfeejoin +
                                            "<br>2. " +
                                            item.selectworkshop +
                                            "<br>3. " +
                                            item.selecttirp
                                          }</td>
                                          <td>${item.food}</td>
                                          <td class="text-center" style="font-size: 24px;"><a href="mailto:${
                                            item.email
                                          }"><i class="fa fa-envelope"></i></a></td>
                                      </tr>
                                  `
                          )
                          .join("")
                      : ""
                  }
              </tbody>
          </table>
      `;
  
    // Append the HTML to your tableReport div
    $("#tableReport").html(html);
  
    // Initialize DataTables with the export option
    $('#myTable').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excelHtml5'
      ],
      pageLength: 100
    });
  };
  
  
