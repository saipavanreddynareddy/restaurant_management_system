<!DOCTYPE html>
<?php
session_start();

if (isset($_POST['loggedin'])) {
    // Database connection
    $servername = "localhost"; // Change this to your server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "flavourfusion"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['eml'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM myusers WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header('Location: index2.html');
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
	

    $conn->close();
}
	?>
<html>
<head>
		<title>FLAVOUR FUSION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors">

    <script src="https://kit.fontawesome.com/1e449bbfe1.js" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendors/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util3.css">
	<link rel="stylesheet" type="text/css" href="css/main3.css">


	<style>


body {
 
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}


</style>
</head>
<body>
<!-- 	<div class="container">
		<form method="post" action="index.php">
			<h1> <i> <b> Welcome Here! </h1><body>
			<marquee width="40%" height="90%">Yes! We are Open.
		</marquee>
		
		  <div class="form-group">
		    <label for="eml">Email</label>
		    <input type="email" class="form-control" id="eml" name="eml">
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="Check1" checked="checked" name="remember">
		    <label class="form-check-label" for="Check1">Remember Me</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="loggedin">Submit</button>
		</form>
    <p>New User?</p>
    <p><a href="regform.html">Click here to register</a></p>
	</div>-->



	<div class="limiter">
		<div class="container-login100" style="background-image:  url('https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="eml" id="eml" placeholder="Type your email">
						
                        
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Type your password">
						
					</div>

					<div class="text-left p-t-3 p-b-12">
						<input type="checkbox" class="form-check-input" id="Check1" checked="checked" name="remember">
						<label class="form-check-label" for="Check1">Remember Me</label>
					  </div>
					
					<!-- <div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div> -->
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="login100-form-btn" type="submit">
								Login
							</button> -->
							 <button type="submit" class="login100-form-btn" name="loggedin">Login</button>
						</div>
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="signup.html" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/bootstrap/js/popper.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/daterangepicker/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendors/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main3.js"></script>


	<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


</body>
</html>