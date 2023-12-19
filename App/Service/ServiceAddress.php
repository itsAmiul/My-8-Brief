<?php

    require(__DIR__ . "/../Models/Address.php");
    require(__DIR__ . "/IService/IserviceAddress.php");

    class Service extends Database implements Iservice {
        
        public function insert(Address $address) 
        {
            $pdo = $this->connect();

            $id = $address->getId();
            $city = $address->getCity();
            $hood = $address->getHood();
            $street = $address->getStreet();
            $ZipCode = $address->getZipCode();
            $email = $address->getEmail();
            $phone = $address->getPhone();

            $sql = "
                INSERT INTO address  (id, city, hood, street, zipCode, email, phone)
                VALUES (:id, :city, :hood, :street, :zipCode, :email, :phone)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":city", $city);
            $stmt->bindParam(":hood", $hood);
            $stmt->bindParam(":street", $street);
            $stmt->bindParam(":zipCode", $ZipCode);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM address WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM address";

            $data = $pdo->query($sql);
            $user = $data->fetchAll(PDO::FETCH_ASSOC);

            return $user;
        }        
    }

?>