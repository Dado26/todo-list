<?php

class ToDoList {
    private $tasks;
    
    public function getTasks(){
        return $this->tasks;
    }
    
    public function addTask(Task $task) {
        $this->tasks[]= $task;
    }
    
    public function removeTask($index) {
        array_splice($this->tasks, $index, 1);
    }
    
    public function clearFinishedTasks() {
        foreach($this->tasks as $index => $task) {
            if( $task->isFinished() ){
                $this->removeTask($index);
            }
        }
    }
    
    public function finishTask($index) {
        $this->tasks[$index]->finish();
    }
}