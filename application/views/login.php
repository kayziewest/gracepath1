<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php require_once(APPPATH . 'views/include/tab.php'); ?>
	<link href="<?php echo base_url() ?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url() ?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link href="<?php echo base_url() ?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">





	<script>
		var check = function() {
			if (document.getElementById('password').value ==
				document.getElementById('cpassword').value) {
				document.getElementById('message').style.color = '#5dd05d';
				document.getElementById('message').innerHTML = 'Matched';
			} else {
				document.getElementById('message').style.color = '#f55252';
				document.getElementById('message').innerHTML = 'Not Matching';
			}
		}

		function alphaOnly(event) {
			var key = event.keyCode;
			return ((key >= 65 && key <= 90) || key == 8 || key == 32);
		};

		function checklen() {
			var pass1 = document.getElementById("password");
			if (pass1.value.length < 6) {
				alert("Password must be at least 6 characters long. Try again!");
				return false;
			}
		}
	</script>
</head>


<body>
	<script src="<?php echo base_url() ?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
		$(document).ready(function() {

		});
	</script>


	<div style="background: url('<?php echo base_url() ?>public/img/new/hms_login_bg.png'); " class="loginbg">

		<!-- </div>

	<div style="background: url('<?php echo base_url() ?>public/img/new/hms_login_bg.png'); 
    background-position:center;   height: 100%;  background-size: cover ; background-repeat: no-repeat "> -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="account-container">

						<div class="content clearfix">


							<form action="<?php echo base_url() ?>login/validate_login" method="post" id="frmLogin" name="frmLogin">

								<h1>Login </h1>

								<div class="login-fields">

									<p>Please provide your details</p>
									<br>
									<?php echo validation_errors(); ?>

									<?php

									if (isset($usernamelogin)) {
										$usernamelogin = $usernamelogin;
									} else {
										$usernamelogin = "";
									}

									if (isset($passwordlogin)) {
										$passwordlogin = $passwordlogin;
									} else {
										$passwordlogin = "";
									}

									?>


									<div class="field">
										<label for="username">Username</label>

										<?php
										echo form_input("username", $usernamelogin, "class='login username-field' placeholder='Username' required");
										?>
									</div> <!-- /field -->

									<div class="field">
										<label for="password">Password:</label>
										<input type="password" name="password" class="login password-field" placeholder="Password" required value="<?php echo $passwordlogin; ?>" />
									</div> <!-- /password -->

								</div>
								<div class="login-actions">
									<button class="button btn btn-primary btn-large">Log In</button>
								</div> <!-- .actions -->
							</form>

						</div> <!-- /content -->

					</div> <!-- /account-container -->
				</div>
			</div>
		</div>


	</div>

</body>

</html>