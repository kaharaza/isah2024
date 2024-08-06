<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FULL PAPER</title>

    <?php include_once './../../inc/cdn.php' ?>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php include_once './../../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container  pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / FULL PAPER</span>
            </div>
            <h1 class="text-uppercase">Full paper submission</h1>
        </div>
    </div>
    <div class="container py-3">
        <div class="py-5">
            <div class="container">

                <div class="bg-light p-3 shadow">
                    <div class="col-lg-12">
                        <div class="row g-2">
                            <div class="col-lg-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <img src="https://he02.tci-thaijo.org/public/journals/470/homepageImage_en_US.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <img src="https://transparent-gorilla-f12.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2Fd8513b23-439c-4085-9934-a12d6918d934%2Fd2280386-0085-48f5-a6e3-5cbf838721f0%2FScreenshot_4.png?table=block&id=a09a907f-a1cc-4c1a-9f9c-a4388a16ea6f&spaceId=d8513b23-439c-4085-9934-a12d6918d934&width=570&userId=&cache=v2" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <p class="text-p" style="font-size: 20px;"> <strong>“Veterinary Integrative Sciences” (Vet. Integr. Sci.)</strong> is an open access journal indexed in Scopus. This journal is the official peer-reviewed online journal of the Faculty of Veterinary Medicine, Chiang Mai University, Thailand. The aim of the journal is to facilitate the publication of a wide range of high quality academic journals with an integration of various areas of animal and veterinary sciences including.</p>
                                            <ul class="li-style">
                                                <li>Animal sciences (Animal production, Animal biotechnology, Animal husbandry, Livestock industry)</li>
                                                <li>Biology of animals (Biology, Ecology, Nutrition and Genetics)</li>
                                                <li>Structure and function of animals (Biochemistry, Physiology, Anatomy and Histology)</li>
                                                <li>Pathogen and pathology in animal disease (Microbiology, Immunology, and Pathology)</li>
                                                <li>Veterinary medicine (Internal Medicine, Surgery, Obstetrics, Pharmacology and Epidemiology)</li>
                                            </ul>
                                            <p class="text-p" style="font-size: 20px;">Veterinary Integrated Sciences is an open access journal committed to ensuring that all submitted manuscripts are representative of ethical, transparent and peer-reviewed research work. Articles that are published in our journal are double-blind, peer-reviewed by at least two experts. Notably, the opinions of each author may not be agreed upon by the editorial board.</p>
                                            <h5><span style="color: #007095;"> Presenters with full papers (research works or case reports) are welcome to submit them directly to
                                                    the Veterinary Integrative Sciences for consideration. For Author Guidelines, please proceed to the</span>
                                                <a href="https://he02.tci-thaijo.org/index.php/vis/about/submissions" target="_blank"> <i class="fa-solid fa-link"></i> link</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3" style="display: none;">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-2 was-validated">
                                    <div class="col-lg-6 col-md-4 col-12">
                                        <label for="" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="txt_first_name" oninput="this.value = this.value.replace(/[^a-zA-Z.' ']/g, '')" required>
                                        <div class="invalid-feedback">Please enter your first name</div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-12">
                                        <label for="" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="txt_last_name" oninput="this.value = this.value.replace(/[^a-zA-Z.' ']/g, '')" required>
                                        <div class="invalid-feedback">Please enter your last name</div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-12">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="txt_email" required>
                                        <div class="invalid-feedback">Please enter your email</div>
                                    </div>

                                    <div class="col-lg-6 col-md-4 col-12">
                                        <label for="" class="form-label">Select category</label>
                                        <select class="form-select" id="select_category" onchange="setSeclectCategory(value)" required>
                                            <option selected disabled value="">Select...</option>
                                            <option value="Non-low-income">Non-low-income countries</option>
                                            <option value="Low-income">Low-income countries</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your category</div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-2 was-validated" id="country"></div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-danger text-uppercase w-100" onclick="backAbstractOnly()"> <i class="fa-solid fa-backward"></i> back to submit abstract only</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once './../../inc/footer.php' ?>
    <script src="js/full.js"></script>
</body>

</html>