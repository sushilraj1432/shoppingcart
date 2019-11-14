<?php 
session_start();

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
 	<div class="cantainer">
 	<h2 class="text-center text-success"> welcome <?php echo $_SESSION['username']; ?></h2>
 	<a href="logout.php>logout</a>
 
 </body>
 </html>