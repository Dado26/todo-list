<?php

require 'task.php';
require 'TodoList.php';


$task = new Task('Napravi listu');
$task2 = new Task('pokazi listu');
$task3 = new Task('izbrisi listu');

$task3->finish();
$task2->finish();
$task->finish();

 $file = fopen('primer.txt','a');
 
 
 $write = fwrite($file, $task->text."\n");
 
 fclose($file);
 
 

$list = new TodoList();

$list->addTask($task);
$list->addTask($task2);
$list->addTask($task3);

$list->removeFinishedTask();


$list->ShowFinished();
//$list->ShowUnfinished();

require 'view.php';



 

//var_dump($task->IsFinished());
