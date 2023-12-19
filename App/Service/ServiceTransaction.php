<?php

    require("Database.php");
    require("../Models/Transaction.php");
    require("IService/IserviceTransaction.php");    

    class Service extends Database implements Iservice {

        public function insert(Transaction $transaction)    
        {
            $pdo = $this->connect();

            $id = $transaction->getId();
            $type = $transaction->getType();
            $amout = $transaction->getAmount();
            $accountId = $transaction->getAccountId();
            $toWhere = $transaction->getToWhere();

            $sql = "
                INSERT INTO transaction (id, type, amout, accountId, toWhere)
                VALUES (:id, :type, :amout, :accountId, :toWhere) 
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":type", $type);
            $stmt->bindParam(":amout", $amout);
            $stmt->bindParam(":accountId", $accountId);
            $stmt->bindParam(":toWhere", $toWhere);
            $stmt->execute();
        }

        public function delete($id)
        {
            $pdo = $this->connect();

            $sql = "DELETE FROM transaction WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM transaction";

            $data = $pdo->query($sql);
            $transaction = $data->fetchAll(PDO::FETCH_ASSOC);

            return $transaction;
        }
    }
    
?>