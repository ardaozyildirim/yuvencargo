<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>İletişim - Yuven Cargo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fontları -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Simge Font Stili -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Kütüphane Stil Dosyası -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Özelleştirilmiş Bootstrap Stil Dosyası -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Şablon Stil Dosyası -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" href="img/YUVEN WORLD CARGO COMPANY2_page-000.png"/>
</head>

<body>
    <!-- Spinner Başlangıç -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <!-- Spinner Bitiş -->

    <?php include 'header-tr.php'; ?>

    <div class="banner">
        <img src="img/cargoplane.jpg" alt="">
        <div class="banner-text">
            <h1>Bize Ulaşın</h1>
        </div>
    </div>

    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background-color: #000;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        @media (max-width: 768px) {
            .banner {
                height: 200px;
            }

            .banner-text h1 {
                font-size: 32px;
            }
        }
    </style>

    <!-- İletişim Başlangıç -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0 align-items-stretch">
                <!-- İletişim Bilgileri -->
                <div class="col-md-6 pe-lg-0 wow fadeInRight d-flex flex-column" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">İletişim Bilgileri</h6>
                    <h1 class="mb-4">Bizimle İletişime Geçin</h1>
                    <div class="bg-light p-4 flex-grow-1 d-flex flex-column justify-content-around">
                        <p class="mb-3 fs-5"><i class="fa fa-map-marker-alt text-primary me-3"></i>Rue Omar Kaddeh Imm. Le Montplaisir 2ème Étage B25 1073 Montplaisir, Tunus</p>
                        <p class="mb-3 fs-5"><i class="fa fa-envelope text-primary me-3"></i>info@yuvencargo.com</p>
                        <p class="mb-3 fs-5"><i class="fa fa-phone-alt text-primary me-3"></i>+90 000 00 00</p>
                        <p class="mb-0 fs-5"><i class="fa fa-clock text-primary me-3"></i>Pzt - Cum: 9AM - 6PM</p>
                    </div>
                </div>
                <!-- İletişim Formu -->
                <div class="col-md-6 contact-form wow fadeIn d-flex flex-column" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">İletişime Geçin</h6>
                    <h1 class="mb-4">Herhangi Bir Sorunuz İçin İletişime Geçin</h1>
                    <div class="bg-light p-4 flex-grow-1">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Adınız">
                                        <label for="name">Adınız</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="E-posta Adresiniz">
                                        <label for="email">E-posta Adresiniz</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Konu">
                                        <label for="subject">Konu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Buraya mesaj bırakın" id="message" style="height: 100px"></textarea>
                                        <label for="message">Mesaj</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Mesaj Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- İletişim Bitiş -->

    <!-- Geri Dön Butonu -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php include 'footer-tr.php' ?>

    <!-- JavaScript Kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Şablon JavaScript -->
    <script src="js/main.js"></script>
</body>

</html>


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










