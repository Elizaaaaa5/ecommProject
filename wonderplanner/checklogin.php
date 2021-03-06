<?php include('server.php') ?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wonder Planner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--===============================================================================================-->
		<!--<link rel="icon" type="image/png" href="assets/Login_v1/images/icons/favicon.ico"/>-->
		<!--===============================================================================================-->
		<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
		<!===============================================================================================-->
			<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/animate/animate.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/css/util.css">
			<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/css/main.css">
		<!==============================================================================================-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
					   <?php include("header.php");?>
					</div>
				</div>
		<div class="wrapper style2">
		<section>
				<div class="title">Premium Member Packages</div>
										
						<header class="style1" align="right">
							<h2>Exclusive Packages for Our Premium Members</h2>
						</header>
						
						<br/>
						<br/>
						<br/>
						<br/>
					<?php
						// Starting the session
						session_start();

						$login_redirect = "Login.php";
						
						// Checking if the session is set
						if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name'])){
						
						echo 'Please log in to view this page. You will be redirected in 5 seconds.';
						
						echo '<META HTTP-EQUIV=REFRESH CONTENT="5; '.$login_redirect.'">';
						
						exit;
						}else{
							echo 'Welcome back, ' . '$EMAIL' . '!';
						}
					?>
					
		</section>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
				    <?php include("footer.php");?>
				</div>

		</div>




		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/bootstrap/js/popper.js"></script>
				<script src="assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/select2/select2.min.js"></script>

			<!--===============================================================================================-->
				<script src="assets/Login_v1/js/main.js"></script>

	</body>
</html>