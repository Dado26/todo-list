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
            <?php foreach($list->getTasks() as $index => $task): ?>
            
                <li class="<?php echo $task->isFinished() ? 'finished':'' ?>">
                    <?php echo $task->getText() ?>
                </li>
            
            <?php endforeach; ?>
        </ul>
    </body>
</html>
