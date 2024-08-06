<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;
?>

<!-- Back to Top -->

<a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top">
    <i class="bi bi-arrow-up"></i>
</a>
<footer class="contact-footer" style="background-color: #007095;">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-2 col-12 d-block text-center ">
                <img src="<?php echo $url . 'image/logo.png' ?>" width="50%" height="auto" alt="">
                <h5>© Copyright ISAH - All Rights Reserved </h5>
            </div>
            <div class="col-md-3 col-12 ">
                <h3 class="border-bottom">ADDRESS</h3>
                <h6 class="fw-bold">ISAH2024 Conference Secretariat</h6>
                <h6>Faculty of Veterinary Medicine </h6>
                <h6>Chiang Mai University</h6>
                <h6>155 Moo 2, Mae Hia , Mueang 50100 Chiang Mai, Thailand</h6>
            </div>
            <div class="col-md-3 col-12">
               
                <h3 class="border-bottom">PHONE</h3>
                <h6>Tel: (+66) 5394 8026</h6>
                <h6>Tel: (+66) 5394 8073</h6>
            </div>
            <div class="col-md-4 col-12">
            <h3 class="border-bottom">EMAIL ADDRESS</h3>
                <h6>
                    <a class="link" href="mailto:isah2024cmu@gmail.com"> <i class="fa-regular fa-envelope"></i> isah2024cmu@gmail.com</a>
                </h6>
                <div class="logo-img-footer row g-1">
                <img src="<?php echo $url . 'image/logofooter.png' ?>" class="footer-logo-cmu" alt="">
                </div>
            </div>

        </div>
    </div>

</footer>