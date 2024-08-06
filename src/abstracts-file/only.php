<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abstract submission</title>

    <?php include_once './../../inc/cdn.php' ?>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php include_once './../../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container  pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / ABSTRACT ONLY</span>
            </div>
            <h1 class="text-uppercase">Abstract submission</h1>
        </div>
    </div>
    <div class="container py-3">
        <div class="py-5">
            <div class="bg-light p-3 shadow">
                <div class="only-abstract-text-color-title">Abstract Submission Guidelines</div>
                <div class="col-lg-12">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="only-abstract-text-color">1. Overview:</div>
                                    <p class="text-p">Participants are invited to submit abstracts for presentations at the ISAH & SEAOHUN International Conference 2024. These abstracts should provide a brief and comprehensive summary of the research or topic to be presented.</p>
                                    <div class="only-abstract-text-color">2. Content Requirements:</div>
                                    <ul class="only-abstract-text-style">
                                        <li><span>Title: </span>
                                            <font class="text-p">Concise and reflective of the main theme.</font>
                                        </li>
                                        <li><span>Authors: </span>
                                            <font class="text-p">List all authors, including affiliations and contact information.</font>
                                        </li>
                                        <li><span>Objective: </span>
                                            <font class="text-p">Clearly state the purpose of the research or the question being addressed.</font>
                                        </li>
                                        <li><span>Methods: </span>
                                            <font class="text-p">Briefly describe the methodology used in your research or analysis.</font>
                                        </li>
                                        <li><span>Results: </span>
                                            <font class="text-p">Summarize the main findings (if applicable).</font>
                                        </li>
                                        <li><span>Conclusions: </span>
                                            <font class="text-p">Offer a brief summary of the implications of the findings.</font>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color">3. Format:</div>
                                    <ul class="only-abstract-text-style">
                                        <li><span>Length: </span>
                                            <font class="text-p">Abstracts should not exceed 300 words.</font>
                                        </li>
                                        <li><span>Language: </span>
                                            <font class="text-p">All abstracts must be written in English.</font>
                                        </li>
                                        <li><span>Font and Spacing: </span>
                                            <font class="text-p">Use a standard font, such as Times New Roman, 12-point size, single-spaced.</font>
                                        </li>
                                        <li><span>File Format: </span>
                                            <font class="text-p">Submit in a Word format.</font>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="only-abstract-text-color">4. Submission Process:</div>
                                    <ul class="only-abstract-text-style">
                                        <li>
                                            <font class="text-p">Abstracts should be submitted electronically via</font>
                                            <font class="text-danger">the link</font>
                                        </li>
                                        <li>
                                            <font class="text-p">Ensure that you receive a submission confirmation email.</font>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color">5. Review and Selection:</div>
                                    <ul class="only-abstract-text-style">
                                        <li>
                                            <font class="text-p">All abstracts will undergo a peer-review process.</font>
                                        </li>
                                        <li>
                                            <font class="text-p">Authors of accepted abstracts will be notified by email.</font>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color">6. Presentation at the Conference:</div>
                                    <ul class="only-abstract-text-style">
                                        <li>
                                            <font class="text-p">Selected abstracts will be presented in either oral or poster sessions.</font>
                                        </li>
                                        <li>
                                            <font class="text-p">The presenter must register and make a payment to complete the process.</font>
                                        </li>
                                        <li>
                                            <font class="text-p">Details regarding presentation format and scheduling will be provided upon acceptance.</font>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color">7. Deadlines:</div>
                                    <ul class="only-abstract-text-style">
                                        <li>
                                            <font class="text-p">Abstract submission deadline <span class="text-danger fw-bold">- EXTENSION: 15 May 2024.</span> </font>
                                        </li>
                                        <li>
                                            <font class="text-p">Notification of acceptance: 31 May 2024.</font>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color">8. Contact Information:</div>
                                    <ul class="only-abstract-text-style">
                                        <li>
                                            <font class="text-p">For any queries, please contact </font> <a href="mailto:vphcap@cmu.ac.th">vphcap@cmu.ac.th</a>
                                        </li>
                                    </ul>
                                    <div class="only-abstract-text-color"><i class="fa-solid fa-cloud-arrow-down"></i> Download abstract template: <small class="text-danger">If you encounter issues downloading the abstract template, please press Ctrl+F5 to refresh the web page.</small></div>
                                    <div class="btn-class mt-2">
                                        <button class="btn" onclick="downloadTemplate()">
                                            Download abstract template: Click <i class="fa-regular fa-file-word"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2"></div>
                <div class="col-lg-12" style="display: none;">
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
                                <button class="btn btn-danger text-uppercase w-100" onclick="backFullPaper2()"> <i class="fa-solid fa-backward"></i> back to submit full paper</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once './../../inc/footer.php' ?>
    <script src="js/only.js"></script>
</body>

</html>