<?php

    require("Database.php");
    require("../Models/Agency.php");
    require("IService/IserviceAgency.php");

    class Service extends Database implements Iservice {

        public function insert(Agency $agency)
        {
            $pdo = $this->connect();
            
            $id = $agency->getId();
            $agencyName = $agency->getAgencyName();
            $longitude = $agency->getLongitude();
            $laltitude = $agency->getLaltitude();
            $bankId = $agency->getBankId();

            $sql = "
                INSERT INTO agency (id, agencyName, longitude, laltitude, bankId)
                VALUES (:id, :agencyName, :longitude, :laltitude, :bankId)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":agencyName", $agencyName);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":laltitude", $laltitude);
            $stmt->bindParam(":bankId", $bankId);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM agency WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM agency";

            $data = $pdo->query($sql);
            $agency = $data->fetchAll(PDO::FETCH_ASSOC);

            return $agency;
        }

    }

?>