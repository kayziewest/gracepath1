<!DOCTYPE html>
<html lang="en">

<head>

	<head>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Payroll Management System -->
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="4635770289" data-ad-format="auto"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>






		<meta charset="utf-8">
		<title>Gracepath Diagnostic Center</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
		<meta content="free live demo hms,free live demo hospital management system,live demo,demo,live,hospital management system live demo,hospital management system free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,hospital management system,hospital,management,system,solution,online demo,demo hospital management system,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
		<meta content="Jayson Sarino" name="author">

		<meta property="og:site_name" content="Hospital Management System Free Trial Demo">
		<meta property="og:title" content="Hospital Management System">
		<meta property="og:description" content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
		<meta property="og:type" content="website">
		<meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
		<meta property="og:url" content="http://hms-demo.jaysonsarino.com/">

		<link href="<?php echo base_url() ?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

		<link href="<?php echo base_url() ?>public/login/css/font-awesome.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

		<link href="<?php echo base_url() ?>public/login/css/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url() ?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">






	<body bgcolor="#FFFFFF">
		<script src="<?php echo base_url() ?>public/login/js/jquery-1.7.2.min.js"></script>
		<script language="javascript">
			$(document).ready(function() {

			});
		</script>



		<div style="background: #FFFFFF url('<?php echo base_url() ?>public/img/new/hms_login_bg.png'); background-position: center; background-size:cover; z-index: 9999; width: 100%; height: 100%; position: absolute; top: 0; left: 0; ">




			<div class="row">
				<div class="col-md-12">
					<table width="100%" border="0">
						<tr>
							<td colspan="2" align="center">
								<div style="background: transparent url('<?php echo base_url() ?>public/img/new/hms_logo.png') no-repeat center; height:111px; margin-bottom:-50px; padding-top:120px;"></div>
							</td>
						</tr>
						<tr>
							<td width="50%" align="center">

								<div style="border:1px solid #CCC; background:#FFF; margin-top:-50px;">
									<h3> Gracepath Diagnosis Center</h3><br>
									<center><iframe width="560" height="315" src="https://www.gracepath.com" frameborder="0" allowfullscreen></iframe></center>
									<br>
									For more information and enquiry <br>
									Email address: admin@gracepath.com<br>
									Website: <a href="http://www.gracepath.com" target="_blank">www.gracepath.com</a><br>
									Skype: 7<br><br><br><br><br>
								</div>

							</td>
							<td width="50%">

								<div class="account-container">

									<div class="content clearfix">


										<form action="<?php echo base_url() ?>login/validate_login" method="post" id="frmLogin" name="frmLogin">

											<h1>Live Demo Login</h1>

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
												<button class="button btn btn-primary btn-large">Log In </button>
											</div> <!-- .actions -->
											<div class="field" style="margin-bottom: 15px;">
												<strong>Administrator Login</strong><br>
												Username: demo-hmsh<br>
												Password: hospital
											</div>

											<div class="field" style="margin-bottom: 15px;">
												<strong>Nurse Login</strong><br>
												Username: nurse1<br>
												Password: nurse1
											</div>

											<div class="field" style="margin-bottom: 15px;">
												<strong>Doctor Login</strong><br>
												Username: doctor1<br>
												Password: doctor1
											</div>

											<div class="field" style="margin-bottom: 15px;">
												<strong>Receptionist Login</strong><br>
												Username: receptionist<br>
												Password: demo-receptionist
											</div>
										</form>

									</div> <!-- /content -->

								</div> <!-- /account-container -->
							</td>
						</tr>
					</table>
				</div>
			</div>



		</div>





		<script src="<?php echo base_url() ?>public/login/js/bootstrap.js"></script>

		<script src="<?php echo base_url() ?>public/login/js/signin.js"></script>
	</body>

</html>