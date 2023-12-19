<?php

    require(__DIR__ . "/../config/config.php");

    class Database {

        protected $db;

        public function connect() {

            try {
                
                $pdo = new PDO(dsn, UserName, Password);
                return $pdo;

            } catch(PDOException $e) {
                echo "Connection Failed" . $e->getMessage();
            }
        }
    }

?>