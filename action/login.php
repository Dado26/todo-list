<?php



//create connection
$connection = mysqli_connect('localhost','root','','todo_list');

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

if(!$connection){
    die('Connection failed:'. mysqli_connect_error());
}

$password = hash('sha256', $password);

$sql = "SELECT id, email, first_name, last_name FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($connection, $sql);

/*echo 'Error: '.mysqli_error($connection);
var_dump($result);die;*/

if(mysqli_num_rows($result)>0){
    //yep, user exists
    session_start();
    
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    
    header('location: ../index.php');
}else{
    //nope
    header('location:../login.php?invalid=1');
}