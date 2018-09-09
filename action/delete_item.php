<?php
session_start();

$user = $_SESSION['user'];


if(empty($user)){
    header('location: login.php');
}


$item_id = $_GET['id'];
$user_id = $user['id'];

//create connection
$connection = mysqli_connect('localhost','root','','todo_list');

if(!$connection){
    die('Connection failed:'. mysqli_connect_error());
}


$sql = "DELETE FROM items WHERE id=$item_id AND user_id = $user_id";

if(mysqli_query($connection, $sql)){
    header('location: ../index.php');
}else{
    header('location: ../index.php?error=1');
}



