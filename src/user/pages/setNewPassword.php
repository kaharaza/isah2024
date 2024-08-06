<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESET PASSWORD</title>
    <?php include_once './../../../inc/cdn.php' ?>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>
    <?php include_once './../../../inc/navbar.php' ?>
    <div style="padding: 50px;"></div>
    <div class="container py-5">
        <div class="col-lg-10 col-md-6 col-12 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <h1 class="fw-bold">RESET PASSWORD</h1>
                        <h4 class="me-3">
                            <i class="fa-regular fa-address-card"></i>
                            <span id="userId"></span>
                            <i class="fa fa-user-circle"></i>
                            <span id="fullName"></span>
                        </h4>
                    </div>
                    <div class="border-bottom mb-3"></div>
                    <div class="row g-2 was-validated">
                        <div class="col-12">
                            <div class="col-12 card p-2 mb-3">
                                Password must be between 8 and 32 characters, and include an uppercase letter, lowercase letter, number, and one of the following special characters: ? $ : @ # | .
                            </div>
                            <div class="col-12">
                                <div id="requirementList" class="mb-3 d-md-flex">
                                    <div class="requirementItem me-2 mt-2" id="requirement0">
                                        <i class=""></i> At least 8 characters
                                    </div>
                                    <div class="requirementItem me-2 mt-2" id="requirement1">
                                        <i class=""></i> At least one special character (@!:#$%)
                                    </div>
                                    <div class="requirementItem me-2 mt-2" id="requirement2">
                                        <i class=""></i> At least one lowercase letter
                                    </div>
                                    <div class="requirementItem me-2 mt-2" id="requirement3">
                                        <i class=""></i> At least one digit
                                    </div>
                                    <div class="requirementItem me-2 mt-2" id="requirement4">
                                        <i class=""></i> At least one uppercase letter
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label text-uppercase">NEW PASSWORD</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="txt_new_password" oninput="validatePassword(this)" placeholder="password" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="" class="form-label text-uppercase">CONFIRM NEW PASSWORD</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="txt_new_confirm_password" oninput="validatePasswordConfirm(this)" placeholder="confirm password" required>
                                </div>
                            </div>
                            <div id="passwordMatchMessage" class="invalid mt-2">Passwords do not match!</div>
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showNewPassword" onchange="showPassword()">
                                    <label class="form-check-label" for="showNewPassword">
                                        SHOW PASSWORD
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button class="btn btn-primary w-100" id="submitButton" onclick="newPassword()" disabled>Comfirm Reset Password</button>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-danger w-100" onclick="goToSingIn()">BACK SING-IN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './../../../inc/footer.php' ?>
    <script src="./../js/checkAuthen.js"></script>
    <script src="./../js/NewPassword.js"></script>
</body>


</html>