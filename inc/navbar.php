<?php
$name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = 'isahcmu/';
$url = $protocol . '://' . $host . '/' . $path;
?>
<div class="nav-1">
    <div class="fixed-top" style="background-color: #007095; box-shadow: 1px 1px 3px 1px #59595952;">

        <div class="container-fluid px-md-5 px-lg-5">
            <nav class="navbar navbar-expand-xl navbar-edit">
                <div class="container-fluid text-center">
                    <div class="d-flex">
                        <a class="navbar-brand d-flex align-items-center justify-content-center" href="<?php echo $url ?>">
                            <img src=<?php echo $url . "image/logo_2.png" ?> class="nav-img-log" alt="logo">
                        </a>
                        <!-- <a class="navbar-brand d-flex align-items-center justify-content-center" href="<?php echo $url ?>">
                            <img src="https://isah2024.vet.cmu.ac.th/isahcmu//image/seaohun.png" class="nav-img-log" alt="logo">
                        </a> -->
                    </div>
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars text-white"></i> MENU
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-lg-auto ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= $name == 'isah' ||
                                                                        $name == 'organ_com' ||
                                                                        $name == 'scient_com' ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">ABOUT US</a>
                                <ul class="dropdown-menu" style="background-color: #007095;">
                                    <li><a class="dropdown-item <?= $name == 'isah' ? 'active' : '' ?>" href="<?php echo $url . 'src/about/isah' ?>">ABOUT ISAH</a></li>
                                    <li><a class="dropdown-item <?= $name == 'hono_com' ? 'active' : '' ?>" href="<?php echo $url . 'src/about/hono_com' ?>">HONORARY COMMITTEE</a></li>
                                    <li><a class="dropdown-item <?= $name == 'organ_com' ? 'active' : '' ?>" href="<?php echo $url . 'src/about/organ_com' ?>">ORGANIZING COMMITTEE</a></li>
                                    <li><a class="dropdown-item <?= $name == 'scient_com' ? 'active' : '' ?>" href="<?php echo $url . 'src/about/scient_com' ?>">SCIENTIFIC COMMITTEE</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $name == 'preconference' ? 'active' : '' ?>" href="<?php echo $url . 'src/preconference' ?>">PRECONFERENCE</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= $name == 'import_date' ||
                                                                        $name == 'program' ||
                                                                        $name == 'speaker' ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">SCIENTIFIC PROGRAM</a>
                                <ul class="dropdown-menu" style="background-color: #007095;">
                                    <li><a class="dropdown-item <?= $name == 'import_date' ? 'active' : '' ?>" href="<?php echo $url . 'src/import_date' ?>">IMPORTANT DATE</a></li>
                                    <li><a class="dropdown-item <?= $name == 'program' ? 'active' : '' ?>" href="<?php echo $url . 'src/program' ?>">PROGRAM</a></li>
                                    <li><a class="dropdown-item <?= $name == 'speaker' ? 'active' : '' ?>" href="<?php echo $url . 'src/speaker' ?>">SPEAKERS</a></li>
                                </ul>
                            </li>



                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= $name == 'abstract-submission' ||
                                                                        $name == 'guideline' ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">ABSTRACT</a>
                                <ul class="dropdown-menu" style="background-color: #007095;">
                                    <li><a class="dropdown-item <?= $name == 'abstract-submission' ? 'active' : '' ?>" href="<?php echo $url . 'src/abstract-submission' ?>">ABSTRACT SUBMISSION</a></li>
                                    <li><a class="dropdown-item <?= $name == 'guideline' ? 'active' : '' ?>" href="<?php echo $url . 'src/guideline' ?>">GUIDELINES FOR PRESENTERS</a></li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link  <?= $name == 'register' ? 'active' : '' ?>" href="<?php echo $url . 'src/register/register' ?>">REGISTRATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.thaiembassy.com/thailand-visa/thailand-visa-types" target="_blank">VISA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $name == 'triproute' ? 'active' : '' ?>" href="<?php echo $url . 'src/triproute' ?>">FIELD TRIP</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= $name == 'acc' ? 'active' : '' ?>" href="<?php echo $url . 'src/acc' ?>">ACCOMMODATIONS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= $name == 'contact' ? 'active' : '' ?>" href="<?php echo $url . 'src/contact/contact' ?>">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item login-isah">
                        <a class="nav-link <?= $name == 'singin' ? 'active' : '' ?>" href="<?php echo $url . 'src/user/singin' ?>" id="singin">login</a>
                    </li>
                </div>
            </nav>
        </div>
    </div>
</div>