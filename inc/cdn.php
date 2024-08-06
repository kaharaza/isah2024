<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;
?>
<!-- META -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url . 'image/favicon/apple-touch-icon.png' ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url . 'image/favicon/favicon-32x32.png' ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url . 'image/favicon/favicon-16x16.png' ?>">
<link rel="manifest" href="<?php echo $url . 'image/favicon/site.webmanifest' ?>">
<link rel="mask-icon" href="<?php echo $url . 'image/favicon/safari-pinned-tab.svg' ?>" color="#5bbad5">
<link rel="shortcut icon" href="<?php echo $url . 'image/favicon/favicon.ico' ?>">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="<?php echo $url . 'image/favicon/browserconfig.xml' ?>">
<meta name="theme-color" content="#ffffff">

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countdown/2.6.0/countdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>