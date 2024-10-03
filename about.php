<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us - Yuven Cargo</title>
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
        <img src="img/cargo-container.jpg" alt="">
        <div class="banner-text">
            <h1>About Us</h1>
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
    <!-- Main Content of the Page -->

    <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

   
    <!-- About Start -->


    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <!-- Our Industry -->
                <div class="col-md-4 text-center">
                    <div class="about-box p-4">
                        <h4 class="section-title mb-3">Our Industry</h4>
                        <p>As experienced freight forwarders, we act as shipping agents for our customers and organize the transportation of their goods. Our large carrier network provides us with a diverse set of services and access to any destination. Yuven World Cargo's team can organize your entire shipment and cater to your needs as a shipper. We make freight forwarding look easy so your destination feels much closer.</p>
                    </div>
                </div>
                <!-- Our Business -->
                <div class="col-md-4 text-center">
                    <div class="about-box p-4">
                        <h4 class="section-title mb-3">Our Business</h4>
                        <p>Yuven World Cargo is made up of a hardworking team that understands what it takes to be successful in this industry. We focus on our customers by asking the right questions and finding the perfect service to match their needs. Our years of experience give us a competitive edge in the shipping industry. We have developed an infrastructure that allows us to offer the most competitive rates in the market. Ultimately, whether you’re importing or exporting, we can ensure safe, efficient, and cost-effective delivery of your goods.</p>
                    </div>
                </div>
                <!-- Our Story -->
                <div class="col-md-4 text-center">
                    <div class="about-box p-4">
                        <h4 class="section-title mb-3">Our Story</h4>
                        <p>Yuven World Cargo has implemented new and improved shipping lanes, expanded their service offerings, and provided thousands of customers with expert service. In addition to developing World Cargo’s entire Ocean Freight division, we continue to develop the business’s focus on corporations and individuals. With an emphasis on service and experience, you can rest easy knowing you’re in good hands with Yuven World Cargo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

        <!-- Feature Start -->
        <div class="container-fluid overflow-hidden pt-5 px-lg-0">
        <div class="container feature pt-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">We Are Your Trusted Global Logistics Partner</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Worldwide Service</h5>
                            <p class="mb-0">Wherever your business takes you, our global logistics solutions ensure seamless and reliable transportation to any destination worldwide.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>On Time Delivery</h5>
                            <p class="mb-0">We prioritize punctuality with every shipment, ensuring your cargo reaches its destination on schedule, every time.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Telephone Support</h5>
                            <p class="mb-0">Our dedicated team is available around the clock to provide you with expert assistance and support whenever you need it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/truck.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        
    <!-- Feature End -->

    <style>
        .about-section {
            background-color: #f8f9fa;
            /* Hafif bir gri arka plan */
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
            /* Bootstrap ana renk */
            text-transform: uppercase;
            border-bottom: 2px solid var(--primary);
            display: inline-block;
            padding-bottom: 10px;
        }

        .about-box {
            background-color: #ffffff;
            /* Beyaz kart tasarımı */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Hafif gölge efekti */
            transition: transform 0.3s ease-in-out;
        }

        .about-box:hover {
            transform: translateY(-10px);
            /* Hover sırasında yükselen kart efekti */
        }

        .about-box p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            /* Hafif gri metin rengi */
        }

        @media (max-width: 768px) {
            .about-box {
                margin-bottom: 20px;
                /* Mobilde kutuların arasında boşluk bırak */
            }
        }
    </style>

<style>

</style>

    <!-- About End -->


   

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