<?php

    require("Database.php");
    require("../Models/Role.php");
    require("IService/IserviceRole.php");

    class Service extends Database implements Iservice {

        public function insert(Role $role)
        {
            $pdo = $this->connect();

            $name = $role->getName();

            $sql = "
                INSERT INTO role (name)
                VALUES (:name)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM role WHERE id = :name";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM role";

            $data = $pdo->query($sql);
            $role = $data->fetchAll(PDO::FETCH_ASSOC);

            return $role;
        }
    }
?>