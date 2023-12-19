<?php

    require("../Service/Database.php");
    require("../Models/Agency.php");
    require("../Service/ServiceAgency.php");

    if (isset($_POST['addAgency'])) {

        $id = ( time() * rand(22222, 33333) );
        $agencyName = $_POST['agencyName'];
        $longitude = $_POST['longitude'];
        $laltitude = $_POST['laltitude'];
        $bankId = $_POST['bankId'];

        $agency = new Agency($id, $agencyName, $longitude, $laltitude, $bankId);
        $service = new AgencyService();

        $service->insert($agency);
    } else { 

        $service = new AgencyService();
        $service->display();
    }

    if (isset($_GET['rm'])) {

        $id = $_GET['rm'];

        $service = new AgencyService();
        $service->delete($id);
    }
?>