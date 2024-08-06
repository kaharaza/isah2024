<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Certificate and Evaluation form</title>
    <?php include_once './../inc/cdn.php';
    include_once './../inc/meta.php';
    ?>
    <link rel="stylesheet" href="./css/ass.style.css">
</head>

<body>
    <div class="bg-assessment">
        <div class="box-signin">


            <div class="container">
                <img src="https://isah2024.vet.cmu.ac.th/isahcmu/image/logo_2.png" class="img-size" alt="">
                <div class="mb-3 h2 text-white">Download Certificate and Evaluation form</div>
                <div class="d-flex align-items-center ma-customer">
                    <button onclick="handleChange(0)" class="btn btn-userId">USER ID</button>
                    <button onclick="handleChange(1)" class="btn btn-fname">NAME</button>
                    <button onclick="handleChange(2)" class="btn btn-email">EMAIL</button>
                </div>
                <div class="card box-card">
                    <div class="card-body">
                        <div id='userId'></div>
                        <div id='name'></div>
                        <div id='email'></div>
                        <div id='not_value'>
                            <div class="text-start">เลือกวิธีการเข้าสู่ระบบ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/EvaluationForm.js"></script>
</body>

</html>