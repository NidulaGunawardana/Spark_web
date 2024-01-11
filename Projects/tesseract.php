<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content>
    <meta name="author" content>

    <title>Project - Tesseract</title>
    <link rel="icon" href="../images/tit.png" />
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/slick.css" />

    <link href="../css/tooplate-little-fashion.css" rel="stylesheet">
    <link href="../css/hederCoustom.css" rel="stylesheet">


</head>

<body>

    <main>

        <nav class="navbar sticky-top navbar-expand-lg start-header start-style">
            <div class="container sticky-top mt-3 mb-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <a href="index.php"><img src="../images/Spark light.png" alt="Spark logo" style="height: 50px;"></a>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="../raspberryPi.php">Raspberry Pi Community</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="../communityFb.php">Community Facebook
                                Page</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="../softSkills.php">Soft Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../projects.php">Projects</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <header class="site-header section-padding-img site-header-image mt-0 tile-color pb-2">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <div class="row h-100">
                            <h2 class="my-auto">
                                <span class="d-block text-light">Tesseract - Medical Waste Segregation Using AI</span>
                            </h2>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-12 h-100">
                        <div class="px-5 pt-lg-3 text-center my-auto">
                            <p class="lead mt-3 fs-4 text-secondary">Ineffective waste management poses a worldwide threat
                                to human health and environmental sustainability, encompassing home, business, hospital,
                                and municipal waste. Among these, improper hospital waste disposal stands out due to its
                                severe consequences for public health and the environment.</p>
                        </div>
                    </div>
                </div>


        </header>



        <section class="testimonial section-padding pt-2">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Challenges in Hospital Waste Management</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">Improper hospital waste disposal leads to increased health risks, occupational hazards,
                            infection transmission, and environmental damage. The environmental toll extends to climate
                            change through ineffective waste disposal techniques, such as open burning and landfilling,
                            releasing significant greenhouse gases. Incorrect disposal of medical waste endangers land and
                            water bodies, contaminating essential resources.</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Introducing the Solution</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">In response to these challenges, Team Tesseract proposes a comprehensive waste
                            management solution that leverages AI, machine vision, deep learning, and cutting-edge
                            technologies. The project aims to automate the classification and segregation of various types
                            of hospital waste, ensuring the safety of healthcare workers, patients, and the environment.</p>

                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Seven Primary Areas of Development</h4>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item text-secondary lead">Data collection and preparation</li>
                            <li class="list-group-item text-secondary lead">Training the AI model</li>
                            <li class="list-group-item text-secondary lead">Machine vision and image analysis</li>
                            <li class="list-group-item text-secondary lead">Customization and adaptability</li>
                            <li class="list-group-item text-secondary lead">Integration with existing systems</li>
                            <li class="list-group-item text-secondary lead">Continuous improvement and monitoring</li>
                        </ol>

                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">AI Model Utilization</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">The team utilizes YOLOv5 as the object detection framework, focusing on reducing model size
                            and improving performance. The algorithm provides advanced anchor box mechanism, model
                            scaling, and an improved training process.</p>

                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Dataset and Training</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">The team utilizes YOLOv5 as the object detection framework, focusing on reducing model size
                            and improving performance. The algorithm provides advanced anchor box mechanism, model
                            scaling, and an improved training process.</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Robotic Arm-Based System</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">A robotic arm efficiently carries out the waste sorting process using AI and machine vision
                            technology. The disposed garbage is scanned, waste is separated into smaller parts, and each
                            item is placed into its respective compartment by the robot arm. The system incorporates a
                            sterilization process for hygiene and cleanliness standards.</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Smart Bin Technology</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">The smart bin monitors and sorts waste at the time of disposal, using AI for efficient and
                            accurate sorting. The system employs AI and computer vision to sort waste into various
                            categories, and robotic automation places the waste into its respective compartments. When a
                            compartment is full, the system sends a notification for user attention.</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Environmental and Social Impact</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">The integration of AI-based garbage separation systems into hospital waste management
                            contributes to improved waste segregation, reduced contamination, and diminished
                            environmental pollution. AI enhances recycling rates and ensures the proper handling of
                            hazardous waste, promoting sustainable practices. From a social perspective, AI systems
                            enhance occupational safety for healthcare workers, improving working conditions and
                            preventing contamination.</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <h4 class="text-white">Conclusion</h4>
                        <p class="lead mb-3 text-secondary my-auto text-justify">In essence, Team Tesseract's AI-based garbage separation system plays a pivotal role in
                            promoting efficient waste management, safeguarding the environment, improving occupational
                            safety, and enhancing public health and community well-being.</p>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.html">SPARK</a> Challenge</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2023 <strong>ENTC</strong></p>
                    <br>
                    <p class="copyright-text">Designed by <a href="https://www.linkedin.com/in/nidula-gunawardana-22819a1b3/" target="_blank">Nidula Gunawardana</a></p>
                </div>

                <div class="col-lg-5 col-8">
                    <h5 class="text-white mb-3">Sitemap</h5>

                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="../index.php" class="footer-menu-link">Home</a></li>

                        <li class="footer-menu-item"><a href="../raspberryPi.php" class="footer-menu-link">Raspberry Pi Community</a></li>

                        <li class="footer-menu-item"><a href="../communityFb.php" class="footer-menu-link">Community Facebook Page</a></li>

                        <li class="footer-menu-item"><a href="../softSkills.php" class="footer-menu-link">Soft Skills</a></li>

                        <li class="footer-menu-item"><a href="../projects.php" class="footer-menu-link">Projects</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>

                    <ul class="social-icon">

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-skype"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/Headroom.js"></script>
    <script src="../js/jQuery.headroom.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>