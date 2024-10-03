<body>
    <div class="container">

        <h1> Create Tracking Form</h1>
        <hr>
        <form method="POST" action="TrackingAdminFormHandler.php">
            <label for="bl_number">BL Number:</label>
            <input type="text" name="bl_number" id="bl_number">

            <input type="hidden" name="form_type" value="tracking">

            <label for="vessel_name">Vessel Name:</label>
            <input type="text" name="vessel_name" id="vessel_name">

            <label for="voyager_number">Voyage Number:</label>
            <input type="text" name="voyager_number" id="voyager_number">

            <label for="container_qty">Container Qty:</label>
            <input type="text" name="container_qty" id="container_qty">

            <label for="container_size">Container Size:</label>
            <input type="text" name="container_size" id="container_size">

            <label for="port_of_loading">Port Of Loading:</label>
            <input type="text" name="port_of_loading" id="port_of_loading">

            <label for="pol_etd">POL ETD:</label>
            <input type="date" name="pol_etd" id="pol_etd">

            <label for="transshipment_port">Transshipment Port:</label>
            <input type="text" name="transshipment_port" id="transshipment_port">

            <label for="transshipment_vessel">Transshipment Vessel:</label>
            <input type="text" name="transshipment_vessel" id="transshipment_vessel">

            <label for="transshipment_voyage_number">Transshipment Voyage Number:</label>
            <input type="text" name="transshipment_voyage_number" id="transshipment_voyage_number">

            <label for="port_of_discharge">Port Of Discharge:</label>
            <input type="text" name="port_of_discharge" id="port_of_discharge">

            <label for="pot_eta">POT ETA:</label>
            <input type="date" name="pot_eta" id="pot_eta">

            <label for="pod_eta">POD ETA:</label>
            <input type="date" name="pod_eta" id="pod_eta">


            <label for="pot_etd">POT ETD:</label>
            <input type="date" name="pot_etd" id="pot_etd">

            <label for="last_update">Last Update:</label>
            <input type="date" name="last_update" id="last_update">

            <label for="remarks">Remarks:</label>
            <input type="text" name="remarks" id="remarks">

            <input type="submit" value="Submit">
        </form>

    </div>




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
