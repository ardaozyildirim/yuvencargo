<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services - Yuven Cargo</title>
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

    <link rel="icon" href="img/YUVEN WORLD CARGO COMPANY2_page-000.png"/>
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
        <img src="img/rsz_8.jpg" alt="">
        <div class="banner-text">
            <h1>Our Services</h1>
        </div>
    </div>


    <style>
        .banner {
    position: relative;
    width: 100%;
    height: 400px; /* Banner height */
    background-color: #000; /* Fallback background color */
    overflow: hidden;
}

.banner img {
    width: 100%;
    height: 100%;
    object-fit:cover; /* Ensures the image covers the entire banner area */
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
        height: 200px; /* Daha küçük cihazlar için banner yüksekliğini ayarla */
    }
    .banner-text h1 {
        font-size: 32px; /* Başlık boyutunu küçült */
    }
    .banner-text p {
        font-size: 16px; /* Alt başlık boyutunu küçült */
    }
}

    </style>

    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <!-- Air Freight -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Air Cargo</h4>
                    <p class="service-text" data-expanded="false">When timing is your biggest priority, air cargo is your best shipping solution. As one of the primary import and export methods, air cargo connects the world faster than any other mode of transportation. Air cargo is usually limited to high-value or time-sensitive goods.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'air')"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            <!-- Ocean Freight -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Ocean Cargo</h4>
                    <p class="service-text" data-expanded="false">Ocean cargo accounts for 90% of imported and exported goods as it offers a variety of suites that cater to larger volume shipments. Navigating the ocean freight market requires an understanding of the companies that own the vessels and containers that can carry your cargo.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'ocean')"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            <!-- Ground Freight -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Ground Cargo</h4>
                    <p class="service-text" data-expanded="false">Yuven World Cargo’s ground cargo service provides transportation by truck or rail that is cost-effective and efficient. We can handle any request to help you get your shipment from point A to point B.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'ground')"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Service End -->

        <!-- Quote Start -->
        <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <p class="mb-5">Request a Free Quote Now and Discover Our Competitive Rates</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+90 000 00 00</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Cargo Type</option>
                                        <option value="1">Ocean Cargo</option>
                                        <option value="2">Roadway Cargo</option>
                                        <option value="3">Air Cargo</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->





    <div class="language-selector">
    <select id="language" onchange="changeLanguage()">
        <option value="en">English</option>
        <option value="tr">Türkçe</option>
    </select>
</div>

<script>
function changeLanguage() {
    const language = document.getElementById('language').value;
    let currentUrl = window.location.href;
    
    // Sayfa adını al
    let page = currentUrl.split('/').pop();
    
    // Eğer sayfa Türkçe ise "-tr" kontrolü yap
    if (page.includes('-tr')) {
        page = page.replace('-tr', ''); // Eğer Türkçe ise normal sayfaya döndür
    }
    
    if (language === 'tr') {
        let newPage = page.replace('.php', '-tr.php'); // Türkçe sürüme yönlendir
        window.location.href = newPage;
    } else {
        let newPage = page.replace('-tr.php', '.php'); // İngilizce sürüme yönlendir
        window.location.href = newPage;
    }

    // Seçilen dili tarayıcıda sakla
    document.cookie = "language=" + language + ";path=/";
}

// Sayfa yüklendiğinde daha önce seçilen dili ayarla
window.onload = function() {
    let language = getCookie("language") || "en"; // Varsayılan dil İngilizce
    document.getElementById('language').value = language;
}

// Çerezden dil seçimini almak için yardımcı fonksiyon
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>

<style>
    .language-selector {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 1000;
    background-color: #f8f9fa;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.language-selector select {
    padding: 5px;
    font-size: 16px;
    border: none;
    background-color: transparent;
}

@media (max-width: 768px) {
    .language-selector {
        left: 10px;
        bottom: 10px;
        padding: 8px;
    }
    
    .language-selector select {
        font-size: 14px;
        padding: 4px;
    }
}
</style>

<?php
// Eğer dil seçimi varsa, çerezden dili oku
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';

// Eğer dil Türkçe ise sayfa "-tr.php" sürümüne yönlendir
if ($language == 'tr' && !strpos($_SERVER['REQUEST_URI'], '-tr.php')) {
    $newUrl = str_replace('.php', '-tr.php', $_SERVER['REQUEST_URI']);
    header("Location: $newUrl");
    exit();
} elseif ($language == 'en' && strpos($_SERVER['REQUEST_URI'], '-tr.php')) {
    // Eğer dil İngilizce ise ve şu an Türkçe sayfadaysa, İngilizceye yönlendir
    $newUrl = str_replace('-tr.php', '.php', $_SERVER['REQUEST_URI']);
    header("Location: $newUrl");
    exit();
}
?>














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

    <script>
// İçerikleri değiştiren ve gizleyen/toggle eden fonksiyon
function toggleContent(button, serviceType) {
    let serviceTexts = {
        air: {
            short: "When timing is your biggest priority, air cargo is your best shipping solution. As one of the primary import and export methods, air cargo connects the world faster than any other mode of transportation. Air cargo is usually limited to high-value or time-sensitive goods.",
            long: "When timing is your biggest priority, air cargo is your best shipping solution. As one of the primary import and export methods, air cargo connects the world faster than any other mode of transportation. Air cargo is usually limited to high-value or time-sensitive goods. Nevertheless, Yuven World Cargo’s in-depth understanding of air cargo schedules and global cargo routes will help find the best option for your shipment. We can provide multiple options that prioritize speed or price and customize service depending on your needs."
        },
        ocean: {
            short: "Ocean cargo accounts for 90% of imported and exported goods as it offers a variety of suites that cater to larger volume shipments. Navigating the ocean freight market requires an understanding of the companies that own the vessels and containers that can carry your cargo.",
            long: "Ocean cargo accounts for 90% of imported and exported goods as it offers a variety of suites that cater to larger volume shipments. Navigating the ocean freight market requires an understanding of the companies that own the vessels and containers that can carry your cargo. Yuven World Cargo has connections with all major steamship lines, and we offer service to any major international port with smooth and effective routes. Whether you are looking to move internationally or ship commercial goods, shipping ocean freight with Yuven World Cargo is the right choice for you."
        },
        ground: {
            short: "Yuven World Cargo’s ground cargo service provides transportation by truck or rail that is cost-effective and efficient. We can handle any request to help you get your shipment from point A to point B.",
            long: "Yuven World Cargo’s ground cargo service provides transportation by truck or rail that is cost-effective and efficient. We can handle any request to help you get your shipment from point A to point B. Whether you’re moving locally or internationally, our team can help organize the transfer of your goods. Our reliable network of professionals can provide service cross province, cross country, or across borders. No location is out of reach."
        }
    };

    let pElement = button.parentElement.querySelector('.service-text');
    let isExpanded = pElement.getAttribute('data-expanded') === 'true';  // İçerik genişletilmiş mi kontrol et

    // İçeriğin genişletilip genişletilmediğini kontrol edip güncelleme
    if (isExpanded) {
        pElement.innerText = serviceTexts[serviceType].short;  // Kısa metni göster
        pElement.setAttribute('data-expanded', 'false');       // Genişletilmediğini belirt
        button.querySelector("span").innerText = "Read More";  // Buton metnini güncelle
    } else {
        pElement.innerText = serviceTexts[serviceType].long;   // Uzun metni göster
        pElement.setAttribute('data-expanded', 'true');        // Genişletildiğini belirt
        button.querySelector("span").innerText = "Read Less";  // Buton metnini güncelle
    }
}
</script>

</body>

</html>