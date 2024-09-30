<style>

    /* Genel stiller */
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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


<?php

require_once ($_SERVER['DOCUMENT_ROOT']) . "/TrackingFormHandler.php";

$TrackingAdminFormHandler = new TrackingFormHandler();
$trackings = $TrackingAdminFormHandler->getTrackingCodeList();

if(isset($_REQUEST['tracking_id']) && !empty($_REQUEST['tracking_id'])) {
    $trackingId = $TrackingAdminFormHandler->getTrackingById($_REQUEST['tracking_id']);
}
?>

<body>


<?php if (isset($_REQUEST['tracking_id'])): ?>

<div class="container">

    <h1> Create Tracking Form</h1>
    <hr>
    <form method="POST" action="TrackingAdminFormHandler.php">
        <label for="tracking_code">BL Number:</label>
        <input value="<?php echo $trackingId['bl_number'] ?>" type="text" name="bl_number" id="bl_number">
        <input type="text" value="tracking_update" id="form_type" name="form_type" hidden>

        <input type="text" value="<?php echo $_REQUEST['tracking_id'] ?>" id="trackingId" name="trackingId" hidden>

        <label for="vessel_name">Vessel Name:</label>
        <input value="<?php echo $trackingId['vessel_name'] ?>" type="text" name="vessel_name" id="vessel_name">

        <label for="voyage_number">Voyage Number:</label>
        <input value="<?php echo $trackingId['voyager_number'] ?>" type="text" name="voyage_number" id="voyage_number">

        <label for="container_qty">Container Qty:</label>
        <input value="<?php echo $trackingId['container_qty'] ?>" type="text" name="container_qty" id="container_qty">

        <label for="container_size">Container Size:</label>
        <input value="<?php echo $trackingId['container_size'] ?>" type="text" name="container_size" id="container_size">

        <label for="port_of_loading">Port Of Loading:</label>
        <input value="<?php echo $trackingId['port_of_loading'] ?>" type="text" name="port_of_loading" id="port_of_loading">

        <label for="pol_etd">POL ETD:</label>
        <input value="<?php echo $trackingId['pol_etd'] ?>" type="date" name="pol_etd" id="pol_etd">

        <label for="transshipment_port">Transshipment Port:</label>
        <input value="<?php echo $trackingId['transshipment_port'] ?>" type="text" name="transshipment_port" id="transshipment_port">

        <label for="transshipment_vessel">Transshipment Vessel:</label>
        <input value="<?php echo $trackingId['transshipment_vessel'] ?>" type="text" name="transshipment_vessel" id="transshipment_vessel">

        <label for="transshipment_voyage_number">Transshipment Voyage Number:</label>
        <input value="<?php echo $trackingId['transshipment_voyage_number'] ?>" type="text" name="transshipment_voyage_number" id="transshipment_voyage_number">

        <label for="port_of_discharge">Port Of Discharge:</label>
        <input value="<?php echo $trackingId['port_of_discharge'] ?>" type="text" name="port_of_discharge" id="port_of_discharge">

        <label for="pot_eta">POT ETA:</label>
        <input value="<?php echo $trackingId['pot_eta'] ?>" type="date" name="pot_eta" id="pot_eta">

        <label for="pot_etd">POT ETD:</label>
        <input value="<?php echo $trackingId['pot_etd'] ?>" type="date" name="pot_etd" id="pot_etd">

        <label for="pot_etd">POD ETA:</label>
        <input value="<?php echo $trackingId['pod_eta'] ?>" type="date" name="pod_eta" id="pod_eta">

        <label for="last_update">Last Update:</label>
        <input value="<?php echo $trackingId['last_update'] ?>" type="date" name="last_update" id="last_update">

        <label for="remarks">Remarks:</label>
        <input value="<?php echo $trackingId['remarks'] ?>" type="text" name="remarks" id="remarks">

        <input type="submit" value="Submit">
    </form>
</div>

<?php endif; ?>


</body>
