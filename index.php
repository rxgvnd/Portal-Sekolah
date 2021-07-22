<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
    session_start();
    ?>
	<title>Login U-SCHOOL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="extra/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="extra/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="extra/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="extra/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="extra/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="extra/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="extra/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="extra/css/main.css">
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="controller/login.php" method="post" >
					<span class="login100-form-title p-b-43">
						Login U-SCHOOL
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" class="form_login" required="required">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" class="form_login" required="required">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" class="tombol_login">
							Login
						</button>
					</div>

					<?php 
	            		if(isset($_GET['pesan'])){
		        		if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-danger' role='alert' style='margin-top:10px; text-align:center;'>
  								ID atau password anda salah!
					 		 </div>";
                    	}
						}
					?>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="https://facebook.com" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="https://twitter.com" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
					
				</form>

				
				<div class="login100-more" style="background-image: url('extra/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	<script src="extra/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="extra/vendor/animsition/js/animsition.min.js"></script>
	<script src="extra/vendor/bootstrap/js/popper.js"></script>
	<script src="extra/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="extra/vendor/select2/select2.min.js"></script>
	<script src="extra/vendor/daterangepicker/moment.min.js"></script>
	<script src="extra/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="extra/vendor/countdowntime/countdowntime.js"></script>
	<script src="extra/js/main.js"></script>
</body>
</html>