	    <?php 
    include_once("database_connection/config.php");
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sign in & Sign up</title>
<!--=========================================font======================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!--========================================css=======================================================-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.bundle.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="util.css">
		<link rel="stylesheet" type="text/css" href="extra.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===========================================js====================================================-->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.slim.min.js"></script>
<!--===============================================================================================-->

	</head>
	<body>

<!--==========================================MENU BAR=============================================-->
<nav class="main-menu">
		<ul>
			<li class="anything"><a href="index.html">HOME</a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li><a href="#">Meal Plans</a>
				<ul>
					<li><a href="#">Lean Gains</a></li>
					<li><a href="#">Energy Enhancement</a></li>
					<li><a href="#">Build Muscle</a></li>
					<li><a href="#">Fat loss</a>
					<li><a href="#">Maintainence</a></li>
				</ul>
			</li>
			<li><a href="#">Memberships</a>
				<ul>
					<li><a href="#">Regular</a></li>
					<li><a href="#">Silver</a></li>
					<li><a href="#">Gold</a></li>
					<li><a href="#">Premium</a></li>
				</ul>
			</li>
			<li><a href="login.php">Login</a></li>
			<li><a href="reg.php">Sign Up</a></li>
			<li><a href="admin.php">Admin</a></li>
			<li><a href="api.html">Find Us On Google Map</a></li>
		</ul>
	</nav>
		<div class="main">

<!--==================================Sign up form================================================-->
			<section class="signup">
				<div class="container">
					<div class="signup-content">
						<div class="signup-form">
							<h2 class="form-title">Sign up</h2>
							<form method="POST" class="register-form" id="register-form">
							<div class="form-group">
				
                </div>
                     <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                             <input type="text" name="email" id="email" placeholder="Your User Name" required="required"/>
                     </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <!-- PHP CODE---->
  <?php 

       
       if(isset($_POST['signup'])) {  
       
           $email = mysqli_real_escape_string($conn, $_POST['email']);
           $pass = mysqli_real_escape_string($conn, $_POST['password']);
           $re_pass = mysqli_real_escape_string($conn, $_POST['re_pass']);
       
           
           $sql = "SELECT * FROM `signup` WHERE `email` = '$email'";
           $result = mysqli_query($conn, $sql);          
           $count = mysqli_num_rows($result);
       
           if($count == 1) {
               echo '<a href="login.php"  style="color:red">Account already exists</a>';
           } else {
               if($pass == $re_pass) {
                   $sql = "INSERT INTO `signup`(`email`, `password`) VALUES ('$email', '$password')";
                   if (mysqli_query($conn, $sql)) {
                       echo '<h5>Registration Complete</h5>';
                   } else {
                       echo '<h2>Error: ' . mysqli_error($conn) . '</h2>';
                   }
               } else {
                   echo '<h2>Passwords do not match</h2>';
               }
           }
       
           mysqli_close($conn);
       }
       
      
    ?> 

                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

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