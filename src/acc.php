<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ACCOMMODATIONS</title>

    <?php include_once './../inc/cdn.php' ?>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include_once './../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / ACCOMMODATIONS</span>
            </div>
            <h1 class="text-uppercase">ACCOMMODATIONS</h1>
            <p class="text-white">
                Optional Hotels nearby to Shangri-La Hotel (night bazaar area) as follows
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="./../image/hostel/01-Chiang Mai-SLCM_Exterior_01.jpg" class="img-shangrila" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="box-shangrila">
                    <div class="title-shangrila">Shangri-La Hotel Chiang Mai</div>
                </div>
                <div class="detail-shangrila">
                    <p>
                        <strong>Special rates</strong> for ISAH2024: A block booking has been set for <strong>VET160924A</strong> promo code. The rates apply for reservation at: <span class="text-primary" onclick="gosha()">http://www.shangri-la.com/reservations/booking/en/index.aspx?hid=SLCM&group_code=VET160924A&check_in=20240917&check_out=20240921</span> or click hotel link below.
                    <p>
                        Rooms will be attributed on a first-come-first-served basis. Once accepted, reservation rates are guaranteed with your Credit Card number. You will pay at the hotel directly.
                    </p>
                    <p><strong>Room rate 4,200 Baht/night</strong> includes breakfast. (nett price)</p>
                    <a href="http://www.shangri-la.com/reservations/booking/en/index.aspx?hid=SLCM&group_code=VET160924A&check_in=20240917&check_out=20240921" target="_blank" class="btn btn-primary">Click hotel link</a>
                </div>
            </div>
        </div>
        <div class="row g-2" id="hotels"></div>
    </div>
    <?php include_once './../inc/footer.php' ?>
    <script src="./js/hotels.js"></script>
    <script>
        function gosha() {
            window.open('http://www.shangri-la.com/reservations/booking/en/index.aspx?hid=SLCM&group_code=VET160924A&check_in=20240917&check_out=20240921', '_blank')
        }
    </script>
</body>

</html>