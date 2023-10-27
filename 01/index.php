<?php
include('lib/convertjson.php');
include('lib/csv function.php');
include('lib/plaintext.php');
$jsonArray = readJsonFile('../01/data/jsoninfo.json');
// <?php print_r($jsonArray[0]['GreenRoof']['Applications'][0]['Name']); 
$csvArray = readCSVFile('../01/data/info.csv');
?>

<!DOCTYPE html>
<!-- http://localhost/ASE230-CompanyWebsite/01/index.php -->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Qexal - Responsive Bootstrap 5 Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top" id="navbar">
        <div class="container">
            <!-- LOGO -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">

                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- Navbar End -->

    <!-- Awards Start -->
    <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <span class="badge badge-soft-primary mb-4">Awards</span>
                        <h1 class="font-weight-semibold mb-4 hero-3-title">Awards</h1>
                        <p class="mb-5 text-muted subtitle w-75 mx-auto"> These are the awards the company has won.</p>
                        <br />
                        <ul class="text-muted"><?php print_r($award[0]); ?></p>

                        <div>
                            <button type="button" class="btn btn-primary rounded-pill me-2">Sign up for free</button>
                            <button type="button" class="btn btn-light rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#watchvideomodal">Play video <i class="ms-1 icon-sm align-middle" data-feather="play-circle"></i></button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content hero-modal-0 bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <video id="VisaChipCardVideo" class="w-100" controls="">
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>
    <!-- Hero End -->

    <!-- Services start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">GreenRoof</h2>
                    <p class="text-muted"><?php print_r($jsonArray[0]['GreenRoof']['Description']); ?></p>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="box"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][0]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][0]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="layers"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][1]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][1]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="server"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][2]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[0]['GreenRoof']['Applications'][2]['Description']); ?></p>
                            </div>
                        </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->

    <!-- Services start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">PureStream Filters</h2>
                    <p class="text-muted"><?php print_r($jsonArray[1]['PureStream Filters']['Description']); ?></p>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="box"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][0]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][0]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="layers"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][1]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][1]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="server"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][2]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[1]['PureStream Filters']['Applications'][2]['Description']); ?></p>
                            </div>
                        </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->

    <!-- Services start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">TerraCharge</h2>
                    <p class="text-muted"><?php print_r($jsonArray[2]['TerraCharge']['Description']); ?></p>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="box"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][0]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][0]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="layers"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][1]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][1]['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="server"></i>
                                </div>
                                <h4 class="mb-3 font-size-22"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][2]['Name']); ?></h4>
                                <p class="text-muted mb-0"><?php print_r($jsonArray[2]['TerraCharge']['Applications'][2]['Description']); ?></p>
                            </div>
                        </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->


    <!-- Footer Start -->
    <footer class="footer" style="background-image: url(images/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">

                    </div>
                </div>
                <!-- end col -->

                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <p class="text-white-50 f-15 mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Qexal. Design By Themesbrand
                            </p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
    </footer>
    <!-- Footer End -->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-white-balance-sunny mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- App Js -->
    <script src="js/app.js"></script>
</body>

</html>