<?php
session_start();
$user = $_SESSION['user'];

if(empty($user)){
    header('location: login.php');
}
//create connection
$conn = mysqli_connect('localhost','root','','todo_list');

//check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
$user_id = $user['id'];

$sql = "SELECT id, content, completed FROM items WHERE user_id=$user_id ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
                <div class="todo-list-box">
                    <div class="user-info">
                        <div class="user pull-left">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php echo $user['first_name'].' '.$user['last_name']?>
                        </div> 
                        <a href="action/logout.php" class="btn btn-sm btn-danger pull-right">Logout</a>
                    </div>
                    <div class="todolist not-done">
                        <h1>Todo List</h1>
                        
                        <form action="action/create_item.php" method="POST">
                            <input type="text" name="item" class="form-control add-todo" placeholder="Add new item" required minlength="2">
                            <button class="btn btn-primary add-new-todo" type="submit">Add</button>
                        </form>

                        <hr>
                        <ul id="sortable" class="list-unstyled">
                             <?php
                                   /* moz aj takto za check aj za unchecked
                                     if($item['completed']==1){
                                        $completed = 'check';
                                    }else{
                                        $completed = 'unchecked';
                                    }*/
                             ?>
                            
                            <?php  while($item = mysqli_fetch_assoc($result)): ?>
                            <li class="ui-state-default">
                                <div class="checkbox">
                                    <a href="action/set_completed.php?id=<?php echo $item['id'] ?>&state=<?php echo ($item['completed']) ? 0:1 ?>">
                                        <span class="glyphicon glyphicon-<?php echo ($item['completed']) ? 'check' : 'unchecked' ?>"></span>
                                    </a>
                                    <label style="<?php echo ($item['completed']) ? 'text-decoration:line-through' : '' ?>"><?php echo $item['content'] ?> </label>
                                    <a href="action/delete_item.php?id=<?php echo $item['id'] ?>" class="btn btn-danger btn-sm pull-right btn-delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </li>
                            
                            <?php endwhile ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>