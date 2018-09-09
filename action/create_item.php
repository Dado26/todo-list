<?php
session_start();

$user = $_SESSION['user'];

if(empty($user)){
    header('location: login.php');
}

//create connection
$conn = mysqli_connect('localhost','root','','todo_list');

//get item from post and escape
$item = mysqli_real_escape_string($conn, $_POST['item']);
// Check connection
if(!$conn){
    die('Connection failed:'. mysqli_connect_error());
}

$user_id = $user['id'];

$sql = "INSERT INTO items (user_id, content, created_at)"
        . " VALUES ('$user_id', '$item', NOW())";

if(mysqli_query($conn, $sql)){
    header('location: ../index.php');
}else{
    echo "Error: ".mysqli_error($conn);
}
mysqli_close($conn);
