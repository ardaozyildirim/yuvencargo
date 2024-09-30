<?php

require_once ($_SERVER['DOCUMENT_ROOT']) . "/DatabaseConnection.php";

class TrackingAdminFormHandler extends DatabaseConnection
{

    public function __construct()
    {
        parent::__construct();
    }

    // Function to get the current URL

    public function insertDatasIntoTracking()
    {
        try {
            $bl_number = isset($_POST['bl_number']) ? $_POST['bl_number'] : 'No Data Specified';
            $vessel_name = isset($_POST['vessel_name']) ? $_POST['vessel_name'] : 'No Data Specified';
            $voyager_number = isset($_POST['voyager_number']) ? $_POST['voyager_number'] : 'No Data Specified';
            $container_qty = isset($_POST['container_qty']) ? $_POST['container_qty'] : 'No Data Specified';
            $container_size = isset($_POST['container_size']) ? $_POST['container_size'] : 'No Data Specified';
            $port_of_loading = isset($_POST['port_of_loading']) ? $_POST['port_of_loading'] : 'No Data Specified';
            $transshipment_port = isset($_POST['transshipment_port']) ? $_POST['transshipment_port'] : 'No Data Specified';
            $transshipment_vessel = isset($_POST['transshipment_vessel']) ? $_POST['transshipment_vessel'] : 'No Data Specified';
            $transshipment_voyage_number = isset($_POST['transshipment_voyage_number']) ? $_POST['transshipment_voyage_number'] : 'No Data Specified';
            $port_of_discharge = isset($_POST['port_of_discharge']) ? $_POST['port_of_discharge'] : 'No Data Specified';
            $last_update = isset($_POST['last_update']) ? $_POST['last_update'] : 'No Data Specified';
            $pol_etd = isset($_POST['pol_etd']) ? $_POST['pol_etd'] : 'No Data Specified';
            $pod_eta = isset($_POST['pod_eta']) ? $_POST['pod_eta'] : 'No Data Specified';
            $pot_etd = isset($_POST['pot_etd']) ? $_POST['pot_etd'] : 'No Data Specified';
            $pot_eta = isset($_POST['pot_eta']) ? $_POST['pot_eta'] : 'No Data Specified';
            $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : 'No Data Specified';

            $sql = "INSERT INTO tracking (bl_number, vessel_name, voyager_number, container_qty, container_size, pol_etd, pod_eta, pot_etd, pot_eta, port_of_loading, transshipment_port, transshipment_vessel, transshipment_voyage_number, port_of_discharge, last_update, remarks) 
                VALUES ('$bl_number', '$vessel_name', '$voyager_number', '$container_qty', '$container_size', '$pol_etd', '$pod_eta', '$pot_etd' , '$pot_eta', '$port_of_loading', '$transshipment_port', '$transshipment_vessel', '$transshipment_voyage_number', '$port_of_discharge', '$last_update', '$remarks')";

            $result = parent::query($sql);

            header("Location: " . $this->getCurrentDomain() . "/admin/list.php");
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }



    private function getCurrentDomain()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        return $url;
    }

    public function updateTracking()
    {
        if (!empty($_REQUEST['trackingId'])) {

            $trackingId =  $_REQUEST['trackingId'];
            $bl_number = $_POST['bl_number'];
            $vessel_name = $_POST['vessel_name'];
            $voyage_number = $_POST['voyage_number'];
            $container_qty = $_POST['container_qty'];
            $container_size = $_POST['container_size'];
            $port_of_loading = $_POST['port_of_loading'];
            $transshipment_port = $_POST['transshipment_port'];
            $transshipment_vessel = $_POST['transshipment_vessel'];
            $transshipment_voyage_number = $_POST['transshipment_voyage_number'];
            $port_of_discharge = $_POST['port_of_discharge'];
            $last_update = $_POST['last_update'];

            $pol_etd = $_POST['pol_etd'];
            $pot_eta = $_POST['pot_eta'];
            $pot_etd = $_POST['pot_etd'];
            $pod_eta = $_POST['pod_eta'];

            $remarks = $_POST['remarks'];

            $sql = "UPDATE tracking SET bl_number = '$bl_number',  vessel_name = '$vessel_name', voyager_number = '$voyage_number', container_qty = '$container_qty', container_size = '$container_size', port_of_loading = '$port_of_loading',  transshipment_port = '$transshipment_port', transshipment_vessel = '$transshipment_vessel', transshipment_voyage_number = '$transshipment_voyage_number', port_of_discharge = '$port_of_discharge', last_update = '$last_update', pol_etd = '$pol_etd', pot_eta = '$pot_eta', pod_eta = '$pod_eta', pot_etd = '$pot_etd', remarks = '$remarks' WHERE id = '$trackingId'";
            $result = parent::query($sql);

            return header("Location: " . $this->getCurrentDomain() . "/admin/list.php");
        }
    }


    private function getCurrentUrl()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $url;
    }


    public function deleteTracking()
    {


        try {

            $trackingId = $_REQUEST['trackingId'];

            $sql = "DELETE FROM tracking WHERE tracking.id =". $trackingId;
            $result = parent::query($sql);
            return header("Location: " . $this->getCurrentDomain() . "/admin/list.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

}


if('tracking' == $_REQUEST['form_type'])

{
    $trackingAdminFormHandler = new TrackingAdminFormHandler();
    $trackingAdminFormHandler->insertDatasIntoTracking();
} elseif ('tracking_update' == $_REQUEST['form_type']) {
    $trackingAdminFormHandler = new TrackingAdminFormHandler();
    $trackingAdminFormHandler->updateTracking();
}
elseif ('tracking_delete' == $_REQUEST['form_type'])
{
    $trackingAdminFormHandler = new TrackingAdminFormHandler();
    $trackingAdminFormHandler->deleteTracking();
}
elseif ('tracking' == $_REQUEST['form_type'] && 'events' == $_REQUEST['form_type'] && 'container' == $_REQUEST['form_type'])
{
     echo 'No method Matched';
}


?>