const keynoteSpeaker = [
  {
    image: "./../image/Spanker/Roesler.jpg",
    title:
      "Biosecurity and disinfection of wooden components in animal stables",
    prefix: "Prof.Dr. ",
    name: "Uwe. H. Rösler",
    school: "School of Veterinary Medicine, Freie Universitaet Berlin, Germany",
  },
  {
    image: "./../image/Spanker/Dirk.jpg",
    title:
      "Enhancing Global Preparedness: Reforming the Future Workforce and Utilizing Technological Tools in Managing Pathogen Transmission",
    prefix: "Prof.",
    name: "Dirk Pfeiffer",
    school:
      "Director, Centre for Applied One Health Research and Policy Advice (OHRP) City University of Hong Kong, Hong Kong Professor of Veterinary Epidemiology, Royal Veterinary College, London",
  },
];

const keynoteSpeaker2 = [
  {
    image: "./../image/Spanker/Rungtip.jpg",
    title: "Strengtening AMR data generation in Asia",
    prefix: "Prof.Dr. ",
    name: "Rungtip Chuanchuen",
    school:
      "Director of Thailand FAO Reference Centre for Antimicrobial Resistance and Director for CUARM, Faculty of Veterinary Medicine, Chulalongkorn University, Thailand",
  },
];
let dataSpeaker = [
  {
    image: "./../image/Spanker/Tetsuya Furuya.jpg",
    title:
      "Detection of the chemicals in Chinese herb extracts having both anti-malarial and anti-virus activities",
    prefix: "Prof.Dr. ",
    name: "Tetsuya Furuya",
    school: "Tokyo University of Agriculture and Technology, Tokyo",
  },

  {
    image: "./../image/Spanker/Nakao.jpg",
    title:
      "Exploring novel interventions against parasitic and vector-borne diseases by genetic approaches",
    prefix: "Prof.Dr. ",
    name: "Ryo Nakao",
    school: "Hokkaido University, Hokkaido, Japan",
  },

  {
    image: "./../image/Spanker/Clive.jpg",
    title: "Livestock Production and Animal Welfare- Challenges and Options",
    prefix: "Prof.Dr. ",
    name: "Clive Phillips",
    school: "Curtin University, Australia",
  },
  {
    image: "./../image/Spanker/Fred.jpg",
    title:
      "Sustainable livestock systems in LMIC – importance, challenges, and opportunities",
    prefix: "Dr. ",
    name: "Fred Unger",
    school:
      "International Livestock Research Institute (ILRI) for East, South and Southeast Asia",
  },

  {
    image: "./../image/Spanker/Wanapat.jpg",
    title:
      "Strategic supplementation with phytonutrient pellets on crop- residues- based rations for ruminants",
    prefix: "Prof.Dr. ",
    name: "Metha Wanapat",
    school: "Faculty of Agriculture , Khon Kaen University, Thailand",
  },

  {
    image: "./../image/Spanker/Nguyen Trong Ngu.jpg",
    title: "Natural feed additives used in animal production",
    prefix: "Prof.Dr. ",
    name: "Nguyen Trong Ngu",
    school: "Can Tho University, Vietnam",
  },

  {
    image: "./../image/Spanker/Hien Van Doan.jpg",
    title: "Alternatives to antibiotics for sustainable aquaculture",
    prefix: "Assoc.Prof.Dr. ",
    name: "Hien Van Doan",
    school: "Facutly of Agriculture, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Gatphayak.jpg",
    title:
      "A battle between environment and smart technologies: the challenges of sustainable animal production",
    prefix: "Assoc.Prof.Dr. ",
    name: "Kesinee Gatphayak",
    school:
      "Department of Animal and Aquatic Sciences, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Wanaporn.jpg",
    title: "Feed additives: A tool for sustainable animal production",
    prefix: "Assoc.Dr. ",
    name: "Wanaporn Tapingkae",
    school:
      "Department of Animal and Aquatic Sciences, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Bajaree.jpg",
    title:
      "Sustainable Farming Practices for Native Honey Bee Species in Thailand",
    prefix: "Dr. ",
    name: "Bajaree Chuttong",
    school:
      "Department of Entomology and Plant Pathology, Faculty of Agriculture, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Pakkanut Bansiddhi.jpg",
    title: "Assessing Welfare in Captive Animals: A Scientific Approach",
    prefix: "Asst.Prof.Dr. ",
    name: "Pakkanut Bansiddhi",
    school: " Faculty of Veterinary Medicine, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Songphon.jpg",
    title: "One Health Microbiome: A Driver of Healthy Ecosystem",
    prefix: "Lecturer Dr. ",
    name: "Songphon Buddhasiri",
    school: "Faculty of Veterinary Medicine, Chiang Mai University, Thailand",
  },

  {
    image: "./../image/Spanker/Sahatchai.jpg",
    title: "Cryptosporidiosis: a neglected zoonotic disease",
    prefix: "Asst.Prof.Dr. ",
    name: "Sahatchai Tangtrongsup",
    school: "Faculty of Veterinary Medicine, Chiang Mai University, Thailand",
  },
  {
    image: "./../image/Spanker/Sakdid.jpg",
    title:
      "Implementing Government Strategies in the Private Sector to Tackle AMU-AMR in Thailand",
    prefix: "Dr. ",
    name: "Sakdid Anulomsombat",
    school:
      "Assistant Vice President Food Safety and Quality Management Office Betagro Group",
  },

  {
    image: "./../image/Spanker/Bernd.jpg",
    title:
      "Resistance of Escherichia coli in calves from different husbandry systems and age groups in Germany",
    prefix: "Dr. ",
    name: "Bernd Alois Tenhagen",
    school: "The German Federal Institute for Risk Assessment (BfR), Germany",
  },
];

$(document).ready(function () {
  getdateSpeaker();
  getdateKeyNoteSpeaker();
  getdateKeyNoteSpeaker2();
});

function getdateKeyNoteSpeaker() {
  html = "";
  for (i = 0; i < keynoteSpeaker.length; ++i) {
    html += `
                <div class="col-md-4 image-speaker text-lg-end text-center">
                    <img src="${keynoteSpeaker[i].image}" class="image-speaker-speaker" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="speaker-ul-li">
                           <ul class="ul-li">
                                <span class="text-speaker">Keynote Speaker</span>
                            </ul>
                            <ul class="ul-li">
                                <p>${keynoteSpeaker[i].prefix} ${keynoteSpeaker[i].name} </p>
                            </ul>
                            <ul class="ul-li">
                                <p>${keynoteSpeaker[i].school}</p>
                            </ul>
                            <ul class="ul-li">
                                <p>Topic: ${keynoteSpeaker[i].title}</p>
                            </ul>
                        </ul>
                    </div>
                </div>
                <hr>
        `;
    $("#keynoteSpeaker").html(html);
  }
}

function getdateKeyNoteSpeaker2() {
  html = "";
  for (i = 0; i < keynoteSpeaker2.length; ++i) {
    html += `
                <div class="col-md-4 image-speaker text-lg-end text-center">
                    <img src="${keynoteSpeaker2[i].image}" class="image-speaker-speaker" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="speaker-ul-li">
                           <ul class="ul-li">
                                <span class="text-speaker">Keynote speech, virtual conference</span>
                            </ul>
                            <ul class="ul-li">
                                <p>${keynoteSpeaker2[i].prefix} ${keynoteSpeaker2[i].name} </p>
                            </ul>
                            <ul class="ul-li">
                                <p>${keynoteSpeaker2[i].school}</p>
                            </ul>
                            <ul class="ul-li">
                                <p>Topic: ${keynoteSpeaker2[i].title}</p>
                            </ul>
                        </ul>
                    </div>
                </div>
                <hr>
        `;
    $("#keynoteSpeaker2").html(html);
  }
}

function getdateSpeaker() {
  html = "";
  for (i = 0; i < dataSpeaker.length; ++i) {
    html += `
                <div class="col-md-4 image-speaker text-lg-end text-center">
                    <img src="${dataSpeaker[i].image}" class="image-speaker-speaker" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="speaker-ul-li">
                            <ul class="ul-li">
                                 <span class="text-speaker">Invited Speaker</span>
                            </ul>
                            <ul class="ul-li">
                                <p>${dataSpeaker[i].prefix} ${dataSpeaker[i].name} </p>
                            </ul>
                            <ul class="ul-li">
                                <p>${dataSpeaker[i].school}</p>
                            </ul>
                            <ul class="ul-li">
                                <p>Topic: ${dataSpeaker[i].title}</p>
                            </ul>
                        </ul>
                    </div>
                </div>
                <hr>
        `;
    $("#speaker").html(html);
  }
}
