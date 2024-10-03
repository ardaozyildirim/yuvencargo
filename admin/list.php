<?php

require_once ($_SERVER['DOCUMENT_ROOT']) . "/TrackingFormHandler.php";

    // Path: admin/list.php
    $TrackingAdminFormHandler = new TrackingFormHandler();
    $trackings = $TrackingAdminFormHandler->getTrackingCodeList();
    ?>

<body>

<div class="container">

    <h1>List Of Tracking Codes</h1>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>BL Number</th>
            <th>Vessel Name</th>
            <th>Voyage Number</th>
            <th>Container Qty</th>
            <th>Container Size</th>
            <th>Port Of Loading</th>
            <th>POL ETD</th>
            <th>Transshipment Port</th>
            <th>Transshipment Vessel</th>
            <th>Transshipment Voyage Number</th>
            <th>Port Of Discharge</th>
            <th>POT ETA</th>
            <th>POD ETA</th>
            <th>POT ETD</th>
            <th>Last Update</th>
            <th>Remarks</th>
            <th></th>
            <th></th>
        </tr>
        </thead>


        <tbody>
        <?php foreach ($trackings as $tracking)  { ?>
            <tr>
                <td>
                    <a><?php if(!empty($tracking['id']))
                            echo $tracking['id'] ?></a></td>
                <td>
                    <a> <?php if(!empty($tracking['bl_number']))
                            echo $tracking['bl_number'] ?> </a></td>
                <td>
                    <?php if(!empty($tracking['vessel_name']))
                        echo $tracking['vessel_name'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['voyager_number']))
                        echo $tracking['voyager_number'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['container_qty']))
                        echo $tracking['container_qty'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['container_size']))
                        echo $tracking['container_size'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['port_of_loading']))
                        echo $tracking['port_of_loading'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['pol_etd']))
                        echo $tracking['pol_etd'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['transshipment_port']))
                        echo $tracking['transshipment_port'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['transshipment_vessel']))
                        echo $tracking['transshipment_vessel'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['transshipment_voyage_number']))
                        echo $tracking['transshipment_voyage_number'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['port_of_discharge']))
                        echo $tracking['port_of_discharge'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['pot_eta']))
                        echo $tracking['pot_eta'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['pod_eta']))
                        echo $tracking['pod_eta'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['pot_etd']))
                        echo $tracking['pot_etd'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['last_update']))
                        echo $tracking['last_update'] ?>
                </td>
                <td>
                    <?php if(!empty($tracking['remarks']))
                        echo $tracking['remarks'] ?>
                </td>
                <td>
                    <a href="update.php?tracking_id=<?php echo $tracking['id'] ?>">
                        <button>Edit</button></a>
                </td>
                <td>
                    <form method="POST" action="TrackingAdminFormHandler.php">
                        <input type="text" value="tracking_delete" id="form_type" name="form_type" hidden>
                        <input type="text" value="<?php echo $tracking['id'] ?>" id="trackingId" name="trackingId" hidden>
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
    
</body>

    <style>
        /* Genel stiller */
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 10px;
    }

    p {
        margin-top: 0;
        margin-bottom: 10px;
    }

    /* Form stilleri */
    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0069d9;
    }

    /* Hata mesajı stilleri */
    .error {
        color: #f00;
        font-size: 14px;
        margin-top: 5px;
    }

</style>

<style>
    table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    th, td {
        text-align: left;
        padding: 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    input[type="text"], select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
