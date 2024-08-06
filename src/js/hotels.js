let hotels = [

    {
        image: './../image/hostel/02-Centara Hotels & Resorts.jpg',
        title: 'Centara Hotels & Resorts',
        link: 'https://www.centarahotelsresorts.com/centara/ccm',
    },
    {
        image: './../image/hostel/03-Chiang Mai Marriott Hotel.png',
        title: 'Chiang Mai Marriott Hotel',
        link: 'https://www.marriott.com/en-us/hotels/cnxmc-chiang-mai-marriott-hotel/overview/',
    },
    {
        image: './../image/hostel/04-Ratilanna Riverside Spa Resort Chiangmai.png',
        title: 'Ratilanna Riverside Spa Resort Chiangmai ',
        link: 'http://www.ratilannachiangmai.com/',
    },
    {
        image: './../image/hostel/05-Duangtawan Hotel Chiangmai.png',
        title: 'Duangtawan Hotel Chiangmai',
        link: 'https://www.duangtawanhotelchiangmai.com/index.html',
    },
    {
        image: './../image/hostel/06-Lanna Palace 2004 Hotel.png',
        title: 'Lanna Palace 2004 Hotel',
        link: 'http://www.lannapalace2004.com/',
    },
    {
        image: './../image/hostel/07-Sunny V Hotel.png',
        title: 'Sunny V Hotel',
        link: 'https://sunnyvhotel.com/',
    },
    {
        image: './../image/hostel/08-Le Bis Hotel Chiang Mai.png',
        title: 'Le Bis Hotel Chiang Mai',
        link: 'https://lebishotelchiangmai.com/',
    },
    {
        image: './../image/hostel/09-The Empress Hotel.png',
        title: 'The Empress Hotel',
        link: 'http://www.empresshotels.com/',
    },
    {
        image: './../image/hostel/10-Royal Lanna Hotel Chiangmai.png',
        title: 'Royal Lanna Hotel Chiangmai ',
        link: 'https://royallannahotel.co.th/',
    },
    {
        image: './../image/hostel/11-Night Bazaar Inn, Chiang Mai.png',
        title: 'Night Bazaar Inn, Chiang Mai',
        link: 'https://www.nightbazaarinnchiangmai.com/',
    },
    {
        image: './../image/hostel/12-Anantara Hotels, Resorts & Spas.png',
        title: 'Anantara Hotels, Resorts & Spas',
        link: 'https://www.anantara.com/en',
    },
    {
        image: './../image/hostel/13-Dusit.png',
        title: 'DusitD2 Chiang Mai',
        link: 'https://www.dusit.com/dusitd2-chiangmai/th/accommodation/',
    },
    {
        image: './../image/hostel/14-Melia.png',
        title: 'Meliá Chiang Mai',
        link: 'https://www.melia.com/en',
    },



]

$(document).ready(function() {
    hotelsCrad()
})

function hotelsCrad() {
    let html = '';
    for (let index = 0; index < hotels.length; index++) {
        const item = hotels[index]
        html += `
            <div class="col-lg-4">
            <div class="card shadow h-100">
            <a class="trip-card" href="${item.link}" target="_blank">
                <div class="trip-card-img">
                    <img src="${item.image}" class="trip-img" alt="">
                </div>
                <div class="card-body">
                    <h5> <i class="fa-solid fa-diamond-turn-right"></i> ${item.title}</h5>
                </div>
            </a>
        </div>
        </div>
            `;
        $('#hotels').html(html)


    }
}