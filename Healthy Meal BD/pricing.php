<?php 
include_once 'database_connection/config.php';
$sql = "SELECT * FROM `meal` ORDER BY `meal`.`id` DESC";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Pricing</title>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.bundle.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="util.css">
		<link rel="stylesheet" type="text/css" href="extra.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.slim.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
<nav class="main-menu">
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li class="anything"><a href="pricing.php">Pricing</a></li>
			<li><a href="Subscriptions.html">Subscriptions</a>
				<ul>
					<li><a href="#">Regular</a></li>
					<li><a href="#">Standard</a></li>
					<li><a href="#">Premium</a></li>
				</ul>
			</li>
			<li><a href="login.php">Login</a></li>
			<li><a href="reg.php">Sign Up</a></li>
			<li><a href="admin.php">Admin</a></li>
			<li><a href="api.html">Find Us On Google Map</a></li>
		</ul>
	</nav>


	<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        </div>
    </div>

      <?php  
	
   while($res = mysqli_fetch_array($result)) { 
	
 
        echo'
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter breakfast" style="border: 0px solid gray; margin:4px">
        <img  height="300" width="500" src="data:image/png;base64,'.base64_encode($res['pic']).'" alt="Card image">
        <h6> Name : '.$res['name'].' </h6>                
        <h6> Price : '.$res['price'].' </h6>
        <h6> des : '.$res['des'].' </h6>
        </div>';

    }    
         
		
    ?>    
        </div>
    </div>
</section>

	
	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<li><a href="#">Next</a></li>
	</ul>
	
<!--======================================================= footer=================================================================== ===-->
<footer class="text-white text-center text-lg-start bg-dark">
	  
	  <div class="container p-4">
	
		<div class="row mt-4">
		  
		  <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4">About company</h5>
  
			<p>
				Welcome to HealthyMealBD, 
				your go-to destination for delicious and nutritious meals delivered straight to your door. 
			</p>
  
			<p>
				At HealthyMealBD, we believe in making healthy eating convenient and enjoyable for everyone.
			</p>
  
			<div class="mt-4">
			  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fa fa-twitter"></i></a>
			  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fa fa-linkedin"></i></a>
			  <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fa fa-instagram"></i></a>  
			</div>
		  </div>
		
		  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4 pb-1">Search something</h5>
  
			<div class="form-outline form-white mb-4">
			  <input type="text" id="formControlLg" class="form-control form-control-lg" />
	
			</div>
  
			<ul class="fa-ul" style="margin-left: 1.65em; padding-top: 10px;">
			  <li class="mb-3">
				<span class="fa-li"><i class="fa fa-home"></i><i class=></i></span><span class="ms-2">Bashundhara R/A, Dhaka</span>		
			  </li>
			  <li class="mb-3">
				<span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">healthymealbd@example.com</span>
			  </li>
			  <li class="mb-3">
				<span class="fa-li"><i class="fa fa-phone"></i></span><span class="ms-2">+49 XX XXX XXXX XXX XX</span>
			  </li>
			</ul>
		  </div>
		  
		  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4">Opening hours</h5>
  
			<table class="table text-center text-white">
			  <tbody class="fw-normal">
				<tr>
				  <td>Mon - Thu:</td>
				  <td>8am - 9pm</td>
				</tr>
				<tr>
				  <td>Fri - Sat:</td>
				  <td>8am - 1am</td>
				</tr>
				<tr>
				  <td>Sunday:</td>
				  <td>9am - 10pm</td>
				</tr>
			  </tbody>
			</table>
		  </div>
		  
		</div>
		
	  </div>
	  
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2), padding-top: 10px;">
		© 2020 Copyright:
		<a class="text-white" href="https://HealthymealBD.com/">HealthymealBD.com</a>
	  </div>
	  
	</footer>
  

</body>
</html>