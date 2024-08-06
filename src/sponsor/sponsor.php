<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPONSOR</title>

    <?php include_once './../../inc/cdn.php' ?>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php include_once './../../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container  pre-padding">
            <div class="bangTag">
                <a href="<?php echo $host ?>">HOME</a> <span> / SPONSOR Response form & benefits</span>
            </div>
            <h1 class="text-uppercase">SPONSOR Response form & benefits </h1>
        </div>
    </div>
    <div class="container py-3">
        <div class="btn-class">
            <button class="btn text-uppercase btn-lg w-100">download Response form & benefits</button>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row g-2">
            <div class="col-lg-9 order-2 order-lg-1">
                <div class="card shadow p-3 h-100">
                    <form id="fromsponsor" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="txt_company_name" class="form-label text-uppercase"><i class="fa-regular fa-building"></i> COMPANY NAME</label>
                            <input type="text" class="form-control" id="txt_company_name" required>
                            <div class="invalid-feedback">
                                Please provide a company name.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txt_coordinator" class="form-label text-uppercase"> <i class="fa-regular fa-user"></i> Coordinator</label>
                            <input type="text" class="form-control" id="txt_coordinator" required>
                            <div class="invalid-feedback">
                                Please provide a Coordinator.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txt_phone" class="form-label text-uppercase"> <i class="fa-solid fa-phone"></i> phone number</label>
                            <input type="number" class="form-control" id="txt_phone" required>
                            <div class="invalid-feedback">
                                Please provide a phone number.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txt_email" class="form-label text-uppercase"> <i class="fa-regular fa-envelope"></i> Email Address</label>
                            <input type="email" class="form-control" id="txt_email" required>
                            <div class="invalid-feedback">
                                Please provide a email address.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="upload_files" class="form-label text-uppercase"><i class="fa-regular fa-file"></i> upload file <span class="text-danger">[PDF]</span> </label>
                            <input type="file" class="form-control" id="upload_files" accept=".pdf" required>
                            <div class="invalid-feedback">
                                Please upload file pdf.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="upload_logo" class="form-label text-uppercase">
                                <i class="fa-regular fa-file"></i> upload logo <span class="text-primary">[JPG PNG jpeg]</span> <span class="text-danger">[size 1 mb]</span> <span>If any</span>
                            </label>
                            <input type="file" class="form-control" id="upload_logo" required>
                            <div class="invalid-feedback">
                                Please upload logo JPG PNG jpeg.
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 " style="background-color: #007095; color: #fff;">SUBMIT</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card shadow p-3 h-100">
                    <h4 class="text-uppercase">Company list </h4>
                    <ul class="li-none" id="list_company">
                        <li>company 1</li>
                        <li>company 2</li>
                        <li>company 3</li>
                    </ul>

                    <div class="card p-2 test-txt-color">
                        <p>TEST ดูข้อมูลจะส่งไปเก็บ</p>
                        <li>ชื่อบริษัท: <span id="name"></span></li>
                        <li>ผู้ประสานงาน: <span id="coord"></span></li>
                        <li>เบอร์: <span id="pho"></span></li>
                        <li>อีเมล: <span id="emails"></span></li>
                        <li>ไฟล์: <span id="files"></span></li>
                        <li>โลโก้: <span id="logos"></span></li>
                    </div>
                    <div class=" p-2">
                        <h5>true = แนบไฟล์</h5>
                        <h5>false = ไม่ได้แนบไฟล์</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include_once './../../inc/footer.php' ?>
    <script src="sponsor.js"></script>
</body>

</html>