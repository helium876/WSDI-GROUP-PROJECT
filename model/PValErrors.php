<?php
    #Author: Mikhail Shaw
    class PValErrors{
        public $propTypeErr = false;
        public $landErr = false;
        public $buildTypeErr = false;
        public $bedrmErr = false;
        public $bathrmErr = false;
        public $listTypeErr = false;
        public $priceErr = false;

        public function setValErrors($propTypeErr,$landErr,$buildTypeErr,$bedrmErr,$bathrmErr,$listTypeErr,$priceErr){
            $this->propTypeErr = $propTypeErr;
            $this->landErr = $landErr;
            $this->buildTypeErr = $buildTypeErr;
            $this->bedrmErr = $bedrmErr;
            $this->bathrmErr = $bathrmErr;
            $this->listTypeErr = $listTypeErr;
            $this->priceErr = $priceErr;
        }

        public function  setPropTypeErr($propTypeErr){
            $this->propTypeErr = $propTypeErr;
        }

        public function  setLandErr($landErr){
            $this->landErr = $landErr;
        }

        public function  setBuildTypeErr($buildTypeErr){
            $this->buildTypeErr = $buildTypeErr;
        }

        public function  setBedRmErr($bedrmErr){
            $this->bedrmErr = $bedrmErr;
        }

        public function  setBathRmErr($bathrmErr){
            $this->bathrmErr = $bathrmErr;
        }

        public function  setListTypeErr($listTypeErr){
            $this->listTypeErr = $listTypeErr;
        }

        public function  setPriceErr($priceErr){
            $this->priceErr = $priceErr;
        }

        public function  getPropTypeErr(){
            return $this->propTypeErr;
        }

        public function  getLandErr(){
            return $this->landErr;
        }

        public function  getBuildTypeErr(){
            return $this->buildTypeErr;
        }

        public function  getBedRmErr(){
            return $this->bedrmErr;
        }

        public function  getBathRmErr(){
            return $this->bathrmErr;
        }

        public function  getListTypeErr(){
            return $this->listTypeErr;
        }

        public function  getPriceErr(){
            return $this->priceErr;
        }
    }

?>