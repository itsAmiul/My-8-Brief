<?php

    require_once(__DIR__ . "/../Models/Address.php");
    require_once(__DIR__ . "/../Service/ServiceAddress.php");

    if (isset($_POST['addAddress'])) {

        $id = ( time() * rand(11111, 22222) );
        $city = $_POST['city'];
        $hood = $_POST['hood'];
        $street = $_POST['street'];
        $ZipCode = $_POST['ZipCode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $address = new Address($id, $city, $hood, $street, $ZipCode, $email, $phone);
        $service = new Service();

        $service->insert($address);
    } else {

        $service = new Service();
        $address = $service->display();
    }

    
?>