<?php


    require(__DIR__ . "/Database.php");
    require("../Models/Account.php");
    require("IService/IserviceAccount.php");

    class Service extends Database implements Iservice {
        
        public function insert(Account $account) 
        {
            $pdo = $this->connect();

            $id = $account->getId();
            $rib = $account->getRib();
            $devise = $account->getDevise();
            $balance = $account->getBalance();
            $userId = $account->getUserId();

            $sql = "
                INSERT INTO permition  (id, rib, devise, balance, userId)
                VALUES (:id, :rib, :devise, :balance, :userId)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":rib", $rib);
            $stmt->bindParam(":devise", $devise);
            $stmt->bindParam(":balance", $balance);
            $stmt->bindParam(":iuserIdd", $userId);
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

            $sql = "SELECT * FROM user";

            $data = $pdo->query($sql);
            $user = $data->fetchAll(PDO::FETCH_ASSOC);

            return $user;
        }

        
    }

?>