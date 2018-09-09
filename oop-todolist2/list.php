<?php

class Todolist{
    private $task;
    
    public function GetTasks(){
        return $this->task;
    }
    
    public function addTask(Task $task){
        $this->task[] = $task;
    }
    
    public function removeTask($index){
        array_splice($this->task, $index, 1);
    }
    
    public function clearFinishedTask(){
        foreach ($this->task as $index => $task) {
            if($task->DoesFinished()){
                $this->removeTask($index);
            }
        }
    }
    
    public function finishedTask($index){
        $this->task[$index]->finished();
    }
    public function showFinished(){
        foreach ($this->task as $task){
            if($task){
               //echo 'zvršen je';
               var_dump($task);
            }
        }
    }
}