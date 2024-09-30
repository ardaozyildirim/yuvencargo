<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact - Yuven Cargo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include 'header.php'; ?>

    <div class="banner">
        <img src="img/cargoplane.jpg" alt="">
        <div class="banner-text">
            <h1>Contact Us</h1>
        </div>
    </div>


    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            /* Banner height */
            background-color: #000;
            /* Fallback background color */
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the image covers the entire banner area */
            opacity: 40%;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 48px;
            font-weight: bold;
            color: white;
        }

        .banner-text p {
            margin: 10px 0 0;
            font-size: 20px;
        }

        @media (max-width: 768px) {
            .banner {
                height: 200px;
                /* Daha küçük cihazlar için banner yüksekliğini ayarla */
            }

            .banner-text h1 {
                font-size: 32px;
                /* Başlık boyutunu küçült */
            }

            .banner-text p {
                font-size: 16px;
                /* Alt başlık boyutunu küçült */
            }
        }
    </style>

    <!-- Contact Start -->

    <div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0 align-items-stretch"> <!-- align-items-stretch eklendi -->
            <!-- İletişim bilgileri kısmı -->
            <div class="col-md-6 pe-lg-0 wow fadeInRight d-flex flex-column" data-wow-delay="0.1s"> <!-- d-flex flex-column eklendi -->
                <h6 class="text-secondary text-uppercase">Contact Information</h6>
                <h1 class="mb-4">Get In Touch With Us</h1>
                <div class="bg-light p-4 flex-grow-1 d-flex flex-column justify-content-around"> <!-- flex-grow-1 eklendi -->
                    <p class="mb-3 fs-5"><i class="fa fa-map-marker-alt text-primary me-3"></i>Rue Omar Kaddeh Imm. Le Montplaisir 2ème Étage B25 1073 Montplaisir, Tunisie</p>
                    <p class="mb-3 fs-5"><i class="fa fa-envelope text-primary me-3"></i>info@yuvencargo.com</p>
                    <p class="mb-3 fs-5"><i class="fa fa-phone-alt text-primary me-3"></i>+90 000 00 00</p>
                    <p class="mb-0 fs-5"><i class="fa fa-clock text-primary me-3"></i>Mon - Fri: 9AM - 6PM</p>
                </div>
            </div>
            <!-- Contact form kısmı -->
            <div class="col-md-6 contact-form wow fadeIn d-flex flex-column" data-wow-delay="0.1s"> <!-- d-flex flex-column eklendi -->
                <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
                <div class="bg-light p-4 flex-grow-1"> <!-- flex-grow-1 eklendi -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Contact End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php include 'footer.php' ?>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>