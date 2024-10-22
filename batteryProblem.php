
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AOR Fixman - Battery Problem</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Updated Font Awesome Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        /* Custom Styles */
        .section-title {
            margin-bottom: 40px;
        }

        .section-title h1 {
            font-size: 2.5rem;
            color: #AB7442;
            font-weight: 700;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #555;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            font-size: 1.1rem;
            color: #333;
        }

        .service-list li:last-child {
            border-bottom: none; /* Remove last border */
        }

        .img-fluid {
            border-radius: 10px;
        }

        .footer {
            background-color: #343a40;
            padding: 40px 0;
        }

        .footer .text-light {
            color: #fff;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            text-decoration: underline;
        }
              /* Default link style */
.nav-item.nav-link {
    color: #000; /* Default link color */
    padding: 10px 15px; /* Padding for links */
    text-decoration: none; /* Remove underline */
}

/* Active link style */
.nav-item.nav-link.active {
    color: #d19a6c; /* Change text color for active link to #d19a6c */
    background-color: transparent; /* Ensure background is transparent */
    font-weight: bold; /* Optional: make it bold for emphasis */
}

/* Remove hover background */
.nav-item.nav-link:hover {
    background-color: transparent; /* Maintain clear background on hover */
}

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>No 3, Tepi Petronas Alor Merah, Jalan Anak Bukit</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sat: 10.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>017-523 9173</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/alorsetarrepairiphone?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.tiktok.com/@aorfixman?_t=8pvTpNQNDpy&_r=1"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.wasap.my/60175239173"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">AOR Fixman</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link active">Services</a>
                <a href="project.html" class="nav-item nav-link">Projects</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="quote.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url('img/header.png'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Battery Problem</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Battery Problem</li>
            </ol>
        </nav>
    </div>
</div>
    <!-- Page Header End -->

    <!-- Battery Problem Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Battery Problem</h1>
                <p>Our expert technicians provide reliable and efficient battery replacement services to ensure your device runs smoothly.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <h4 class="mb-3">Battery Repair Services We Offer:</h4>
                    <ul class="service-list">
                        <li>Battery Replacement</li>
                        <li>Battery Calibration</li>
                        <li>Charging Port Repair</li>
                        <li>Battery Health Check</li>
                        <li>And more....</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="img/iphoneBattery.png" class="img-fluid" alt="Battery Repair">
                </div>
            </div>
        </div>
    </div>
    <!-- Battery Problem Section End -->

    <!-- Contact Me Now Section Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <h2>Contact Us Now!</h2>
            <p>If you have any questions or need assistance, feel free to reach out to us via WhatsApp.</p>
            <a href="https://www.wasap.my/60175239173" class="btn btn-primary py-2 px-4" target="_blank">WhatsApp Us</a>
        </div>
    </div>
    <!-- Contact Me Now Section End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No 3, Tepi Petronas Alor Merah, Jalan Anak Bukit, Alor Setar, Kedah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>017-523 9173</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>fixmanhq@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/alorsetarrepairiphone?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@aorfixman?_t=8pvTpNQNDpy&_r=1"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.wasap.my/60175239173"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="lcdProblem.php">LCD Problem</a>
                    <a class="btn btn-link" href="batteryProblem.php">Battery Problem</a>
                    <a class="btn btn-link" href="chargingPort.php">Charging Port Problem</a>
                    <a class="btn btn-link" href="waterDamage.php">Water Damage</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="service.html">Our Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Stay updated with our latest services and offers.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <!-- Script to toggle custom issue input -->
    <script>
        function toggleCustomIssue() {
            var issueSelect = document.getElementById('issue');
            var customIssueDiv = document.getElementById('customIssueDiv');

            // Show custom issue field if "Other" is selected
            if (issueSelect.value === "Other") {
                customIssueDiv.style.display = 'block';
            } else {
                customIssueDiv.style.display = 'none';
            }
        }
    </script>
</body>

</html>