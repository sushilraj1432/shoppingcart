
<?php 
session_start();
//header('location:login.php');
$con = mysqli_connect('localhost','root');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7131cc3534.js">
    </script>
</head>
<body>
    <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-4">
                    <div id="login-box" class="col-md-12">
                        <form class="form" action="validation.php" method="POST">
                            <h3 class="text-center text-info"> OrderAprons Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span>
                                  <span><input id="remember-me" name="remember-me" type="checkbox"></span>
                                </label>
                                <br>
                                <input type="submit" name="submit"
                                class="btn btn-info ml-5"value="Submit">

                                <button class="btn btn-info"><a href="Ragistration.php" class="text-light"> Register here</a></button>
                            </div>

                           <!-- <div id="register-link" class="text-dark">
                              <button class="btn btn-info text-dark">
                                <a href="Ragistration.php" class="text-info">Register here</a> </button>
                            </div>
                            !-->
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>