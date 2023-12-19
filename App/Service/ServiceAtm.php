<?php

    require("Database.php");
    require("../Models/Atm.php");
    require("IService/IserviceAtm.php");

    class Service extends Database implements Iservice {

        public function insert(Atm $atm)
        {
            $pdo = $this->connect();
            
            $id = $atm->getId();
            $longitude = $atm->getLongitude();
            $laltitude = $atm->getLaltitude();
            $bankId = $atm->getBankId();
            $AgencyId = $atm->getAgencyId();

            $sql = "
                INSERT INTO atm (id, longitude, laltitude, bankId, agencyId)
                VALUES (:id, :longitude, :laltitude, :bankId, :agencyId)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":laltitude", $laltitude);
            $stmt->bindParam(":bankId", $bankId);
            $stmt->bindParam(":agencyId", $AgencyId);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM atm WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM atm";

            $data = $pdo->query($sql);
            $atm = $data->fetchAll(PDO::FETCH_ASSOC);

            return $atm;
        }

    }

?>