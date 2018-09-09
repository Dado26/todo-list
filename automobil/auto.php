<?php


class Auto{
    private $motor;
    
    
    public function getAuto(){
        return $this->motor;
    }
    
    public function addMotor(Motor $motor){
        $this->motor[] = $motor;
    }
    
    
        
}

