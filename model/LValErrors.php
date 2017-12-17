<?php
    #Author: Mikhail Shaw
    class LValErrors{
        public $Addr1Err = false;
        public $Addr2Err = false;
        public $CityErr = false;
        public $ParishErr = false;
        public $CountryErr = false;

        public function setValErrors($Addr1Err,$Addr2Err,$CityErr,$ParishErr,$CountryErr){
            $this->Addr1Err = $Addr1Err;
            $this->Addr2Err = $Addr2Err;
            $this->CityErr = $CityErr;
            $this->ParishErr = $ParishErr;
            $this->CountryErr = $CountryErr;
        }

        public function  setAddr1Err($Addr1Err){
            $this->Addr1Err = $Addr1Err;
        }

        public function  setAddr2Err($Addr2Err){
            $this->Addr2Err = $Addr2Err;
        }

        public function  setCityErr($CityErr){
            $this->CityErr = $CityErr;
        }

        public function  setParishErr($ParishErr){
            $this->ParishErr = $ParishErr;
        }

        public function  setCountryErr($CountryErr){
            $this->CountryErr = $CountryErr;
        }

        public function  getAddr1Err(){
            return $this->Addr1Err;
        }

        public function  getAddr2Err(){
            return $this->Addr2Err;
        }

        public function  getCityErr(){
            return $this->CityErr;
        }

        public function  getParishErr(){
            return $this->ParishErr;
        }

        public function  getCountryErr(){
            return $this->CountryErr;
        }
    }

?>