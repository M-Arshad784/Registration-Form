<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

	<title>PCS SYSTEM</title>


	<style type="text/css">
		.back_shop{
			background-color: #000000b5; 
			color: white; 
			padding: 10px; 
			font-weight: bold; 
			border-radius: 16px;
		}

		.back_shop:hover{
			background-color: white; 
			color : black;
		}
	</style>
</head>

<body>

	<!-- Start Header/Navigation -->
	<!-- <?php include('assets/menu.php')?>  -->
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero" style="background: #3b5d50; padding: 122px 0px; color: white;">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1 style="font-size: 60px; font-weight: bold;">Message Status</h1>
					</div>
				</div>
				<div class="col-lg-7">

				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->



	<div class="untree_co-section" style="padding: 100px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center pt-5">

					<h2 class="display-3 text-black" style="font-weight:  bold; color: #1e6c1e;">Thank you!</h2>
					<p class="lead mb-5" style="font-family: sans-serif; color: #0a1030; margin-top: 70px; font-size: 25px;">
						<?php
						if (isset($_GET['success'])) {
							echo base64_decode($_GET['success']);
						}
						?>
						. We Will Contact you within 24 hours.
					</p>
					<p><a href="index.php" class="btn btn-sm btn-outline-black back_shop">Back to shop</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Footer Section -->
	<footer class="footer-section" style="padding: 80px 0; background: #ffffff;">

		<div class="container relative">

			<div class="sofa-img">
				<!-- <img src="images/sofa.png" alt="Image" class="img-fluid"> -->
			</div>


			<div class="row g-5 mb-5">


				<div class="col-md-3">
					<ul class="list-unstyled custom-social" style="font-size: 20px; text-align: center;">
						<h4>Our Links</h4>

						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>Email Us</h4>
					<p><b>macoder55@gmail.com</b></p>
					<p><b>macoder66@gmail.com</b></p>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled">
						<h4>Contact Us</h4>
						<p>+92 301 301 7474</p>
						<p>+92 319 214 5502</p>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled">
						<h4>Address</h4>
						<p>1) Charsadda Road Landi Sarak Larama Essakhail Peshawar</p>
					</ul>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<strong>Schoole Creation From 1999 t0  &copy;<?php echo date("Y-m-d"); ?></strong>
						<a href="index.php"> PCS SYSTEM</a>.

					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><b>With Great Experience Teachers!</b></li>
							<li><b>Good Opportunity</b></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
</footer>
<!-- End Footer Section -->	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
