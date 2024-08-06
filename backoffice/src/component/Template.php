<?php
session_start();
$name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;

if (!$_SESSION['itaccounttype_id'] && !$_SESSION['organization_code']) {
    header('location: ../index');
} else {

    $fullname = $_SESSION['firstname_TH'] . ' ' . $_SESSION['lastname_TH'];
    $email = $_SESSION['email'];

    // echo '<pre>';
    // echo 'Email: ' . $_SESSION['email'];
    // echo '<br>';
    // echo 'Firstname_TH: ' . $_SESSION['firstname_TH'];
    // echo '<br>';
    // echo 'Lastname_TH: ' . $_SESSION['lastname_TH'];
    // echo '<br>';
    // echo 'Organization_code: ' . $_SESSION['organization_code'];
    // echo '<br>';
    // echo 'Itaccounttype_id: ' . $_SESSION['itaccounttype_id'];
    // echo '</pre>';
}
?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo $url . 'image/logo.png' ?>" alt="AdminLTELogo" height="60" width="60">
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
            <div class="nav-link">
                <?= $_SESSION['email'] ?></span></span>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $url."/backoffice/src/logout"?>">
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
        <i class="fa fa-user mr-2 ml-3"></i> <span class="brand-text "><?= $fullname ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link  <?php echo $name == 'dashboard' ? 'active' : ''; ?>">
                        <i class="nav-icon fab fa-buromobelexperte"></i>
                        <p>
                            Dashborad
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registrant" class="nav-link <?php echo $name == 'registrant' ? 'active' : ''; ?>">
                        <i class="nav-icon fab fa-dashcube"></i>
                        <p>
                            ผู้ลงทะเบียน
                        </p>
                    </a>
                </li>
                <li class="nav-header">Abstract only</li>
                <li class="nav-item">
                    <a href="abstract" class="nav-link <?php echo $name == 'abstract' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            บทคัดย่อ
                        </p>
                    </a>
                </li>
                <li class="nav-header">Full paper</li>
                <li class="nav-item">
                    <a href="fullpaper" class="nav-link <?php echo $name == 'fullpaper' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            ฉบับเต็ม
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
