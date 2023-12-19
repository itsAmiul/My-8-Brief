<?php

    class Address {

        public $id;
        public $city;
        public $hood;
        public $street;
        public $ZipCode;
        public $email;
        public $phone;

        public function __construct($id, $city, $hood, $street, $ZipCode, $email, $phone)
        {
            $this->id = $id;
            $this->city = $city;
            $this->hood = $hood;
            $this->street = $street;
            $this->ZipCode = $ZipCode;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getCity()
        {
            return $this->city;
        }

        public function setCity($city)
        {
            $this->city = $city;
        }

        public function getHood()
        {
            return $this->hood;
        }

        public function setHood($hood)
        {
            $this->hood = $hood;
        }

        public function getStreet()
        {
            return $this->street;
        }

        public function setStreet($street)
        {
            $this->street = $street;
        }

        public function getZipCode()
        {
            return $this->ZipCode;
        }

        public function setZipCode($ZipCode)
        {
            $this->ZipCode = $ZipCode;
        }
        
        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPhone()
        {
            return $this->phone;
        }

        public function setPhone($phone)
        {
            $this->phone = $phone;
        }
    }

?>