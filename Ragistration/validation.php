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
	$name=  $_POST['name'];
	$user= $_POST['user'];
	$pass = $_POST['password'];
	//$mobile = $_POST['mobile_number'];

	$query ="select * from signin where name ='$name' && password= '$pass' user='$user'";

   $result=mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

if ($num == 0) {
	$_SESSION['name']=$name;
	
	header('location:Address.php');
		}
  else{

	header('location:login.php');
}

  ?>
