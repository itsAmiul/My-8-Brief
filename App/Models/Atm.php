<?php

    class Atm {

        public $id;
        public $longitude;
        public $laltitude;
        public $bankId;
        public $AgencyId;

        public function __construct($id, $longitude, $laltitude, $bankId, $AgencyId)
        {
            $this->id = $id;
            $this->longitude = $longitude;
            $this->laltitude = $laltitude;
            $this->bankId = $bankId;
            $this->AgencyId = $AgencyId;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
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

        public function getAgencyId()
        {
            return $this->AgencyId;
        }

        public function setAgencyId($AgencyId)
        {
            $this->AgencyId = $AgencyId;
        }

    }

?>