<?php

    require("Database.php");
    require("../Models/Bank.php");
    require("IService/IserviceBank.php");

    class Service extends Database implements Iservice {

        public function insert(Bank $bank)
        {
            $pdo = $this->connect();
            
            $id = $bank->getId();
            $name = $bank->getName();
            $logo = $bank->getLogo();

            $sql = "
                INSERT INTO bank (id, name, logo)
                VALUES (:id, :name, :logo)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":logo", $logo);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM bank WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM bank";

            $data = $pdo->query($sql);
            $bank = $data->fetchAll(PDO::FETCH_ASSOC);

            return $bank;
        }

    }

?>