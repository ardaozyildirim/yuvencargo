<?php

require 'DatabaseConnection.php';

class TrackingFormHandler extends DatabaseConnection{


    public function __construct()
    {
        parent::__construct();
    }

    // Function to get the current URL
    private function getCurrentUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $url;
    }


    public function getShipmentInformation($tracking_number)
    {
        if($_REQUEST['tracking-number'])
        {
            $tracking_number = $_REQUEST['tracking-number'];
        }

        $tracking_number = '"' . $tracking_number . '"';
        $sql = "SELECT * FROM tracking 
         WHERE bl_number = " . $tracking_number . '';
        $result = parent::query($sql);

        $result = mysqli_fetch_assoc($result);
        return $result;

    }


    public function getShipmentEvents($tracking_number)
    {
        if(isset($_REQUEST['tracking-number'])) {
            $tracking_number = $_REQUEST['tracking-number'];
        }

        $tracking_number = '"' . $tracking_number . '"';
        $sql = "SELECT * FROM events LEFT JOIN tracking ON events.tracking_id = tracking.id  WHERE tracking.tracking_code = " . $tracking_number;
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }


    public function getShipmentEventsByContainerIdAndTrackingNumber($tracking_number, $container_id)
    {
        if(isset($_REQUEST['tracking-number'])) {
            $tracking_number = $_REQUEST['tracking-number'];
        }

        $tracking_number = '"' . $tracking_number . '"';
        $sql = "SELECT * FROM events 
        LEFT JOIN tracking ON events.tracking_id = tracking.id
        LEFT JOIN containers ON events.container_id = containers.id
        WHERE tracking.tracking_code = " . $tracking_number . " AND events.container_id = " . $container_id;
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }


    public function getContainerInformation($tracking_number)
    {
        if(isset($_REQUEST['tracking-number'])) {
            $tracking_number = $_REQUEST['tracking-number'];
        }

        $tracking_number = '"' . $tracking_number . '"';
        $sql = "SELECT  containers.id AS container_id, containers.container_code as container_code, containers.tracking_id as container_tracking_code, containers.destination_place as container_destination_place, containers.size as container_size, containers.first_place as container_first_place, containers.destination_place as containers_destination_place, containers.first_harbour_long_name as containers_harbour_long_name, containers.last_harbour_long_name as containers_last_harbour_long_name, tracking.id as tracking_id, tracking.tracking_code as tracking_code FROM containers  LEFT JOIN tracking ON containers.tracking_id = tracking.id  WHERE tracking.tracking_code =" . $tracking_number;
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }

    public function getContainerList()
    {
        $sql = "SELECT  containers.id AS container_id, containers.container_code as container_code, containers.tracking_id as container_tracking_code, containers.destination_place as container_destination_place, containers.size as container_size, containers.first_place as container_first_place, containers.destination_place as containers_destination_place, containers.first_harbour_long_name as containers_harbour_long_name, containers.last_harbour_long_name as containers_last_harbour_long_name, tracking.id as tracking_id, tracking.tracking_code as tracking_code FROM containers  LEFT JOIN tracking ON containers.tracking_id = tracking.id";
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }

    public function getContainerById($id)
    {
        $sql = "SELECT containers.id AS container_id, containers.container_code as container_code, containers.tracking_id as container_tracking_code, containers.destination_place as container_destination_place, containers.size as container_size, containers.first_place as container_first_place, containers.destination_place as containers_destination_place, containers.first_harbour_long_name as containers_harbour_long_name, containers.last_harbour_long_name as containers_last_harbour_long_name, tracking.id as tracking_id, tracking.tracking_code as tracking_code FROM containers
        LEFT JOIN tracking ON containers.tracking_id = tracking.id WHERE containers.id =" . $id ;
        $result = parent::query($sql);

        $result = mysqli_fetch_assoc($result);

        return $result;

    }


    public function getTrackingById($id)
    {
        $sql = "SELECT  * FROM tracking WHERE tracking.id =" . $id;
        $result = parent::query($sql);

        $result = mysqli_fetch_assoc($result);

        return $result;

    }
    public function getEventById($id)
    {
        $sql = "SELECT * FROM events WHERE events.id =" . $id;
        $result = parent::query($sql);

        $result = mysqli_fetch_assoc($result);

        return $result;

    }

    public function getEventList()
    {
        $sql = "SELECT events.id AS events_id, 
        events.tracking_id AS events_tracking_code, 
        events.event_title AS events_title,
        events.event_description AS events_description,
        events.event_date AS events_date,
        events.place AS events_place,
        events.harbour_name AS events_harbour_name,
        events.containers_ship AS events_containers_ship,
        events.ships_tracking_code AS events_ships_tracking_code, 
        events.container_id AS events_container_id   
FROM events;
";
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }


    public function getTrackingCodeList()
    {
        $sql = "SELECT * FROM tracking";
        $result = parent::query($sql);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }

    public function validateAndRedirect()
    {
        // Get the current URL

        if(isset($_REQUEST['trackingCode']))
        {
        $tracking_number = $_REQUEST['trackingCode'];
        }

        if (isset($tracking_number)) {

            // Add double quotes to the beginning and end of the tracking number
            $tracking_number = '"' . $tracking_number . '"';

            // Run the SELECT query
            $sql = "SELECT * FROM tracking WHERE bl_number = " . $tracking_number;

            $result = parent::query($sql);

            $row = mysqli_fetch_assoc($result);

            if (isset($row)) {
                // Construct the header string with all the parameters
                $header_string = "Location: trackingResponse.php?tracking-number=" . $row['bl_number'];

                // Set the header string
                header($header_string);
            } else {
                header("Location: tracking.php?message=not_valid&error");
            }
        }
    }

  }

  $trackingFormHandler =  new TrackingFormHandler();
  $trackingFormHandler->validateAndRedirect();


?>