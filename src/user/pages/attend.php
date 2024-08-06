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
    <title>Attend</title>
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
            <h1> <i class="fa fa-id-card mr-2"></i>I WOULD LIKE TO ATTEND</h1>
      </section>

      <div class="card card-body">
        <!-- Main content -->
        <section class="content">
              <div class="card">
                  <div class="card-body">
                      <div class="row g-2">
                        <div class="col-md-8 col-12 order-1">
                            <div class="col-12">
                                <h1 class="display-4">ATTEND</h1>
                                <input type="text" class="form-control" id="attend" readonly disabled>
                            </div>
                            <div class="col-12">
                                <h1 class="display-4">ADDITIONAL SURVEY</h1>
                                <input type="text" class="form-control" id="selectfeejoin" readonly disabled>
                            </div>
                            <div class="col-12">
                                <h1 class="display-4">WORKSHOP</h1>
                                <input type="text" class="form-control" id="selectworkshop" readonly disabled>
                            </div>
                            <div class="col-12">
                                <h1 class="display-4">FIELD TRIP</h1>
                                <input type="text" class="form-control" id="selecttirp" readonly disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 order-2 border-left">
                           <div class="card-body">
                            <div class="d-block text-center">
                                <img src="<?php echo $url.'image/logo.png'?>" class="img-fluid" alt="">
                            </div>
                           </div>
                        </div>
                      </div>
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