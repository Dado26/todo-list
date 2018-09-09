<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="account-wall">
                    
              <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120">
                    
              <?php
              if (isset($_GET['validation_error'])){
                  if($_GET['validation_error']==1){
                      echo '<h4 class="text-danger text-center"> Please fill out all field</h4>';
                  }
                  if($_GET['validation_error']== 2){
                      echo '<h4 class="text-danger text-center">Password must be at least 6 character</h4>';
                  }
              }
              ?>
              
              <form action="action/create_user.php" method="POST" class="form-signin">
                        <input type="text" name="first_name" class="form-control" placeholder="First name" autofocus>
                        <input type="text" name="last_name" class="form-control" placeholder="Last name" autofocus>
                        <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password">

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                    </form>
                </div>
                <a href="login.php" class="text-center new-account">Already have an account?</a>
            </div>
        </div>
    </div>
</body>
</html>