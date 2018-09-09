<?php


class Motor{
    private $finished = false;
    private $kw = '';
    
    
    public function __construct($kw) {
        $this->kw = $kw;
    }
    
    public function getKw(){
        return $this->kw;
    }
            
    public function Doesfinish(){
        return $this->finished;
    }
    
    public function IsFinished(){
        $this->finished = true;
    }
    
    public function NotFinshed(){
        $this->finished = false;
    }
    
}