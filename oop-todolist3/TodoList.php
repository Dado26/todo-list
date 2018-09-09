<?php

class TodoList{
    
    protected $tasks;
    
   public function addTask(Task $tasks) {
        $this->tasks[] = $tasks;
    }
    
    public function ShowFinished(){
        foreach ($this->tasks as  $task) {
          if($task->IsFinished()){
          echo $task->text.'<br>';}
        }
    }
    
    public function ShowUnfinished(){
         foreach ($this->tasks as  $task){
             if($task->IsFinished()==false){
                 echo $task->text.'<br>';
             }
         }
    }
    
    public function clearTask($index){
        array_splice($this->tasks,$index, 1);
    }
    
    public function removeFinishedTask(){
         foreach ($this->tasks as $index=>$task) {
          if($task->IsFinished()){
              $this->clearTask($index);
          }
    }
         }
    
    public function getTasks(){
        return $this->tasks;
    }
  
}
