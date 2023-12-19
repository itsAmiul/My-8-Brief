<?php

    require("Database.php");
    require("../Models/Users.php");
    require("IService/IserviceUser.php");

    class Service extends Database implements Iservice {

        public function insert(User $user)
        {
            $pdo = $this->connect();
            $sql = "
                INSERT INTO user (id, username, password, role, addressId, agencyId)
                VALUES (':id', ':username', ':password', ':role', ':addressId', ':agencyId')
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":role", $roleid);
            $stmt->bindParam(":addressId", $addressId);
            $stmt->bindParam(":agencyId", $agencyId);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();
            $sql = "DELETE FROM user WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();
            $sql = "SELECT * FROM user";
            $data = $pdo->query($sql);
            $user = $data->fetchAll(PDO::FETCH_ASSOC);

            return $user;
        }
    }


?>