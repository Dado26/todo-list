<?php

require 'list.php';
require 'task.php';

$DoLista = new Todolist();

$note_1 = new Task('popravi auto');
$note_2 = new Task('napravi veceru');
$note_3 = new Task('završi spremanje');


$DoLista->addTask($note_3);
$DoLista->addTask($note_2);
$DoLista->addTask($note_1);

//$DoLista->finishedTask(0);

//$DoLista->finishedTask(1);
//$DoLista->finishedTask(2);


//$DoLista->removeTask(0);

$DoLista->showFinished();

//$DoLista->clearFinishedTask();



require 'view1.php';

