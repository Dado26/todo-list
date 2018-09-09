<?php

class Task {
    private $text = '';
    private $finished = false;
    
    function __construct($text) {
        $this->text = $text;
    }
    
    public function finish() {
        $this->finished = true;
    }
    
    public function unfinish() {
        $this->finished = false;
    }
    
    public function isFinished() {
        return $this->finished;
    }
    
    public function getText() {
        return $this->text;
    }
}