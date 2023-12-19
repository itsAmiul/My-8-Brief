<?php

    class Transaction {

        public $id;
        public $type;
        public $amout;
        public $accountId;
        public $toWhere;

        public function __construct($id, $type, $amout, $accountId, $toWhere)
        {
            $this->id = $id;
            $this->type = $type;
            $this->amout = $amout;
            $this->accountId = $accountId;
            $this->toWhere = $toWhere;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getType()
        {
            return $this->type;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        public function getAmount()
        {
            return $this->amout;
        }

        public function setAmount($amout)
        {
            $this->amout = $amout;
        }

        public function getAccountId()
        {
            return $this->accountId;
        }

        public function setAccountId($accountId)
        {
            $this->accountId = $accountId;
        }

        public function getToWhere()
        {
            return $this->toWhere;
        }

        public function setToWhere($toWhere)
        {
            $this->toWhere = $toWhere;
        }

    }

?>