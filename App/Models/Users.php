<?php

    class User {

        public $id;
        public $username;
        public $password;
        public $role;
        public $addressId;
        public $agencyId;

        public function __construct($id, $username, $password, $role, $addressId, $agencyId)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->addressId = $addressId;
            $this->agencyId = $agencyId;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function setUsername($username)
        {
            $this->username = $username;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getRole()
        {
            return $this->role;
        }

        public function setRole($role)
        {
            $this->role = $role;
        }

        public function getAddressId()
        {
            return $this->addressId;
        }

        public function setAddressId($addressId)
        {
            $this->addressId = $addressId;
        }

        public function getAgenceId()
        {
            return $this->agencyId;
        }

        public function setAgenceId($agencyId)
        {
            $this->agencyId = $agencyId;
        }
    }

?>