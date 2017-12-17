<?php
    #Author: Mikhail Shaw
    class RValErrors{
        public $fnameErr = false;
        public $lnameErr = false;
        public $telErr = false;
        public $emailErr = false;
        public $trnErr = false;
        public $pwordErr = false;
        public $rpwordErr = false;

        public function setValErrors($fnameErr,$lnameErr,$telErr,$emailErr,$trnErr,$pwordErr,$rpwordErr){
            $this->fnameErr = $fnameErr;
            $this->lnameErr = $lnameErr;
            $this->telErr = $telErr;
            $this->emailErr = $emailErr;
            $this->trnErr = $trnErr;
            $this->pwordErr = $pwordErr;
            $this->rpwordErr = $rpwordErr;
        }

        public function  setFnameErr($fnameErr){
            $this->fnameErr = $fnameErr;
        }

        public function  setLnameErr($lnameErr){
            $this->lnameErr = $lnameErr;
        }

        public function  setTelErr($telErr){
            $this->telErr = $telErr;
        }

        public function  setEmailErr($emailErr){
            $this->emailErr = $emailErr;
        }

        public function  setTRNErr($trnErr){
            $this->trnErr = $trnErr;
        }

        public function  setPwordErr($pwordErr){
            $this->pwordErr = $pwordErr;
        }

        public function  setRPwordErr($rpwordErr){
            $this->rpwordErr = $rpwordErr;
        }

        public function  getFnameErr(){
            return $this->fnameErr;
        }

        public function  getLnameErr(){
            return $this->lnameErr;
        }

        public function  getTelErr(){
            return $this->telErr;
        }

        public function  getEmailErr(){
            return $this->emailErr;
        }

        public function  getTRNErr(){
            return $this->trnErr;
        }

        public function  getPwordErr(){
            return $this->pwordErr;
        }

        public function  getRPwordErr(){
            return $this->rpwordErr;
        }
    }

?>