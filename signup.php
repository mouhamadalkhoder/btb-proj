
<?php

$conn = mysqli_connect("localhost","root","","btbgymdb");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['signup'])){

$username = $_POST['username'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['DOB'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql ="INSERT INTO `tbtrainee` (`trainee_id`, `trainee_name`, `trainee_last_name`, `Trainee_email`, `Trainee_password`, `trainee_DOB`, `Trainee_phone`, `Trainer_address`) VALUES (NULL,'".$username."','".$lname."','".$email."','".$password."','".$DOB."','".$phone."','".$address."')";
$res=mysqli_query($conn,$sql);


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Crossfit template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.2.1/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">

			<!-- Logo -->
			<div class="logo top_align">
				<a href="#"></a>
				<a class="navbar-brand mr-auto" href="#"><img src="images/logoblack.jpg" alt="FoxPro" /></a> 
				<div> <img src="images/logoblack.jpg" alt="FoxPro" /></a> <span></span></div>
				<div></div>
			</div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="classes.php">Classes</a></li>
					
					<li class="active"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right top_align d-flex flex-row align-items-center justify-content-start">
				<div class="search_container">
					<div class="search_form_container">
						<form action="#" class="search_form" id="search_form">
							<input type="text" class="search_input" required="required">
						</form>
					</div>
					<div class="search_button top_align">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
							<g>
								<path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"/>
							</g>
						</svg>
						
					</div>
				</div>
				<div class="contact_button trans_400"><a href="contact.html">Get in touch</a></div>
				
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_content d-flex flex-column align-items-center justify-content-start">
			<nav class="menu_nav">
				<ul class="d-flex flex-column align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="classes.php">Classes</a></li>
				
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	

	<!-- Contact -->
	<br>
	<br>
	<br>
	<div class="contact">
		<div class="container">
			<div class="row">
				
				
				<!-- Contact Form -->
				<div class="col-lg-6 contact_col">
					<div class="contact_form_container">
						<div class="contact_title"><h1>Sign Up</h1></div>
			
						<form action="#" class="contact_form" id="contact_form" method="Post">
						<input type="text" class="contact_form_input" placeholder="First name" required="required" name="username">
						<input type="text" class="contact_form_input" placeholder="last name" required="required" name="lname">
						<input type="text" class="contact_form_input" placeholder="Email" required="required" name="email">
						<input type="password" class="contact_form_input" placeholder="Password" required="required" name="password">
						<input type="date" class="contact_form_input" placeholder="Date of birth" required="required" name="DOB">
						<input type="text" class="contact_form_input" placeholder="Phone" required="required" name="Phone">
						<input type="text" class="contact_form_input" placeholder="Address" required="required" name="address">
					
										
							<button class="contact_form_button button" input type="submit" name="signup"><span>sign up</span></button>
							<div class="contact_title"><span>already  have an account?</span><a href="contact.php">sign in</a></div>
						</form>
					</div>
				</div>
				<!-- Contact Content -->
				<div class="col-lg-6 contact_col">
					<div class="contact_content">
					
						
						<div> <img src="images/gym8.jpg" alt="FoxPro" /></a> <span></span></div>
						
					</div>
				</div>

			</div>
		</div>
	</div>



	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">Get your <a href="#">subscription</a> now!</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 footer_col">
					<div> <img src="images/logoblack.jpg" alt="FoxPro" /></a> <span></span></div>
						<!-- Logo -->
						<div class="logo">
							<a href=""></a>
							<div> <span></span></div>
							<div>  </div>
						</div>

						<div class="footer_text">
							<p>CONTACT US TO KNOW MORE ABOUT OUT CUSTOMIZED PROGRAMS</p>
						</div>
						<div class="social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-1 footer_col">
						<div class="footer_column">
							<div class="footer_title"><h3>Useful Links</h3></div>
							<div class="footer_list">
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Subscriptions</a></li>
									<li><a href="#">Plans</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 footer_col">
						<div class="footer_column">
							<div class="footer_title"><h3>Features</h3></div>
							<div class="footer_list">
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Subscriptions</a></li>
									<li><a href="#">Plans</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 footer_col">
						<div class="footer_column">
							<div class="footer_title"><h3>About us</h3></div>
							<div class="footer_list">
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Subscriptions</a></li>
									<li><a href="#">Plans</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.2.1/popper.js"></script>
<script src="styles/bootstrap-4.2.1/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>