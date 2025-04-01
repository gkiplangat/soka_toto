<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Soka Toto Muda Initiative Trust</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name=" description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" href="img/sk_logo.jpg" type="image/x-icon" />
    <!-- For better browser support, this line important -->
    <link rel="shortcut icon" href="img/sk_logo.png" type="image/x-icon" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #FFA500;
        font-size: 60px;
        color: #001D23;
        border-radius: 50%;
        border: none;
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
    }

    .play-btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    /* Hide the button when video is playing */
    .hidden {
        display: none;
    }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 bg-primary" data-wow-delay="0.1s">
        <div class="top-bar text-white row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-8 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>105-00508 NAIROBI.

                    KENYA</small>
                <small class="ms-4 fs-6"><i class="fa fa-envelope me-2"></i>stmitrust@gmail.com</small>
                <small class="ms-4 fs-6"><i class="fa fa-envelope me-2"></i>+254 728 274304</small>
            </div>
            <div class="col-lg-4 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/sk_logo.png" alt="" width="120">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index"
                        class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index' ? 'active' : ''; ?>">Home</a>
                    <a href="about"
                        class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about' ? 'active' : ''; ?>">About</a>

                    <!--
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">FLY-M Arms</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">FLY-M Alumni</a>
                        <a href="#" class="dropdown-item">FLY-M Breach Repairers</a>
                        <a href="#" class="dropdown-item">FLY-M Junior Radicals</a>
                        <a href="#" class="dropdown-item">FLY-M Lambs</a>
                        <a href="#" class="dropdown-item">MTC & Tvets</a>
                    </div>
                </div>-->

                    <a href="news"
                        class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'news' ? 'active' : ''; ?>">News</a>
                    <a href="gallery"
                        class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">Gallery</a>
                    <a href="contact"
                        class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact
                        Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn py-2 px-3 text-white " href="https://www.mchanga.africa/fundraiser/107130">
                        Donate
                        <div class="d-inline-flex btn-sm-square border border-dark rounded-circle ms-2">
                            <i class="fa fa-arrow-right text-white"></i>
                        </div>
                    </a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->