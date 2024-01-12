<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content>
    <meta name="author" content>

    <title>Project - drowsiness detection</title>
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
                                <span class="d-block text-light">Machine Learning based drowsiness detection system</span>
                            </h2>
                        </div>
                    </div>


                </div>
                <!-- <div class="row">
                    <div class="col-12 h-100">
                        <div class="px-5 pt-lg-3 text-center my-auto">
                            <p class="lead mt-3 fs-4 text-secondary">In the dynamic convergence of fitness and technology, a groundbreaking project is
                                reshaping the world of indoor cycling. This initiative is centered on the development of a
                                cutting-edge virtual cycling platform that harnesses the power of 5G technology, offering
                                cyclists a competitive and immersive experience irrespective of their geographical locations.</p>
                        </div>
                    </div>
                </div> -->


        </header>



        <section class="rounded-3  mt-3 mb-5 p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="text-justify ">
                           
                            <p class="lead mb-3 text-secondary">This project was implemented as a way to detect the drowsiness issues of the drivers while they are driving. Even though applications to address those issues are already available with some of the vehicles from the leading automobile manufacturers in the world, their prices may exceed the affordable level of most Sri Lankans. That is where this application comes in handy and helps the local community to have a safe driving time.
                                First, the placement of the pupil of the eye is extracted using computer vision technologies. Then those images were fed into a machine learning model to detect the movements of the pupil whether the person is drowsy or not based on the opening of the eyes. This method works even if the person is wearing a pair of spectacles.
                                But this method won't be effective if the driver is wearing a pair of sunglasses. To address that issue, a body-tracking method was implemented. By using this method we can recognize the driver's head is failing down due to a sleepy situation.
                                As an additional aspect, we have implemented a speed detector for the vehicle using an accelerometer. With these implementations, it can predict the drowsy moments and warn it to the driver. Even if the driver neglects those warnings and still keeps driving under sleepy conditions, a message will be passed to one of the drivers closed one asking to request not to keep driving.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mb-2 mb-lg-3">


                    <div class="col-lg-6 col-12 text-justify">
                        <div class="row h-100">
                            <div class="col-12 my-auto p-3">
                                <video src="../Videos/drawp1.mp4" class="img-fluid w-100 object-fit-contain" controls type="video/mp4" autoplay></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-justify">
                        <div class="row h-100">
                            <div class="col-12 my-auto p-3">
                                <video src="../Videos/drawp2.mp4" class="img-fluid w-100 object-fit-contain" controls type="video/mp4" autoplay></video>
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