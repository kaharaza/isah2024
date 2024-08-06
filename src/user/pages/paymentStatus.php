<?php
$name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar & Main Sidebar Container -->
        <?php include_once('../component/Template.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1> <i class="fa fa-hashtag mr-2"></i>PAYMENT STATUS</h1>
            </section>

            <div class="card card-body">
                <!-- Main content -->
                <section class="content">

                    <div class="row text-center g-2">
                        <div class="col-12">
                            <h1 class="display-3"><i class="fa fa-credit-card"></i></h1>
                        </div>
                        <div class="col-12">
                            <h1 class="display-5">Payment status: <span id="respCode2"></span> </h1> <br>
                        </div>
                        <div class="col-12">
                            <h1 class="display-6">Time: <span id="timepayment"></span> </h1>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-50" onclick="payMent()"><i class="fa fa-credit-card mr-2"></i> PAY NOW</button>
                        </div>
                    </div>
                    <!-- Default box -->
                </section>
            </div>
        </div>
    </div>



    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/paymentToken.js"></script>

</body>

</html>