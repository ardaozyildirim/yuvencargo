<!DOCTYPE html>
<!-- saved from url=(0037)http://transmena.com.tr/Tracking.html -->
<html lang="en-US" data-lt-installed="true"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmena Shipping Company</title>
    <link rel="stylesheet" href="./tracking_files/components.css">
    <link rel="stylesheet" href="./tracking_files/icons.css">
    <link rel="stylesheet" href="./tracking_files/responsee.css">
    <link rel="stylesheet" href="./tracking_files/owl.carousel.css">
    <link rel="stylesheet" href="./tracking_files/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="./tracking_files/template-style.css">
    <link href="./tracking_files/css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./tracking_files/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="./tracking_files/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./tracking_files/validation.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="size-1140" cz-shortcut-listen="true">
<!-- HEADER -->


<?php

include 'partials/header.php';
include "TrackingFormHandler.php";

$trackingFormHandler =  new TrackingFormHandler();
$result = $trackingFormHandler->getShipmentInformation($_REQUEST['tracking-number']);
?>



<!-- MAIN -->
<main role="main">
      <!-- Content -->
        <div class="container">
        <section style="width: 64rem;  height: auto;"  class="root">
            <h1><?php echo  $result['bl_number']?></h1>
            <div style="overflow-x:auto;">
                <table class="styled-table" id="customers">
                    <tbody>
                    <tr>
                        <td>BL / BOOKING NO</td>
                        <td><?php echo $result['bl_number'] ?></td>
                    </tr>
                    <tr>
                        <td>Vessel Name</td>
                        <td><?php echo $result['vessel_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Voyage Number</td>
                        <td><?php echo $result['voyager_number'] ?></td>
                    </tr>
                    <tr>
                        <td>Container Qty</td>
                        <td><?php echo $result['container_qty'] ?></td>
                    </tr>
                    <tr>
                        <td>Container Size</td>
                        <td><?php echo $result['container_size'] ?></td>
                    </tr>
                    <tr>
                        <td>Port Of Loading</td>
                        <td><?php echo $result['port_of_loading'] ?></td>
                    </tr>
                    <tr>
                        <td>POL ETD</td>
                        <td><?php if(!empty($result['pol_etd'])) echo date('d/m/Y', strtotime($result['pol_etd'])) ?></td>
                    </tr>
                    <tr>
                        <td>Transhipment Port</td>
                        <td><?php echo $result['transshipment_port'] ?></td>
                    </tr>
                    <tr>
                        <td>Transhipment Vessel</td>
                        <td><?php echo $result['transshipment_vessel'] ?></td>
                    </tr>
                    <tr>
                        <td>Transhipment Voyage Number</td>
                        <td><?php echo $result['transshipment_voyage_number'] ?></td>
                    </tr>
                    <?php if(!empty($result['pot_eta'])) { ?>
                        <tr>
                            <td>POT ETA</td>
                            <td><?php echo date('d/m/Y', strtotime($result['pot_eta'])) ?></td>
                        </tr>
                    <?php } ?>
                    <?php if(!empty($result['pot_etd'])) { ?>
                        <tr>
                            <td>POT ETD</td>
                            <td><?php echo date('d/m/Y', strtotime($result['pot_etd'])) ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>Port Of Discharge</td>
                        <td><?php echo $result['port_of_discharge'] ?></td>
                    </tr>
                    <?php if(!empty($result['pod_eta'])) { ?>
                        <tr>
                            <td>POD ETA</td>
                            <td><?php echo date('d/m/Y', strtotime($result['pod_eta'])) ?></td>
                        </tr>
                    <?php } ?>
                    <?php if(!empty($result['last_update'])) { ?>
                        <tr>
                            <td>Last Update</td>
                            <td><?php echo date('d/m/Y', strtotime($result['last_update'])) ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>Remarks</td>
                        <td><?php echo $result['remarks'] ?></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            </div>
                <!--- Accordion End --->
            </div>
        </section>
    </main>

<!--FOOTER -->
<footer>
    <!-- Main Footer -->
    <section class="section background-dark">
        <div class="line">
            <div class="margin">
                <!-- Collumn 1 -->
                <div class="s-12 m-12 l-4 margin-m-bottom-2x">
                    <h4 class="text-uppercase text-strong">Our Philosophy</h4>
                    <p class="text-size-20"><em>"We Carry Responsibility ."</em></p><p>

                    </p><div class="line">
                        <h4 class="text-uppercase text-strong margin-top-30">About Our Company</h4>
                        <div class="margin">
                            <div class="s-12 m-12 l-4 margin-m-bottom">
                                <a class="image-hover-zoom" href="http://transmena.com.tr/"><img src="./tracking_files/blog-04.png" alt=""></a>
                            </div>
                            <div class="s-12 m-12 l-8 margin-m-bottom">
                                <p>Transmena Shipping Company is a logistics company that provides accessible advice with the quality standards of a multinational.</p>
                                <a class="text-more-info text-primary-hover" href="http://transmena.com.tr/about.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collumn 2 -->
                <div class="right s-12 m-12 l-4 margin-m-bottom-2x">
                    <h4 class="text-uppercase text-strong">Contact Us</h4>
                    <p><b>TRANSMENA SHIPPING COMPANY TİCARET LİMİTED ŞİRKETİ</b></p>
                    <div class="line">
                        <div class="s-1 m-1 l-1 text-center">
                            <i class="icon-placepin text-primary text-size-12"></i>
                        </div>
                        <div class="s-11 m-11 l-11 margin-bottom-10">
                            <p><b>Adress:</b>  Ziya Gökalp Mah. Süleyman Demirel Blv. No:7/E - D:103  Po Box:34490 Başakşehir /İstanbul / Türkiye </p>
                        </div>
                    </div>
                    <div class="line">
                        <div class="s-1 m-1 l-1 text-center">
                            <i class="icon-mail text-primary text-size-12"></i>
                        </div>
                        <div class="s-11 m-11 l-11 margin-bottom-10">
                            <p><a href="http://transmena.com.tr/" class="text-primary-hover"><b>E-mail:</b> info@transmena.com.tr</a></p>
                        </div>
                    </div>
                    <div class="line">
                        <div class="s-1 m-1 l-1 text-center">
                            <i class="icon-smartphone text-primary text-size-12"></i>
                        </div>
                        <div class="s-11 m-11 l-11 margin-bottom-10">
                            <p><b>Phone:</b> +90 212 803 03 23</p>
                        </div>
                    </div>
                    <div class="line">
                        <div class="s-1 m-1 l-1 text-center">
                            <i class="icon-printer text-primary text-size-12"></i>
                        </div>
                        <div class="s-11 m-11 l-11 margin-bottom-10">
                            <p><b>Fax:</b> +90 212 803 03 23</p>
                        </div>
                    </div>
                </div>



            </div></div></section>
    <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">

    <!-- Bottom Footer -->
    <section class="padding background-dark">
        <div class="line">
            <div class="s-12 l-6">
                <p class="text-size-12">Copyright 2023, Transmena Shipping Company </p>
            </div>
            <div class="s-12 l-6">
                </div>
        </div>
    </section>
</footer>
<script type="text/javascript" src="./tracking_files/responsee.js"></script>
<script type="text/javascript" src="./tracking_files/owl.carousel.js"></script>
<script type="text/javascript" src="./tracking_files/template-scripts.js"></script>

    <style>


        .accordion {
        }
        .accordion input {
            display: none;
        }
        .box {
            position: relative;
            background: white;
            height: auto;
            transition: all .15s ease-in-out;
        }
        .box::before {
            content: '';
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            pointer-events: none;
            box-shadow: 0 -1px 0 #e5e5e5,0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);
        }
        header.box {
            background: #00BCD4;
            z-index: 100;
            cursor: initial;
            box-shadow: 0 -1px 0 #e5e5e5,0 0 2px -2px rgba(0,0,0,.12),0 2px 4px -4px rgba(0,0,0,.24);
        }
        header .box-title {
            margin: 0;
            font-weight: normal;
            font-size: 8pt;
            color: white;
            cursor: initial;
        }
        .box-title {
            width: calc(100% - 40px);
            height: 64px;
            line-height: 64px;
            padding: 0 20px;
            display: inline-block;
            cursor: pointer;
            -webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;
        }
        .box-content {
            width: auto;
            padding: 30px 20px;
            font-size: 11pt;
            height: 700px;
            color: rgba(0,0,0,.54);
            display: none;
        }
        .box-close {
            position: absolute;
            height: 64px;
            width: 100%;
            top: 0;
            left: 0;
            cursor: pointer;
            display: none;
        }
        input:checked + .box {
            height: auto;
            margin: 16px 0;
            box-shadow: 0 0 6px rgba(0,0,0,.16),0 6px 12px rgba(0,0,0,.32);
        }
        input:checked + .box .box-title {
            border-bottom: 1px solid rgba(0,0,0,.18);
        }
        input:checked + .box .box-content,
        input:checked + .box .box-close {
            display: inline-block;
        }
        .arrows section .box-title {
            padding-left: 44px;
            width: 100%;
        }
        .arrows section .box-title:before {
            position: absolute;
            display: block;
            content: '\203a';
            font-size: 18pt;
            left: 20px;
            top: -2px;
            margin-top: 15px;
            transition: transform .15s ease-in-out;
            color: rgba(0,0,0,.54);
        }
        input:checked + section.box .box-title:before {
            transform: rotate(90deg);
        }

        .accordion input:checked + .box {
            height: auto;
            margin: 16px 0;
            box-shadow: 0 0 6px rgba(0,0,0,.16),0 6px 12px rgba(0,0,0,.32);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .root {
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
        }


        figure {
            display: flex;
        }
        figure img {
            width: 8rem;
            height: 8rem;
            border-radius: 15%;
            border: 1.5px solid #f05a00;
            margin-right: 1.5rem;
            padding:1rem;
        }
        figure figcaption {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        figure figcaption h4 {
            font-size: 1.4rem;
            font-weight: 500;
        }
        figure figcaption h6 {
            font-size: 1rem;
            font-weight: 300;
        }
        figure figcaption h2 {
            font-size: 1.6rem;
            font-weight: 500;
        }

        .order-track {
            margin-top: 2rem;
            padding: 0 1rem;
            border-top: 1px dashed #2c3e50;
            padding-top: 2.5rem;
            display: flex;
            flex-direction: column;
        }
        .order-track-step {
            display: flex;
            height: 7rem;
            margin-left: 25rem;
        }
        .order-track-step:last-child {
            height: 4rem;
        }
        .order-track-step:last-child .order-track-status span:last-of-type {
            display: none;
        }
        .order-track-status {
            margin-right: 1.5rem;
            position: relative;
        }
        .order-track-status-dot {
            display: block;
            width: 2.2rem;
            height: 2.2rem;
            border-radius: 50%;
            background: #141e30;
        }
        .order-track-status-line {
            display: block;
            margin: 0 auto;
            width: 2px;
            height: 7rem;
            background: #141e30;
        }
        .order-track-text-stat {
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 3px;
        }
        .order-track-text-sub {
            font-size: 1rem;
            font-weight: 300;
        }

        .order-track {
            transition: all .3s height 0.3s;
            transform-origin: top center;
        }


        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            bottom-border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #004AB8;
            color: white;
        }
        h1{
            text-align:center;
        }
        span{
            font-size: 200%;
            line-height: 80%;
        }


        .styled-table {
            width: 100%;
            background-color: #fff;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            border: 1px solid #ddd;
        }

        .styled-table td, .styled-table th {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        .styled-table th {
            background-color: #3f3f3f;
            color: #fff;
            font-weight: bold;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }




    </style>

