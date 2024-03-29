<?php
if ($_SERVER["SERVER_PORT"] != 443) {
  $redir = "Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header($redir);
  exit();
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Siltalin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/extra.css" />
		<link rel="stylesheet" href="assets/css/login_style.css" type="text/css" />
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.0/release/featherlight.min.css" type="text/css" rel="stylesheet" />

		<script type="text/javascript">
		function do_login(){

			console.log("in do_login");

		  var email=$("#emailid").val();
		  var pass=$("#password").val();

		  if(email!="" && pass!="")
		  {
		    console.log("in IF");
		    $("#loading_spinner").css({"display":"block"});
		    $.ajax
		    ({
		      type:'post',
		      url:'do_login.php',
		      data:{
		        do_login:"do_login",
		        email:email,
		        password:pass
		      },
		      success:function(response) {
		        if(response=="success"){
		          console.log("success!");
		          window.location.href="spaces.php";
		        }else{
		          console.log("fail!");
		          $("#loading_spinner").css({"display":"none"});
		          alert("Wrong Details");
		        }
		      }
		    });
		  }else{
		    alert("Please Fill All The Details");
		  }

		  return false;
		}
		</script>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<div>
								<h1><a href="index.html" id="logo"><img src="images/siltalin01.png"></a></h1>
								<p class="tagline">There are vast, endless possiblities. Let us help you navigate them.</p>
							</div>
							<footer>
								<a data-popup-open="popup-2" href="#"><div id="login" class="btn">Log In</div></a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="#">Services</a>
									<ul>
										<li><a href="#">Paradigm Creation</a></li>
										<li><a href="#">Solution Leverage</a></li>
										<li><a href="#">Synergism</a></li>
										<li>
											<a href="#">Needle Movement &gt;</a>
											<ul>
												<li><a href="#">Verbiage Analysis</a></li>
												<li><a href="#">Deep Dives</a></li>
												<li><a href="#">Actionability Review</a></li>
												<li><a href="#">Smell Testing</a></li>
											</ul>
										</li>
										<li><a href="#">Deliverability</a></li>
									</ul>
								</li>
								<li><a href="#">Clients</a></li>
								<li><a href="#">Company</a></li>
								<li><a data-popup-open="popup-1" href="#">Contact Us</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Hi. Welcome to <strong>Siltalin</strong>.</h2>
						<p style="padding-left:25%; max-width:75%;">
						Whether you’re looking for innovative solutions to leverage new paradigms or you need evocative paradigms to produce
						next generation solutions, it all starts with Siltalin. We believe in giving you the power you need to bring your
						brilliance to market.
						</p>
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">

						<article>
							<a href="#" class="image featured"><img src="images/art-sales.png" alt="" /></a>
							<header>
								<h3><a href="#">Sales Analytics</a></h3>
							</header>
							<p>Know where you stand and how to make your quota.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-retail.png" alt="" /></a>
							<header>
								<h3><a href="#">Retail Analytics</a></h3>
							</header>
							<p>Channel, store, and product inventory management.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-marketing.png" alt="" /></a>
							<header>
								<h3><a href="#">Marketing Analytics</a></h3>
							</header>
							<p>Measure ROI and sales contributions.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-fleet.png" alt="" /></a>
							<header>
								<h3><a href="#">Fleet Management</a></h3>
							</header>
							<p>Planes. Trains. Automobiles. Covered wagons. Dog sleds.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-education.png" alt="" /></a>
							<header>
								<h3><a href="#">Higher Education</a></h3>
							</header>
							<p>Measure student success, enrollment, and performance.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-call.png" alt="" /></a>
							<header>
								<h3><a href="#">Call Center</a></h3>
							</header>
							<p>Agent performance and customer satisfaction.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/art-forecast.png" alt="" /></a>
							<header>
								<h3><a href="#">Sales Forecasting</a></h3>
							</header>
							<p>Pipeline management and predicting future sales.</p>
						</article>

					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Lost in the vastness of your space?</h3>
										</header>
										<p>We know the way. Let us guide you.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
											&copy;2017 Siltalin. All rights reserved. &nbsp;&nbsp;|&nbsp;&nbsp; Design: Raoul Duke
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<div class="popup" data-popup="popup-1">
			<div class="popup-inner">

					<div id="contactForm">
							<b>Contact us:</b>
							<input type="text" value="Your Name" onfocus="if (this.value=='Your Name') this.value='';" /><br/>
							<input type="text" onfocus="if (this.value=='Your Email') this.value='';" value="Your Email" /><br/>
							<input type="text" onfocus="if (this.value=='Subject') this.value='';" value="Subject"  /><br/>
							<input type="text" onfocus="if (this.value=='Message') this.value='';" value="Message"  /><br/>
							<br/>
							<a href="#"><div id="closeButton" class="btn" style="text-align:center; left:0;">Send</div></a>
					</div>

					<div id="contactInfo" style="text-align:center;">
						Siltalin Global Headquarters<br/>
						2353 Hillsdale Boulevard<br/> San Mateo, CA 94403<br/>
						<br/>
						Phone: 650 555 1212<br/>
						Fax: 650 555 1313<br/>
						<br/>
						Email: info@siltalin.com
					</div>

					<a class="popup-close" data-popup-close="popup-1" href="#">x</a>

			</div>
		</div>

		<div class="popup" data-popup="popup-2">
			<div class="popup-inner2">
				<div class="login-page">
					<div class="form">
						<form class="register-form">
							<input type="text" placeholder="name"/>
							<input type="password" placeholder="password"/>
							<input type="email" placeholder="email address"/>
							<button>Create</button>
							<p class="message">Already registered? <a href="#">Sign In</a></p>
						</form>
						<form id="login-form" method="post" action="do_login.php" onsubmit="return do_login();">
							<input type="email" placeholder="username" name="emailid" id="emailid" />
							<input type="password" placeholder="password" name="password" id="password" />
							<input class="btn" type="submit" name="login" value="Log In" id="login_button">
							<!--button class="btn">Login</button-->
							<p class="message">Not registered? <a href="#">Create an account</a></p>
							<p id="loading_spinner"><img src="images/loader1.gif"></p>
						</form>
					</div>
				</div>
				<a class="popup-close" data-popup-close="popup-2" href="#">x</a>
			</div>
		</div>

		<!-- Scripts -->
			<script src="//code.jquery.com/jquery-latest.js"></script>
			<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
			<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
			<!--script src="assets/js/jquery.min.js"></script-->
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<!-- Shows or hides popup divs -->
			<script>
				$(function() {
					var targetPopup;

					// Show popup
					$('[data-popup-open]').on('click', function(e) {
						targetPopup = jQuery(this).attr('data-popup-open');
						$('[data-popup="' + targetPopup + '"]').fadeIn(350);

						e.preventDefault();
					});

					// Hide popup on X
					$('[data-popup-close]').on('click', function(e) {
					 	targetPopup = jQuery(this).attr('data-popup-close');
						$('[data-popup="' + targetPopup + '"]').fadeOut(350);
						targetPopup = null;

						e.preventDefault();
					});

					// Hide popup on ESC key
					$(document).on('keydown', function(e) {
						// Check for ESC key
						if (e.keyCode === 27) {
							// Check to make sure a popup is actually visible
							if (targetPopup != null){
								$('[data-popup="' + targetPopup + '"]').fadeOut(350);
								targetPopup = null;
							}
						}
					});

				});

				// Toggle popup div between "Create an account" and "Sign In"
				$('.message a').click(function(){
				   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
				});

			</script>
	</body>
</html>
