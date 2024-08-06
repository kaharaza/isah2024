<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROGRAM</title>

    <?php include_once './../inc/cdn.php' ?>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include_once './../inc/navbar.php' ?>
    <div class="bg-color-b7854a">
        <div class="container pre-padding">
            <div class="bangTag">
                <a href="<?php echo $url ?>">HOME</a> <span> / PROGRAM</span>
            </div>
            <h1 class="text-uppercase">PROGRAM</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-2">
            <div class="col-lg-8  abstract-title">
                <h2> Tentative PROGRAMME</h2>

                <div class="row g-2" id="program_isah">
                </div>
            </div>
            <div class="col-lg-4 border-start border-2 abstract-title">
                <h2>Topics</h2>
                <div class="row g-2">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Antimicrobial Resistance
                                </span>
                                <ul class="abstract-topic">
                                    <li>Transmission along the food and feed production chain</li>
                                    <li>Antibiotic stewardship (human vs. veterinary medicine)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10 ">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Sustainable Animal Production & Environmental Health
                                </span>
                                <ul class="abstract-topic">
                                    <li>Environmental aspects of animal production (manure, aerosols, etc.)</li>
                                    <li>Outdoor farming</li>
                                    <li>Insect farming (for feed and food)</li>
                                    <li>Fish farming</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10 ">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Disaster Management and Epidemics/Pandemics Preparedness
                                </span>
                                <ul class="abstract-topic">
                                    <li>Epidemic and pandemic preparedness</li>
                                    <li>Management/control of epizootics</li>
                                    <li>Effects of climate change on (animal) health</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10 ">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Animal Welfare
                                </span>
                                <ul class="abstract-topic">
                                    <li>Animal welfare in developing countries</li>
                                    <li>Target conflicts: animal welfare, food safety, environmental protection</li>
                                    <li>Implementation strategies of new animal welfare legislation</li>
                                    <li>Animal welfare during transport and slaughter</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10 ">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Innovation Technology for Animal and Food Production
                                </span>
                                <ul class="abstract-topic">
                                    <li>Disinfection and decontamination strategies/techniques</li>
                                    <li>Feed additives</li>
                                    <li>Novel keeping systems in animal husbandry</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-body h-100 pl-10 ">
                                <span class="abstract-subject">
                                    <i class="fa-regular fa-circle"></i> Infectious and Transboundary Diseases <br> <span style="padding-left: 20px;">e.g.</span>
                                </span>
                                <ul class="abstract-topic">
                                    <li>Zoonotic diseases</li>
                                    <li>Non-zoonotic infectious animal diseases</li>
                                    <li>Avian influenza</li>
                                    <li>African swine fever (ASF)</li>
                                    <li>Lumpy skin disease</li>
                                    <li>Streptococcus suis infections</li>
                                    <li>Anthrax</li>
                                    <li>Rabies</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php include_once './../inc/footer.php' ?>
    <script src="js/program.js"></script>
</body>

</html>