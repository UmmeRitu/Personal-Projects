<?php
             session_start();
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
			<li><a href="index.html">HOME</a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li><a href="Subscriptions.html">Subscriptions</a>
				<ul>
					<li><a href="#">Regular</a></li>
					<li><a href="#">Standard</a></li>
					<li><a href="#">Premium</a></li>
				</ul>
			</li>
			<li class="anything"><a href="login.php">Login</a></li>
			<li><a href="reg.php">Sign Up</a></li>
			<li><a href="admin.php">Admin</a></li>
			<li><a href="api.html">Find Us On Google Map</a></li>
		</ul>
	</nav>
		
<!--=================================== Sign in  Form================================================ -->
		<div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="reg.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <!-------PHP CODE------->


                        <?php

include_once("database_connection/config.php");

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['signin'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM signup WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            if ($password === $user['password']) {
                $_SESSION['login_user'] = $email;
                 header('Location: welcome.php');
                 exit();
				 
            } else {
                echo "<p style='color:red'>Your Login Name or Password is invalid</p>";
            }
        } else {
            echo "<p style='color:red'>Your Login Name or Password is invalid</p>";
        }
    } else {
        echo "<p style='color:red'>Please enter both email and password</p>";
    }

    mysqli_close($conn);
}
?>
  <!-------PHP CODE------->
  
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your User Name" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://gmail.com/"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
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