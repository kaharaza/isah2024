<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISAH VMCMU</title>
    <?php include_once './inc/cdn.php';
    include_once './inc/meta.php';
    ?>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once  './inc/navbar.php' ?>
    <div class="carousel slide padding-t" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="img-silde" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="header-title">
        <p1>
            ISAH & SEAOHUN International Conference 2024
        </p1>
        <p3 class="fw-bold">
            One Health in Action – Innovations in Health, Welfare and Environment for a Sustainable Animal Production
        </p3>
        <p1 style="font-size: 32px;">
            16-20 September 2024
        </p1>
        <p3 class="mb-3 fw-bold">
            Shangri-La Hotel, Chiang Mai, Thailand
        </p3>

        <p4>
            Preconference: 16-17 September 2024
        </p4>
        <p4>
            Main conference: 18-20 September 2024
        </p4>
        <p3 class="px-5">
            International Society for Animal Hygiene (ISAH) in collaboration with Southeast Asia One Health University Network (SEAOHUN)
            <br>Organized by Faculty of Veterinary Medicine, Chiang Mai University
        </p3>

    </div>

    <div class="py-2">
        <div class="col-8 mx-auto">
            <div class="btn-class">
                <button class="btn btn-light btn-lg " style="background-color: beige;" onclick="gotoregister()">
                    <i class="fa-solid fa-registered"></i> Registration
                </button>
            </div>
        </div>
    </div>

    <div class="speaker p-2 p-md-3 p-lg-3">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-12 col-md-6 col-lg-6">
                    <img id="img-card1" src="" class="img-fluid img-card1" alt="">
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <img id="img-card2" src="" class="img-fluid img-card2" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 px-5" >
        <div class="col-lg-3 mx-auto mb-5 px-5">
            <h1 class="fw-bold text-center click-to-speaker" onclick="clickGospeaker()">SPEAKER</h1>
        </div>
        <div class="owl-carousel project-carousel">
        </div>
    </div>

    <div class="py-3" style="background-color:  #007095;" hidden>
        <div class="text-center text-light py-3">
            <h1 class="fw-semibold">PUBLIC RELATIONS POSTER</h1>
        </div>
        <div class="container-fluid pt-3">
            <div class="row g-2">
                <div class="col-lg-8">
                    <div class="owl-carousel project-poster">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="owl-carousel project-poster2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" hidden>
        <div class=" col-lg-3 mx-auto pt-5 text-center">
            <h1 class="fw-semibold click-to-program" onclick="clickGoprogram()">PROGRAM</h1>
        </div>
        <div class="row g-2" id="program_isah">
        </div>
    </div>

    <div class="venue" id="venue">
        <div class="venue-title">
            <p1>CONFERENCE VENUE</p1>
            <p2 class="col-lg-4 mx-auto" id="linkvenue">
                Shangri-La Hotel, Chiang Mai, Thailand
            </p2>
            <p3>89/8 Changklan Rd, Tambon Chang Khlan, Mueang Chiang Mai District, Chiang Mai 50100</p3>
            <div class="container">
                <div class="row g-2">
                    <div class="col-lg-4 col-md-12">
                        <div class="googlemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4759.309079883736!2d99.00354038817805!3d18.777395033907315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da30084f0aa36b%3A0xf34886d7f00ab5f3!2z4LmC4Lij4LiH4LmB4Lij4Lih4LmB4LiK4LiH4LiB4Lij4Li1LeC4peC4siDguYDguIrguLXguKLguIfguYPguKvguKHguYg!5e0!3m2!1sth!2sth!4v1694147985184!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="img-hostail">
                            <img src="https://sitecore-cd.shangri-la.com/-/media/Shangri-La/chiangmai_shangrila/photos-videos/photos/Chiang-Mai-SLCM_Exterior_01.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-sponser text-center" hidden>
        <p1>LOGO</p1>
        <div class="owl-carousel logo-sponsor">
        </div>
    </div>

    <div class="parallex">
        <div class="overlay-parallex">
            <div class="bg-img-parallex">
                <div class="content-parallex">
                    <div class="d-block container">
                        <p1>Chiang Mai Travel Guide</p1>
                        <p2>Chiang Mai is the main Northern Thailand city and the most visited in the region. One of the favorite cities of many travelers
                            and digital nomads.</p2>
                        <button type="button" onclick="guide()">CLICK MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './inc/footer.php' ?>
    <script src="./js/index.js"></script>
    <script src="./js/goto.js"></script>
    <script src="./inc/totop.js"></script>
</body>

</html>