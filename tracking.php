<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php' ?>
    <meta charset="utf-8">
    <title>Tracking - Yuven Cargo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transmena Shipping Company</title>
<link rel="stylesheet" href="./tracking_files/components.css">
<link rel="stylesheet" href="./tracking_files/icons.css">
<link rel="stylesheet" href="./tracking_files/responsee.css">
<link rel="stylesheet" href="./tracking_files/owl.carousel.css">
<link rel="stylesheet" href="./tracking_files/owl.theme.css">

<link rel="icon" href="img/YUVEN WORLD CARGO COMPANY2_page-000.png"/>


   <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="./tracking_files/template-style.css">
<link href="./tracking_files/css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./tracking_files/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="./tracking_files/jquery-ui.min.js"></script>
<script type="text/javascript" src="./tracking_files/validation.js"></script>
<script type="text/javascript" src="./tracking_files/sweetalert.min.js"></script>


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

<?php include 'header.php' ?>

    <!-- PAGE CONTENT STARTING -->




    <?php

if(isset($_GET['message']) & isset($_GET['error']))
{
echo '<script> swal({
title: "Error!",
text: "This Tracking Code is Not Valid.",
icon: "warning",}); 
</script>';
}

?>



<!-- MAIN -->
<main role="main">
<!-- Content -->
<div class="container">

    <div class="login-box">
        <h2 class="blbookingno">Global Package Tracking</h2>
        <p style="color: #ffffff; font-size: 14px; margin-bottom: 20px;">Easily track your packages worldwide and stay updated on every step of your delivery journey.</p>
        <form method="POST" action="TrackingFormHandler.php">
            <div class="user-box">
                <input type="text" name="trackingCode" required="" placeholder="Enter tracking number">
            </div>
            <a class="aclass">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button class="animated-border-button" style="position: relative; background: #f83c44;border: none;font-size: 16pxcolor: white padding: 10px 20px;border-radius: 5px;  cursor:pointer overflow:hidden">Track Your Package</button>
            </a>
        </form>
    </div>
</div>


<style>
    body {
        background-color: rgba(255, 85, 0, 0.07);
}
.login-box {
    width: 500px;
    padding: 40px;
    position: relative;
    margin: 100px auto;
    background: rgba(0, 0, 0, 0.7);
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    color: white;
    font-family: 'Arial', sans-serif;
}

.blbookingno {
    margin: 0 0 10px;
    padding: 0;
    font-size: 26px;
    color: #fff;
}

.user-box {
    position: relative;
    margin-bottom: 20px;
}

.user-box input {
    width: 100%;
    padding: 15px;
    font-size: 16px;
    color: #333;
    border: none;
    border-radius: 5px;
    background-color: #f0f0f0;
}

.aclass {
    display: inline-block;
    background-color: transparent;
    color: #e15361;
    font-size: 16px;
    margin-top: 20px;
}

button {
    background: none;
    border: none;
    font-size: 16px;
    color: white;
    cursor: pointer;
    padding: 10px 20px;
    background-color: #f83c44;
    border-radius: 5px;
}


</style>


<div class="language-selector">
    <select id="language" onchange="changeLanguage()">
        <option value="en">English</option>
        <option value="tr">Türkçe</option>
    </select>
</div>
<?php include 'footer.php' ?>

<script>
// Sayfa yüklendiğinde dil seçimini otomatik olarak ayarla
window.onload = function() {
    // Mevcut URL'yi al
    const currentUrl = window.location.pathname;

    // Eğer URL '/tr/' içeriyorsa, Türkçe seçili olsun
    if (currentUrl.includes('/tr/')) {
        document.getElementById('language').value = 'tr';
    } else {
        document.getElementById('language').value = 'en';
    }
}

// Dil değiştiğinde çalışacak fonksiyon
function changeLanguage() {
    const language = document.getElementById('language').value;

    // Mevcut URL'yi al
    let currentUrl = window.location.pathname;

    // Seçilen dile göre yönlendirme yap
    if (language === 'tr') {
        if (!currentUrl.includes('/tr/')) {
            const newUrl = 'yuvencargo.com/tr' + currentUrl.replace('yuvencargo.com', '');  // /yuvencargo/tr'ye yönlendir
            window.location.href = newUrl;
        }
    } else {
        if (currentUrl.includes('/tr/')) {
            const newUrl = currentUrl.replace('yuvencargo.com/tr', 'yuvencargo.com'); // /tr'yi kaldır ve kök dizine yönlendir
            window.location.href = newUrl;
        }
    }

    // Seçilen dili çerezlere yaz
    document.cookie = "language=" + language + ";path=/";
}

// Çerezden dil bilgisi almak için yardımcı fonksiyon
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
</script>

<?php
// Varsayılan dil 'en' (İngilizce) olarak belirlenir.
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';

// Geçerli URL'yi alır.
$currentUrl = $_SERVER['REQUEST_URI'];

// Eğer dil Türkçe ise ve URL'de '/yuvencargo/tr/' yoksa Türkçe sayfalara yönlendir.
if ($language == 'tr' && strpos($currentUrl, 'yuvencargo.com/tr/') === false) {
    // Türkçe sayfalara yönlendir.
    $newUrl = 'yuvencargo.com/tr' . $currentUrl;
    if ($currentUrl === '/' || $currentUrl === 'yuvencargo.com/index.php') {
        $newUrl = 'yuvencargo.com/tr/index.php'; // Ana sayfa yönlendirmesi.
    }
    header("Location: $newUrl");
    exit();
}

// Eğer dil İngilizce ise ve şu anda '/yuvencargo/tr/' dizinindeysek, kök dizine yönlendir.
elseif ($language == 'en' && strpos($currentUrl, '/yuvencargo/tr/') !== false) {
    $newUrl = str_replace('yuvencargo.com/tr', 'yuvencargo.com', $currentUrl);
    if ($newUrl === '' || $newUrl === '/') {
        $newUrl = 'yuvencargo.com/index.php'; // Ana sayfa yönlendirmesi.
    }

}
?>