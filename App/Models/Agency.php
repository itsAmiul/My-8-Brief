<?php

    class Agency {

        public $id;
        public $agencyName;
        public $longitude;
        public $laltitude;
        public $bankId;

        public function __construct($id, $agencyName, $longitude, $laltitude, $bankId)
        {
            $this->id = $id;
            $this->agencyName = $agencyName;
            $this->longitude = $longitude;
            $this->laltitude = $laltitude;
            $this->bankId = $bankId;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getAgencyName()
        {
            return $this->agencyName;
        }

        public function setAgencyName($agencyName)
        {
            $this->agencyName = $agencyName;
        }

        public function getLongitude()
        {
            return $this->longitude;
        }

        public function setLongitude($longitude)
        {
            $this->longitude = $longitude;
        }

        public function getLaltitude()
        {
            return $this->laltitude;
        }

        public function setLaltitude($laltitude)
        {
            $this->laltitude = $laltitude;
        }

        public function getBankId()
        {
            return $this->bankId;
        }

        public function setBankId($bankId)
        {
            $this->bankId = $bankId;
        }

    }

?>