<?php

//start session
session_start();



require_once('php/CreateDb.php');
require_once('./php/component.php');


//create instance of CreateDb class
$database = new CreateDb("Productdb", "Producttb");

if(isset($_POST['add'])){
   // print_r($_POST['product_id']);
   if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'],"product_id");
    //print_r($item_array_id);

    if(in_array($_POST['product_id'], $item_array_id)){
        echo "<script>alert('Product is already added in the cart..!')</script>";
        echo "<script>window.location = 'index.php'</script>";
    }else{

        $count = count($_SESSION['cart']);
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][$count] = $item_array;
        
    }

   }else{

    $item_array = array(
        'product_id' => $_POST['product_id']
    );

   //Create new session variable
   $_SESSION['cart'][0] = $item_array;
   print_r($_SESSION['cart']);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7131cc3534.js"></script>
    
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require_once('php/header.php');  ?>
    <div class="container">
    <div class="row text-center my-5">
        
        <?php
        $result = $database->getData();
        while($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
        ?> 
            
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php require_once('php/footer.php')  ?>