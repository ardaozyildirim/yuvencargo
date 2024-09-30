<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us - Yuven Cargo</title>
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
        <h2 class="blbookingno">B/L Booking No</h2>
        <form method="POST" action="TrackingFormHandler.php">
            <div class="user-box">
                <input type="text" name="trackingCode" required="">
                <label>Enter Your B/L No</label>
            </div>
            <a class="aclass">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button style="background: none; border: none; font-size: 13px; color: white;">Search</button>
            </a>
        </form>
    </div>
</div>

    <!-- PAGE CONTENT ENDING -->
   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php include 'footer.php' ?>

    <script type="text/javascript" src="./tracking_files/responsee.js"></script>
<script type="text/javascript" src="./tracking_files/owl.carousel.js"></script>
<script type="text/javascript" src="./tracking_files/template-scripts.js"></script>


<style>
/* Login Box Container */
.login-box {
    width: 400px;
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

/* Title Styling */
.blbookingno {
    margin: 0 0 30px;
    padding: 0;
    font-size: 24px;
    color: #fff;
}

/* Input Field Styling */
.user-box {
    position: relative;
    margin-bottom: 30px;
}

.user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 2px solid #fff;
    outline: none;
    background: transparent;
}

/* Label Styling */
.user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: 0.5s;
}

/* On Focus Label Effect */
.user-box input:focus~label,
.user-box input:valid~label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

/* Button Styling */
.aclass {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #f83c44;
    font-size: 16px;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 4px;
    overflow: hidden;
    transition: 0.5s;
    margin-top: 40px;
    border-radius: 5px;
}

.aclass:hover {
    background: #f83c44;
    color: #f83c44;
    border-radius: 5px;
    box-shadow: 0 0 5px #fff, 0 0 25px #fff, 0 0 50px #fff, 0 0 100px #fff;
}

/* Button Animations */
.aclass span {
    position: absolute;
    display: block;
}

.aclass span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #fff);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }

    50%,
    100% {
        left: 100%;
    }
}

.aclass span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #fff);
    animation: btn-anim2 1s linear infinite;
    animation-delay: 0.25s;
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }

    50%,
    100% {
        top: 100%;
    }
}

.aclass span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #fff);
    animation: btn-anim3 1s linear infinite;
    animation-delay: 0.5s;
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }

    50%,
    100% {
        right: 100%;
    }
}

.aclass span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #fff);
    animation: btn-anim4 1s linear infinite;
    animation-delay: 0.75s;
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }

    50%,
    100% {
        bottom: 100%;
    }
}

/* Search Button Styling */
button {
    background: none;
    border: none;
    font-size: 16px;
    color: white;
    cursor: pointer;
}

</style>  