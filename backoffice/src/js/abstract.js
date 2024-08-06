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
    url: url + "/backoffice/src/api/abstract.controller.php",
    method: "GET",
    datatype: "JSON",
  })
    .done((resp) => {
      tableList(resp.response);
    })
    .fail((err) => {
      console.error(err);
    });
};
 
const tableList = (items) => {
    html = "";
    html += `
          <table id="myTable" class="table table-bordered table-striped table-responsive-sm table-responsive-lg">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>ชื่อ</th>
                      <th>ประเทศ</th>
                      <th>หมวดหมู่</th>
                      <th>ชื่อเรื่อง</th>
                      <th>หัวข้อ</th>
                      <th>รูปแบบ</th>
                      <th>การสนับสนุน</th>
                      <th>อีเมล</th>
                      <th>download</th>
                  </tr>
              </thead>
              <tbody>
                  ${
                    items.length > 0
                      ? items
                          .map(
                            (item) => `
                                      <tr>
                                       <td>${
                                         item.id
                                       }</td>
                                          <td>${
                                            item.firstname + " " + item.lastname
                                          }</td>
                              
                                          <td>${item.country}</td>
                                          <td>${item.category}</td>
                                          <td>${item.research_title}</td>
                                          <td>${item.topic}</td>
                                          <td>${item.prefer}</td>
                                          <td>${
                                            item.scholarship == null
                                              ? "ไม่ขอรับ"
                                              : "ขอรับ"
                                          }</td>
                                          <td class="text-center" style="font-size: 24px;"><a href="mailto:${
                                            item.email
                                          }"><i class="fa fa-envelope"></i></a></td>
                                          <td style="font-size: 24px; text-align: center;">
                                            <a href="${item.link_research}">
                                            <i class="fa fa-file-word text-info"></i>
                                            </a>
                                          </td>
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
  
  
