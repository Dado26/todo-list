
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
      <?php foreach($list->getTasks() as $task): ?>
        <li class="<?php echo $task->IsFinished() ? 'finished' : ''  ?>">
        <?php echo $task->text ?>
        </li>
       <?php endforeach; ?>
    </ul>
        
     <ul> 
         <li>
      <?php $list->ShowFinished(); ?>
        </li>
        
          <li>
      <?php $list->ShowUnfinished(); ?>
        </li>
   
     
    </ul>
        
        
    </body>
            
</html>