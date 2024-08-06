let programisah = [
  {
    id: 1,
    img: "https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-0.jpg",
  },
  {
      id: 2,
      img: 'https://img5.pic.in.th/file/secure-sv1/7acc3dfcb3d5786a71724c676b6e1175-1.jpg',
  },
  {
      id: 3,
      img: 'https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-2.jpg',
  },
  {
      id: 4,
      img: 'https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-3.jpg',
  },
  {
      id: 5,
      img: 'https://img5.pic.in.th/file/secure-sv1/7acc3dfcb3d5786a71724c676b6e1175-4.jpg',
  },
  {
      id: 6,
      img: 'https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-5.jpg',
  },
  {
      id: 7,
      img: 'https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-6.jpg',
  },
  {
      id: 8,
      img: 'https://img2.pic.in.th/pic/7acc3dfcb3d5786a71724c676b6e1175-7.jpg',
  },
];

$(document).ready(function () {
  programloop();
});
function programloop() {
  html = "";
  for (i = 0; i < programisah.length; ++i) {
    html += `
        <div class="col-md-6 mx-auto">
                <a data-fancybox="gallery" href="${programisah[i].img}">
                    <img src="${programisah[i].img}" class="card-img-top">
                </a>
            </div>
        `;
  }
  $("#program_isah").html(html);
}
