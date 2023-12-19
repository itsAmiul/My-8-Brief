<?php

    require(__DIR__ . "/Database.php");
    require("../Models/Permition.php");
    require("IService/IservicePermition.php");

    class Service extends Database implements Iservice {
        
        public function insert(Permition $permition) 
        {
            $pdo = $this->connect();

            $id = $permition->getId();
            $name = $permition->getName();

            $sql = "
                INSERT INTO permition  (id, name)
                VALUES (:id, :name)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM permition WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM permition";

            $data = $pdo->query($sql);
            $permissions = $data->fetchAll(PDO::FETCH_ASSOC);

            return $permissions;
        }
    }

?>