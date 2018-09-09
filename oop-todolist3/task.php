<?php

class Task{
    public $text = ''.'<br>';
    private $finished = false;
    
    function __construct($text) {
        $this->text = $text;       
    }
    
   public function finish(){
   $this->finished = true;
   }
   
   public function unfinish(){
       $this->finished = false;   }
   
   public function IsFinished(){
       return $this->finished;              
   }
}