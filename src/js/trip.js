let trip = [
  {
    image:
      "./../image/fleld_trip/01-trip1.jpg",
    title: "Mae Rim Elephant Home and Elephant Poopoopaper Park",
    link: "https://www.poopoopaperpark.com/",
    text1: `<b class=border-bottom>Ticket Fee:</b> 60 USD (including lunch, light snacks, entrance fees and transportation)`,
    text2: `<b class="border-bottom">Hours:</b> 09.00- 15.00 hrs.`,
    text3: `<b class="border-bottom">Max. Seat:</b> 20 people`,
  },
  {
    image: "./../image/fleld_trip/02-trip2.png",
    title:
      "Huai Hong Khrai Royal Development Study Center: sufficiency economy for a sustainable life (Conservation study on Frog Farming Section and fisheries Section)",
    link: "#!",
    text1: `<b class=border-bottom>Ticket Fee:</b> 30 USD (including lunch, light snacks, entrance fees and transportation)`,
    text2: `<b class="border-bottom">Hours:</b> 09.00- 15.00 hrs.`,
    text3: `<b class="border-bottom">Max. Seat:</b> 100 people`,
    text4: `<b class="border-bottom">Detail:</b> <p>
    The Huai Hong Khrai Royal Development Study Centre focuses attention on conducting study and research on various development patterns under the sustainable principles of Royal Majesty. The Centre also provides services to the people in various fields, such as supporting animal husbandry activities and plant seeds, and giving advice and guidance on techniques which people in the surrounding villages and farmers in general can adopt and apply in their daily occupation.
    </p>`,
  },

  {
    image: "./../image/fleld_trip/03-trip3.png",
    title:
      "Integrated dairy cattle farming (dairy Cattle, food processing, biogas plant)",
    link: "#!",
    text1: `<b class=border-bottom>Ticket Fee:</b> 30 USD (including lunch, light snacks, entrance fees and transportation)`,
    text2: `<b class="border-bottom">Hours:</b> 09.00- 15.00 hrs.`,
    text3: `<b class="border-bottom">Max. Seat:</b> 30 people`,
    text4: `<b class="border-bottom">Detail:</b> <p>
    The cattle farm has joined the project to study the circular economy model for waste management in dairy farms under BCG model. This project encourages the farmer to use cow manure to feed the earthworm for producing organic fertilizer and help to reduce pollution problems from farm waste.
    </p>`,
  },
  {
    image:
      "./../image/fleld_trip/04-trip4.jpg",
    title: "Doi Suthep + Chiang Mai Livestock Product Research and Development Center",
    link: "#!",
    text1: `<b class=border-bottom>Ticket Fee:</b> 30 USD  (including lunch, light snacks, entrance fees and transportation)`,
    text2: `<b class="border-bottom">Hours:</b> 09.00- 15.00 hrs.`,
    text3: `<b class="border-bottom">Max. Seat:</b> 40 people`,
    
  },
];

$(document).ready(function () {
  tripRoute();
});
function tripRoute() {
  let html = "";
  for (let index = 0; index < trip.length; index++) {
    const item = trip[index];
    html += `
        <div class="col-lg-4">
          <div class="card shadow h-100">
          <a class="trip-card" href="${item.link}" target="_blank">
              <div class="trip-card-img">
                  <img src="${item.image}" class="trip-img" alt="">
              </div>
          </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card-body trip-card">
              <h5> <span class="fw-bold me-2">TRIP ${index+1}</span> <span>${item.title}</span> </h5>
              <ul class="li-style">
                <li>${item.text1 = (item.text1 === undefined) ? '' : item.text1}</li>
                <li>${item.text2 = (item.text2 === undefined) ? '' : item.text2}</li>
                <li>${item.text3 = (item.text3 === undefined) ? '' : item.text3}</li>
                <li>${item.text4 = (item.text4 === undefined) ? '' : item.text4}</li>
              </ul>
          </div>
        </div>
        `;
    $("#tripcrad").html(html);
  }
}
