<?php

    class Account {

        public $id;
        public $rib;
        public $devise;
        public $balance;
        public $userId;

        public function __construct($id, $rib, $devise, $balance, $userId)
        {
            $this->id = $id;
            $this->rib = $rib;
            $this->devise = $devise;
            $this->balance = $balance;
            $this->userId = $userId;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getRib()
        {
            return $this->rib;
        }

        public function setRib($rib)
        {
            $this->rib = $rib;
        }

        public function getDevise()
        {
            return $this->devise;
        }

        public function setDevise($devise)
        {
            $this->devise = $devise;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function setBalance($balance)
        {
            $this->balance = $balance;
        }

        public function getUserId()
        {
            return $this->userId;
        }

        public function setUserId($userId)
        {
            $this->userId = $userId;
        }
    }

?>