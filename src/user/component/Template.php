<?php
$name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;
?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo $url.'image/logo.png'?>" alt="AdminLTELogo" height="60" width="60">
    <p>Loading....</p>
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#!" class="brand-link">
        <i class="fa fa-user mr-2 ml-3"></i> <span class="brand-text " id="InvoiceNo"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $url . 'src/user/dist/img/avatar.png' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#!" class="d-block" id="fullName"></a>
            </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info text-white" style="list-style: none;">
                <li>Payment status: <span  id="respCode"></span></li>
                <li>PaymentID: <span id="paymentID"></span> </li>
                <li>Country: <span id="counTry"></span></li>
                <li>Food: <span id="foodPre"></span></li>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="paymentStatus" class="nav-link">
                        <i class="nav-icon fa fa-hashtag"></i>
                        <p>
                            PAYMENT STATUS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard" class="nav-link">
                        <i class="nav-icon fab fa-buromobelexperte"></i>
                        <p>
                        CHECK-IN STEPS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="attend" class="nav-link">
                        <i class="nav-icon fab fa-dashcube"></i>
                        <p>
                            ATTEND
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link" onclick="payMent()">
                        <i class="nav-icon 	fa fa-credit-card"></i>
                        <p>
                            PAYMENT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>