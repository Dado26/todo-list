

<html>
    <head>
        <title>To Do List</title>
        <style>
            .finished {
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach($DoLista->GetTasks() as $index => $task): ?>
            
                <li class="<?php echo $task->DoesFinished() ? 'finished':'' ?>">
                    <?php echo $task->getText() ?>
                </li>
            
            <?php endforeach; ?>
        </ul>
    </body>
</html>