<?php

require 'List.php';
require 'Task.php';

$list = new ToDoList();

$task_1 = new Task('Buy milk');
$task_2 = new Task('Buy bread');
$task_3 = new Task('Learn PHP');



$list->addTask($task_1);
$list->addTask($task_2);
//$list->addTask($task_3);

//$list->finishTask(0);

//$list->removeTask(0);

//$list->clearFinishedTasks();



require 'view.php';