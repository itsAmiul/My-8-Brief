<?php

    class Bank {

        public $id;
        public $name;
        public $logo;

        public function __construct($id, $name, $logo)
        {
            $this->id = $id;
            $this->name = $name;
            $this->logo = $logo;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getLogo()
        {
            return $this->logo;
        }

        public function setogo($logo)
        {
            $this->logo = $logo;
        }

    }

?>