<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                    if(isset($_GET['success']) ){
                      echo '<h4 class="text-danger text-center">You have registred succeffuly</h4>';
                  }
                  if(isset($_GET['invalid']) ){
                      echo '<h4 class="text-danger text-center">Invalid Email or password</h4>';
                  }
                  ?>
                    
                    <form class="form-signin" action="action/login.php" method="POST" class="form-signin">
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    </form>
                </div>
                <a href="register.php" class="text-center new-account">Create an account</a>
            </div>
        </div>
    </div>
</body>
</html>