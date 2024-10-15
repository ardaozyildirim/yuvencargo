<!DOCTYPE html>
<html lang="tr">

<head>
    <?php include 'head.php' ?>
    <meta charset="utf-8">
    <title>Hizmetlerimiz - Yuven Cargo</title>
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

    <?php include 'header.php'; ?>

    <div class="banner">
        <img src="img/rsz_8.jpg" alt="">
        <div class="banner-text">
            <h1>Hizmetlerimiz</h1>
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
    object-fit:cover;
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

    <!-- Hizmetler Başlangıç -->
    <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Hizmetlerimiz</h6>
            <h1 class="mb-5">Hizmetlerimizi Keşfedin</h1>
        </div>
        <div class="row g-4">
            <!-- Hava Taşımacılığı -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Hava Kargosu</h4>
                    <p class="service-text" data-expanded="false">Zaman en büyük önceliğiniz olduğunda, hava kargosu en iyi nakliye çözümünüzdür. Hava kargosu, dünya çapında daha hızlı bağlantı sağlar, genellikle yüksek değerli veya zaman açısından hassas ürünler için tercih edilir.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'air')"><i class="fa fa-arrow-right"></i><span>Devamını Oku</span></a>
                </div>
            </div>
            <!-- Deniz Taşımacılığı -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Deniz Kargosu</h4>
                    <p class="service-text" data-expanded="false">Deniz kargosu, ithalat ve ihracatın %90'ını oluşturur. Büyük hacimli gönderilere uygun çözümler sunar ve deniz taşımacılığında deneyim gerektirir.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'ocean')"><i class="fa fa-arrow-right"></i><span>Devamını Oku</span></a>
                </div>
            </div>
            <!-- Kara Taşımacılığı -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Kara Kargosu</h4>
                    <p class="service-text" data-expanded="false">Yuven World Cargo’nun kara kargo hizmeti, maliyet açısından etkili ve verimli bir şekilde kamyon veya trenle taşımacılık sağlar.</p>
                    <a class="btn-slide mt-2" href="javascript:void(0);" onclick="toggleContent(this, 'ground')"><i class="fa fa-arrow-right"></i><span>Devamını Oku</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Hizmetler Bitiş -->

        <!-- Teklif Başlangıç -->
        <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Teklif Alın</h6>
                    <h1 class="mb-5">Ücretsiz Teklif İsteyin!</h1>
                    <p class="mb-5">Şimdi Ücretsiz Teklif Alın ve Rekabetçi Fiyatlarımızı Keşfedin</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Herhangi bir sorunuz için arayın!</h6>
                            <h3 class="text-primary m-0">+90 000 00 00</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Adınız" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="E-posta Adresiniz" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Telefon Numaranız" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Kargo Türünü Seçin</option>
                                        <option value="1">Deniz Kargosu</option>
                                        <option value="2">Kara Kargosu</option>
                                        <option value="3">Hava Kargosu</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Özel Not"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Teklif Bitiş -->


    <!-- Geri Dön Butonu -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


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

<script>
// İçerikleri değiştiren ve gizleyen/toggle eden fonksiyon
function toggleContent(button, serviceType) {
    let serviceTexts = {
        air: {
            short: "Zaman en büyük önceliğiniz olduğunda, hava kargosu en iyi nakliye çözümünüzdür. Hava kargosu, dünya çapında daha hızlı bağlantı sağlar ve genellikle yüksek değerli veya zaman açısından hassas mallar için tercih edilir.",
            long: "Zaman en büyük önceliğiniz olduğunda, hava kargosu en iyi nakliye çözümünüzdür. Hava kargosu, dünya çapında daha hızlı bağlantı sağlar ve genellikle yüksek değerli veya zaman açısından hassas mallar için tercih edilir. Ancak, Yuven World Cargo’nun hava kargo programları ve küresel kargo rotaları konusundaki derin bilgisi, sevkiyatınız için en iyi seçeneği bulmanıza yardımcı olacaktır. Hız veya fiyat önceliklerinize göre birden fazla seçenek sunabilir ve hizmeti ihtiyaçlarınıza göre özelleştirebiliriz."
        },
        ocean: {
            short: "Deniz kargosu, ithalat ve ihracatın %90'ını oluşturur ve daha büyük hacimli gönderilere uygun çeşitli çözümler sunar. Deniz taşımacılığı pazarında gezinmek, gemilere ve konteynerlere sahip şirketleri anlamayı gerektirir.",
            long: "Deniz kargosu, ithalat ve ihracatın %90'ını oluşturur ve daha büyük hacimli gönderilere uygun çeşitli çözümler sunar. Deniz taşımacılığı pazarında gezinmek, gemilere ve konteynerlere sahip şirketleri anlamayı gerektirir. Yuven World Cargo, tüm büyük denizcilik hatlarıyla bağlantılara sahiptir ve dünya çapındaki tüm büyük limanlara sorunsuz ve etkili rotalar sunar. İster uluslararası taşınmayı, ister ticari mallar göndermeyi düşünün, Yuven World Cargo ile deniz taşımacılığı sizin için doğru seçim olacaktır."
        },
        ground: {
            short: "Yuven World Cargo'nun kara kargo hizmeti, kamyon veya trenle maliyet açısından etkili ve verimli taşımacılık sağlar. Sevkiyatınızı A noktasından B noktasına ulaştırmak için her türlü talebi karşılayabiliriz.",
            long: "Yuven World Cargo'nun kara kargo hizmeti, kamyon veya trenle maliyet açısından etkili ve verimli taşımacılık sağlar. Sevkiyatınızı A noktasından B noktasına ulaştırmak için her türlü talebi karşılayabiliriz. İster yerel ister uluslararası taşınıyor olun, ekibimiz mallarınızın transferini organize etmeye yardımcı olabilir. Güvenilir profesyonel ağımız, şehirlerarası, eyaletlerarası veya sınır ötesi hizmet sunabilir. Hiçbir yer ulaşamayacağımız kadar uzak değil."
        }
    };

    let pElement = button.parentElement.querySelector('.service-text');
    let isExpanded = pElement.getAttribute('data-expanded') === 'true';  // İçerik genişletilmiş mi kontrol et

    // İçeriğin genişletilip genişletilmediğini kontrol edip güncelleme
    if (isExpanded) {
        pElement.innerText = serviceTexts[serviceType].short;  // Kısa metni göster
        pElement.setAttribute('data-expanded', 'false');       // Genişletilmediğini belirt
        button.querySelector("span").innerText = "Devamını Oku";  // Buton metnini güncelle
    } else {
        pElement.innerText = serviceTexts[serviceType].long;   // Uzun metni göster
        pElement.setAttribute('data-expanded', 'true');        // Genişletildiğini belirt
        button.querySelector("span").innerText = "Daha Az Göster";  // Buton metnini güncelle
    }
}
</script>


</html>

<div class="language-selector">
    <select id="language" onchange="changeLanguage()">
        <option value="en">English</option>
        <option value="tr">Türkçe</option>
    </select>
</div>

<?php include 'footer.php'; ?>

<?php include 'langswitch.php' ?>