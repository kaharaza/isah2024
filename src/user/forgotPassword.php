<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORGOT PASSWORD</title>

    <?php include_once './../../inc/cdn.php' ?>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php include_once './../../inc/navbar.php' ?>
    <div style="padding: 50px;"></div>
    <div class="container py-5">
        <div class="col-lg-8 col-md-6 col-12 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="fw-bold"><i class="fa-solid fa-key"></i> FORGOT PASSWORD</h1>
                    <div class="border-bottom mb-3"></div>
                    <div class="row g-2 was-validated">
                        <div class="col-12">
                            <div class="col-12">
                                <label for="" class="form-label text-uppercase">invoice ID:</label>
                                <div class="input-group">
                                    <span type="text" class="input-group-text">ISAH</span>
                                    <input type="text" class="form-control" id="txtUserId" oninput="this.value = this.value.replace(/\D/g, '')" placeholder="Numbers only" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="" class="form-label text-uppercase">Email</label>
                                <div class="input-group">
                                <span type="text" class="input-group-text">EMAIL</span>
                                    <input type="text" class="form-control" id="txtEmail" oninput="this.value = this.value.replace(/[^a-zA-Z0-9@.]/g, '')" placeholder="email@email.com" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-primary w-100" onclick="newPassword()">Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './../../inc/footer.php' ?>
    <script src="./js/repassword.js"></script>
</body>


</html>