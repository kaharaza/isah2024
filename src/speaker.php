<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPEAKER</title>

    <?php include_once './../inc/cdn.php' ?>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include_once './../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / SPEAKER</span>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class=" mb-3">
            <div class="row g-3" id="keynoteSpeaker"></div>
            <div class="row g-3" id="keynoteSpeaker2"></div>
            <div class="row g-3" id="speaker"></div>
        </div>
    </div>
    <?php include_once './../inc/footer.php' ?>
    <script src="js/speaker.js"></script>
</body>

</html>