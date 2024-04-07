<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content>
    <meta name="author" content>

    <title>Project - Hand Gesture project</title>
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
                            <a class="nav-link active" href="../raspberryPi.php">Raspberry Pi Community</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="../communityFb.php">Community Facebook
                                Page</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="../softSkills.php">Soft Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../projects.php">Projects</a>
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
                                <span class="d-block text-light">Hand gesture-based electric equipment controlling mechanism</span>
                            </h2>
                        </div>
                    </div>


                </div>



        </header>



        <section class="rounded-3  mt-3 mb-5 p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="text-justify ">

                            <p class="lead mb-3 text-secondary">The intention behind this project was to help disabled persons have easy access to control the electric equipment since that task may be challenging for them. This implementation was based on image recognition techniques to identify the hand gestures of the user. Then those gestures will be processed through a Raspberry-based machine learning model. Then those processed signals will be passed to a PCB which will control the electric appliances accordingly.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mb-2 mb-lg-3">


                    <div class="col-lg-6 offset-lg-3 col-12 text-justify">
                        <div class="row h-100">
                            <div class="col-12 my-auto p-3">
                                <video src="../Videos/Hand_Gesture.MOV" class="img-fluid w-100 object-fit-contain" muted controls type="video/mp4" autoplay></video>
                            </div>
                        </div>
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