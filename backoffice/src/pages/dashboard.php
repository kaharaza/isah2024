<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
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
                <h1> <i class="nav-icon fab fa-buromobelexperte mr-2"></i>Dashborad</h1>
            </section>

            <div class="card card-body">
                <!-- Main content -->
                <section class="content">
                    <div class="row g-2">
                        <div class="col-md-4 col-12">
                            <div class="card card-outline card-primary">
                                <div class="card-header text-center">
                                    <h3 class="text-primary"><i class="fab fa-dashcube mr-2"></i> จำนวนผู้ลงทะเบียน</h3>
                                </div>
                                <div class="card-body text-center">
                                    <h1 class="text-primary" id="countRegister">0</h1>
                                    <a href="registrant" class="btn btn-primary w-100">ดูข้อมูล</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card card-outline card-success">
                                <div class="card-header text-center">
                                    <h3 class="text-success"><i class="fa fa-check mr-2"></i> ชำระเงินแล้ว</h3>
                                </div>
                                <div class="card-body text-center">
                                    <h1 class="text-success" id="paidPayment">0</h1>
                                    <a href="registrant" class="btn btn-primary w-100">ดูข้อมูล</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card card-outline card-danger">
                                <div class="card-header text-center">
                                    <h3 class="text-danger"><i class="fa fa-times mr-2"></i> ยังไม่ได้ชำระเงิน</h3>
                                </div>
                                <div class="card-body text-center">
                                    <h1 class="text-danger" id="failPayment">0</h1>
                                    <a href="registrant" class="btn btn-primary w-100">ดูข้อมูล</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Default box -->
                </section>
            </div>

            <section class="content-header">
                <h1>
                    <i class="fa fa-file"></i> Full paper & Abstract only
                </h1>
            </section>

            <div class="card card-body">
                <div class="row g-2">
                    <div class="col-md-4 col-12">
                        <div class="card card-outline card-secondary">
                            <div class="card-header text-center">
                                <h3 class="text-secondary"><i class="fas fa-copy mr-2"></i> จำนวนเรื่องบทคัดย่อ</h3>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="text-secondary" id="abstract_only">0</h1>
                                <a href="abstract" class="btn btn-secondary w-100">ดูข้อมูล</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header text-center">
                                <h3 class="text-info"><i class="fa fas fa-book mr-2"></i> จำนวนเรื่องฉบับเต็ม</h3>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="text-info" id="fullpaper">0</h1>
                                <a href="fullpaper" class="btn btn-info w-100">ดูข้อมูล</a>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="./../js/dashborad.js"></script>

</body>

</html>