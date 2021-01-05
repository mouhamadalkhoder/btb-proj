<!DOCTYPE html>
<html lang="en">
<head>
<title>Crossfit</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Crossfit template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.2.1/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="#portfolio">Pathes</a></li>
					
					<li><a href="contact.php">Contact</a></li>
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
				<div class="contact_button trans_400"><a href="login.html">Login</a></div>
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
					<li><a href="#portfolio">Pathes</a></li>
			
					<li><a href="contact.php">Contact</a></li>
					<li><a href="contact.php">Login</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="slide_title">
											<div> <span>BITE THE BULLET</span></div>
											<div>
												YOUR CHOSEN </div>
											<div>CROSSFIT BASED PROGRAMMING</div>
											
											
										</div>
										<div class="button slide_button"><a href="#">Get Started</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/gym7.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="slide_title">
											<div>Don't stop</div>
											<div>when you're tired.</div>
											<div>Stop when</div>
											<div>you’re <span>done</span></div>
										</div>
										<div class="button slide_button"><a href="#">Get Started</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/gym6.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="slide_title">
											<div>Don't stop</div>
											<div>when you're tired.</div>
											<div>Stop when</div>
											<div>you’re <span>done</span></div>
										</div>
										<div class="button slide_button"><a href="#">Get Started</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>

		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				
				<!-- Feature -->
				<div class="col-lg-3 icon_box_col">
					<div class="icon_box text-center d-flex flex-column align-items-center justify-content-start">
						<div class="icon_box_icon d-flex flex-column align-items-center justify-content-end">
							<img class="svg" src="images/medal.svg" alt="https://www.flaticon.com/authors/prettycons">
						</div>
						<div class="icon_box_title"><h3>Award winning Gym</h3></div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et orci nec leo aliquet eleifend.</p>
						</div>
					</div>
				</div>

				<!-- Feature -->
				<div class="col-lg-3 icon_box_col">
					<div class="icon_box text-center d-flex flex-column align-items-center justify-content-start">
						<div class="icon_box_icon d-flex flex-column align-items-center justify-content-end">
							<img class="svg" src="images/dumbbell.svg" alt="https://www.flaticon.com/authors/prettycons">
						</div>
						<div class="icon_box_title"><h3>Award winning Gym</h3></div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et orci nec leo aliquet eleifend.</p>
						</div>
					</div>
				</div>

				<!-- Feature -->
				<div class="col-lg-3 icon_box_col">
					<div class="icon_box text-center d-flex flex-column align-items-center justify-content-start">
						<div class="icon_box_icon d-flex flex-column align-items-center justify-content-end">
							<img class="svg" src="images/water.svg" alt="https://www.flaticon.com/authors/prettycons">
						</div>
						<div class="icon_box_title"><h3>Award winning Gym</h3></div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et orci nec leo aliquet eleifend.</p>
						</div>
					</div>
				</div>

				<!-- Feature -->
				<div class="col-lg-3 icon_box_col">
					<div class="icon_box text-center d-flex flex-column align-items-center justify-content-start">
						<div class="icon_box_icon d-flex flex-column align-items-center justify-content-end">
							<img class="svg" src="images/weightlifting.svg" alt="https://www.flaticon.com/authors/prettycons">
						</div>
						<div class="icon_box_title"><h3>Award winning Gym</h3></div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et orci nec leo aliquet eleifend.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Subscription -->

	<div class="sub container_reset">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- Subscription Content -->
				<div class="col-xl-6">
					<div class="sub_content">
						<div class="section_title sub_title"><h1>WHAT IS<br><span style="COLOR:rgba(255,153,8,0.8);">BITE THE BULLET ?</span></h1></div>
						<div class="sub_text">
							<h4>IT'S A CROSSFIT BASED PROGRAMMING offering 4 paths of CrossFit Training</h4>
							<div><h6>It is a Programming for those who are willing to work on their craft to become
								better athletes and improve their athletic performance.<br> 
								We've combined 10+ years of experience in multiple different sports (Swimming/Running/Military Training/International Level CrossFit Competitions/ CrossFit and weightlifting seminars/ Sports Nutrition Experience, etc.) to provide you with the best training experience.
							   <br>Very affordable pricing whether you choose a path mentioned above or a personalized/ customized training plan !!
							   </div></h4>
						</div>
					
						<div class="button sub_button"><a href="#">Get Started</a></div>
					</div>
				</div>

				<!-- Subscription Image -->
				<div class="col-xl-6">
					<div class="sub_image">
						<div class="background_image" style="background-image:url(images/what.jpg)"></div>
						<img src="images/what.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Portfolio -->
      <div id="portfolio"></div>
	<div class="portfolio">
		<div class="portfolio_slider_container">
			<div class="owl-carousel owl-theme portfolio_slider">
				
				<!-- Slide -->
				<div class="portfolio_slide">
					<img src="images/gym2.jpg" alt="">
					
					<div class="portfolio_overlay d-flex flex-column align-items-center justify-content-center">
						<div class="text-center">
							<div class="portfolio_icon ml-auto mr-auto"></div>
							<div >Strength Builder: For any athlete wanting to mainly improve his overall weightlifting strength focusing on the snatch, clean & jerk, squats, deadlifts and presses in all its forms</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="portfolio_slide">
					<img src="images/gym3.jpg" alt="">
				
					<div class="portfolio_overlay d-flex flex-column align-items-center justify-content-center">
						<div class="text-center">
							
							<div>Engine Builder: For any athlete wanting to mainly improve his/her aerobic capacity using running, swimming, assault bike and erging machines (row/ski/bike)</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="portfolio_slide">
					<img src="images/gym4.jpg" alt="">
					
					<div class="portfolio_overlay d-flex flex-column align-items-center justify-content-center">
						<div class="text-center">
						
							<div>Gymnastics Strength: For any athlete wanting to mainly improve his overall gymnastic Endurance/Strength focusing on bar muscle ups, pullups, toes to bar, chest to bar, ring muscle ups, pistols, ring dips, etc. ..</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="portfolio_slide">
					<img src="images/gym5.jpg" alt="">
					<a href="#"></a>
					<div class="portfolio_overlay d-flex flex-column align-items-center justify-content-center">
						<div class="text-center">
						
							<div>Crossfit Path: For a general and broad programming focusing on getting good in everything. An all round programming focusing on improving every aspect of the game simultaneously.</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	

  



	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><h1>Testimonials</h1></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col-xl-10 offset-xl-1">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							<div>
								<div class="test_text text-center">
									<p>I just want to thank Johnny and Wafa for their effort and their investment in me. It is spectacular !</p>
								</div>
								<div class="test_author text-center">
									<div class="test_author_image ml-auto mr-auto"><img src="images/test.jpg" alt=""></div>
									<div class="test_author_name"><a href="#">Bahaa</a></div>
									<div class="test_author_title">Crossfit </div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="test_text text-center">
									<p>I just wanted to sincerely thank you for the opportunity of training with you !</p>
								</div>
								<div class="test_author text-center">
									<div class="test_author_image ml-auto mr-auto"><img src="images/test.jpg" alt=""></div>
									<div class="test_author_name"><a href="#">Habiba</a></div>
									<div class="test_author_title">Crossfit </div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="test_text text-center">
									<p>Pellentesque commodo finibus molestie. Nunc sit amet aliquet nisl, consequat laoreet sem.</p>
								</div>
								<div class="test_author text-center">
									<div class="test_author_image ml-auto mr-auto"><img src="images/test.jpg" alt=""></div>
									<div class="test_author_name"><a href="#">James Smith</a></div>
									<div class="test_author_title">Crossfit Coach</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Plans -->

	<div class="plans">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/plans.jpg" data-speed="0.8"></div>
		<div class="plans_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><h1>Choose a plan</h1></div>
				</div>
			</div>
			<div class="row plans_row">
				
				<!-- Plan -->
				<div class="col-lg-4">
					<div class="plan d-flex flex-column align-items-center justify-content-start">
						<div class="plan_price">$0</div>
						<div class="plan_name"><h3>Free Crossfit Trial</h3></div>
						<div class="plan_list">
							<ul class="text-center">
								<li>1 Day Free Trial</li>
								<li>1 Sauna Access</li>
								<li>No Risks & No Obligations</li>
							</ul>
						</div>
						<div class="button plan_button"><a href="#">Get it now</a></div>
					</div>
				</div>

				<!-- Plan -->
				<div class="col-lg-4">
					<div class="plan plan_center d-flex flex-column align-items-center justify-content-start">
						<div class="plan_price">$30</div>
						<div class="plan_name"><h3>Free Crossfit Trial</h3></div>
						<div class="plan_list">
							<ul class="text-center">
								<li>Basic Sub</li>
								<li>Sauna Access</li>
								<li>Unlimited access before 10AM</li>
							</ul>
						</div>
						<div class="button plan_button"><a href="#">Get it now</a></div>
					</div>
				</div>

				<!-- Plan -->
				<div class="col-lg-4">
					<div class="plan d-flex flex-column align-items-center justify-content-start">
						<div class="plan_price">$55</div>
						<div class="plan_name"><h3>Unlimited Sub</h3></div>
						<div class="plan_list">
							<ul class="text-center">
								<li>Unlimited Access</li>
								<li>Unlimited Sauna Access</li>
								<li>Assisted Training</li>
							</ul>
						</div>
						<div class="button plan_button"><a href="#">Get it now</a></div>
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
					<div class="cta_content text-center">Get your <a href="contact.php">subscription</a> now!</div>
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
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>