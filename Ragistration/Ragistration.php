<?php
 session_start();
//header('location:login.php');
 $con=mysqli_connect('localhost','root');

 if ($con) {
 	echo "connection successull";
 }
else
{
	echo "no connection";
}
	mysqli_select_db($con,'orderaprondb');
	$name = $_POST['name'];
	$user =$_POST['user'];
	$pass =$_POST['password'];
	$mobile =$_POST['mobile_number'];

$query ="select * from signin where name ='$name' && password= '$pass' user ='$user'";

   $result=mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "dublicate data";
	//header('location:Ragistration.php');

}
else{
	$qy = "insert into signin(name ,password,user) value ('$name','$pass','$user') ";
	mysqli_query($con,$qy);
}

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

                        <form class="form mt-5" action="login.php" method="POST" >
                            <h3 class="text-dark">OrderAprons  Regster</h3>
                                <div class="form-group">
                                    <label for="type" class="text-info">Name</label><br>
                                        <input type="text" name="name" class="form-control" placeholder="Enter the name">
                                    
                                </div>

                                    <div class="form-group">
                                    <label for="type" class="text-info">   Email</label><br>
                                        <input type="text" name="user" class="form-control" placeholder="Enter the Email">
                                            
                                </div>
                                    <label for="type" class="text-info" >Mobile Number</label>
                                    <div class="form-group input-group">
                                <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fa fa-phone max-width-10"></i></span>
                         </div>

    <select class="custom-select" style="max-width:80px;">
        <option selected="">+91(ind)</option>
        <option value="1">+92</option>
        <option value="2">+198</option>
        <option value="3">+701</option>
    </select>
      <input name="number" class="form-control" placeholder="Phone number" type="text">
    </div>

                               <div class="form-group">
                                    <label for="type" class="text-info">password</label><br>
                                        <input type="password" name="password" class="form-control" placeholder="Enter the password">
                                </div>
                                <div class="button btn row justify-content-center ml-5">
                                <button type="submit" class="align-items-center btn-info btn justify-content-center  ml-5" name="submit">submit</button>
                                    </div>


                        </form>


                    </div>
                </div>
                </div>
            </div>


</body>
</html>