<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FIELD TRIP ROUTE</title>

    <?php include_once './../inc/cdn.php' ?>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include_once './../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / FIELD TRIP</span>
            </div>
            <h1 class="text-uppercase">FIELD TRIP</h1>
            <p class="text-white h5">
            Participants can select only 1 route for field trip (the cost of field trip is excluded from the conference registration fee).
            </p>
        </div>
    </div>
    <div class="container-fluid py-5 px-lg-5 px-2">
        <div class="row g-4" id="tripcrad"></div>
    </div>
    <?php include_once './../inc/footer.php' ?>
    <script src="./js/trip.js"></script>
</body>

</html>