<?php

class Task{
    private $text= '';
    private $finished = false;
    
    public function __construct($text) {
        $this->text = $text;
    }
    
    public function finished(){
        $this->finished = true;
    }
    
    public function unfinished(){
        $this->finished = false;
       
    }
    
    public function DoesFinished() {
        return $this->finished;
    }
    
    public function getText() {
        return $this->text;
    }
}