<?php 
session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>delivery address</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7131cc3534.js">
    </script>
</head>
<body>
	 <div class="container">
     <div class="card mt-5 row justify-content-center"style="width: 300px;">
      <button class="btn btn-warning btn"> <a href="main.php"> continue </a></button>
    </div>
      <h2 class="text-center text-success"> welcome to <?php echo $_SESSION['username']; ?></h2>

                      <h3 class="text-dark">Select a delivery address</h3>
                      <p class="text-dark"  >Is the address you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button</p>
                      <div class="col-md-6">
                      <form class="form mt-5" action="Shoppign Cart\cart.php" method="POST" >
                      <div class="form-group">
                      <label for="type" class="text-dark">Full name: </label><br>
                       <input type="text" name="user" class="form-control" placeholder="">
                                   </div>
                                   <label for="type" class="text-dark" >Mobile Number</label>
                                   <div class="form-group input-group">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text"></i></span>
                                   </div>
					<select class="custom-select" style="max-width:80px;">
      				<option selected="">+91(ind)</option>
        <option value="1">+92</option>
        <option value="2">+198</option>
        <option value="3">+701</option>
    						</select>
     				 <input name="number" class="form-control" placeholder="" type="text">
                     </div>
					 <div class="form-group">
                     <label for="type" class="text-dark">  Pincode:</label><br>
                     <input type="text" name="user" class="form-control" placeholder="">
                 <div class="form-group">
                      <label for="type" class="text-dark"> Flat, House no., Building, Company, Apartment:
                      </label><br>
                      <input type="text" name="password" class="form-control" placeholder="">
                  </div>
				<div class="form-group">
                       <label for="type" class="text-dark">  Area, Colony, Street, Sector, Village: </label><br>
                       <input type="text" name="user" class="form-control" placeholder="">
                 <div class="form-group">
                             <label for="type" class="text-dark">Landmark e.g. near apollo hospital:</label><br>
                             <input type="text" name="password" class="form-control" placeholder="e. g  dehradun railway station">
                                </div>


                                 <div class="form-group">
                                    <label for="type" class="text-dark"> Town/City: 
 </label><br>
                                        <input type="text" name="user" class="form-control" placeholder=>
                                            
                                     <div class="form-group">
                                    <label for="type" class="text-dark">State: </label><br>
                                        <input type="text" name="password" class="form-control">
                                </div>


                                  <select class="custom-select" style="max-width:500px;">
        <option selected="">select an Address Type</option>
        <option value="1">office(p am to 6 pm delivery)</option>
        <option value="2">Home(7 am to 9 pm delivery)</option>
    </select>
    		</div>
                                <div class="bth-group row justify-content-center" style="width: 300px; margin-left: 75px;">
                                <button type="submit" class="align-items-center btn-warning btn btn-block" name="submit">submit</button>
                                    </div>
                                </form>


                          </div>
                       </div>
            </div>


</body>
</html>