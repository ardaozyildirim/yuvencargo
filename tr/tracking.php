<!DOCTYPE html>
<html lang="tr">

<head>
<?php include 'head.php' ?>
    <meta charset="utf-8">
    <title>Takip - Yuven Cargo</title>
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
</head>

<?php include 'header.php' ?>

<!-- SAYFA İÇERİĞİ BAŞLANGICI -->

<?php
if(isset($_GET['message']) & isset($_GET['error'])) {
    echo '<script> swal({
        title: "Hata!",
        text: "Bu Takip Kodu Geçerli Değil.",
        icon: "warning",
    }); 
    </script>';
}
?>

<!-- ANA İÇERİK -->
<main role="main">
    <!-- İçerik -->
    <div class="container">
        <div class="login-box">
            <h2 class="blbookingno">Global Paket Takibi</h2>
            <p style="color: #ffffff; font-size: 14px; margin-bottom: 20px;">Paketlerinizi dünya çapında kolayca takip edin ve teslimat sürecinizin her adımını öğrenin.</p>
            <form method="POST" action="TrackingFormHandler.php">
                <div class="user-box">
                    <input type="text" name="trackingCode" required="" placeholder="Takip numarasını girin">
                </div>
                <a class="aclass">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button class="animated-border-button" style="position: relative; background: #f83c44;border: none;font-size: 16px;color: white; padding: 10px 20px;border-radius: 5px; cursor:pointer; overflow:hidden">Paketinizi Takip Edin</button>
                </a>
            </form>
        </div>
    </div>

<!-- Stil -->
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

<?php include 'langswitch.php' ?>