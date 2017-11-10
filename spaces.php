<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: index.php");
  }
  if(isset($_POST['logout'])){
    //echo "<script type='text/javascript'>alert('Dude!');</script>";
    unset($_SESSION['email']);
    header("Location: index.php");
  }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Siltalin Analytics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/spaces.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

    <style>
      /* The Overlay (background) */
      .overlay {
        /* Height & width depends on how you want to reveal the overlay (see JS below) */
        height: 100%;
        width: 0;
        position: fixed; /* Stay in place */
        z-index: 10000; /* Sit on top */
        left: 0;
        top: 0;
        background-color: rgb(0,0,0); /* Black fallback color */
        background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
        /* overflow-x: hidden; /* Disable horizontal scroll */
        transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
      }

      /* Position the content inside the overlay */
      .overlay-content {
        position: relative;
        /*top: 5%; */
        width: 100%; /* 100% width */
        text-align: center; /* Centered text/links */
        margin-top: 2%;
      }

      /* The navigation links inside the overlay */
      .overlay a {
        /* padding: 8px; */
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block; /* Display block instead of inline */
        transition: 0.3s; /* Transition effects on hover (color) */
      }

      /* When you mouse over the navigation links, change their color */
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }

      /* Position the close button (top right corner) */
      .overlay .closebtn {
        position: absolute;
        top: 0.5%;
        right: 0.5%;
        font-size: 30px;
      }

      /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
      @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
      }

      .bgimage{
        opacity: 0.2;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: auto;
        z-index: -1;
      }
    </style>
	</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
      <img class="bgimage" src="images/hexes.png">

			<!-- Main -->
				<div id="main">
					<div class="inner">
            <form method='post'>
      		      <input type="image" name="logout" value="Logout" alt="power" src="images/power-32.png" style="position: absolute; right: 1em; top: 1em;">
      		  </form>
						<section class="tiles">
              <article class="style0" onclick="location.href='siltalin.php'">
                <span class="image">
                  <img src="images/space-forecast.png" alt="" />
                </span>
                <a href="#">
                  <h2>Siltalin</h2>
                  <div class="content">
                    <p>Embedding within an application</p>
                  </div>
                </a>
              </article>
              <article class="style2" onclick="openNav(retail)">
								<span class="image">
									<img src="images/space-retail.png" alt="" />
								</span>
								<a href="#">
									<h2>Retail</h2>
									<div class="content">
										<p>Channel, store, and product inventory management.</p>
									</div>
								</a>
							</article>
							<article class="style1" onclick="openNav(sales)">
								<span class="image">
									<img src="images/space-sales.png" alt="" />
								</span>
                <a href="#">
								  <h2>Sales</h2>
								  <div class="content">
									  <p>Know where you stand and how to make your quota.</p>
								  </div>
                </a>
							</article>
              <article class="style2" onclick="openNav(chain)">
                <span class="image">
                  <img src="images/space-chain.png" alt="" />
                </span>
                <a href="#">
                  <h2>Supply Chain</h2>
                  <div class="content">
                    <p>Supply chain, inventory, and invoice management.</p>
                  </div>
                </a>
              </article>
							<article class="style3" onclick="openNav(marketing)">
								<span class="image">
									<img src="images/space-marketing.png" alt="" />
								</span>
								<a href="#">
									<h2>Marketing</h2>
									<div class="content">
										<p>Measure ROI and sales contributions.</p>
									</div>
								</a>
							</article>
              <article class="style3" onclick="openNav(insurance)">
                <span class="image">
                  <img src="images/space-insurance.png" alt="" />
                </span>
                <a href="#">
                  <h2>Insurance</h2>
                  <div class="content">
                    <p>Policies, claims, and customers</p>
                  </div>
                </a>
              </article>
							<article class="style6" onclick="openNav(education)">
								<span class="image">
									<img src="images/space-education.png" alt="" />
								</span>
								<a href="#">
									<h2>Higher Education</h2>
									<div class="content">
										<p>Measure student success, enrollment, and performance.</p>
									</div>
								</a>
							</article>
							<article class="style1" onclick="openNav(finance)">
								<span class="image">
									<img src="images/space-finance.png" alt="" />
								</span>
								<a href="#">
									<h2>Financial Services</h2>
									<div class="content">
										<p>Market share, brokers, advisors and more</p>
									</div>
								</a>
							</article>
							<article class="style6" onclick="openNav(human)">
								<span class="image">
									<img src="images/space-human.png" alt="" />
								</span>
								<a href="#">
									<h2>Human Resources</h2>
									<div class="content">
										<p>Retention, turnover, compensation, and effectiveness</p>
									</div>
								</a>
							</article>
							<article class="style4" onclick="openNav(exasol)">
								<span class="image">
									<img src="images/space-memory.png" alt="" />
								</span>
								<a href="#">
									<h2>Exasol</h2>
									<div class="content">
										<p>The power of in-memory</p>
									</div>
								</a>
							</article>
              <article class="style5" onclick="openNav(fleet)">
                <span class="image">
                  <img src="images/space-fleet.png" alt="" />
                </span>
                <a href="#">
                  <h2>Fleet Management</h2>
                  <div class="content">
                    <p>Planes. Trains. Automobiles. Covered wagons. Dog sleds.</p>
                  </div>
                </a>
              </article>
              <article class="style5" onclick="openNav(usage)">
                <span class="image">
                  <img src="images/space-usage.png" alt="" />
                </span>
                <a href="#">
                  <h2>Usage Tracking</h2>
                  <div class="content">
                    <p>User sessions, report and dashboard execution</p>
                  </div>
                </a>
              </article>
              <!--article class="style4" onclick="openNav(forecast)">
                <span class="image">
                  <img src="images/space-forecast.png" alt="" />
                </span>
                <a href="#">
                  <h2>Sales Forecasting?</h2>
                  <div class="content">
                    <p>Pipeline management and predicting future sales.</p>
                  </div>
                </a>
              </article-->
              <!--article class="style2" onclick="openNav(call)">
								<span class="image">
									<img src="images/space-call.png" alt="" />
								</span>
								<a href="#">
									<h2>Call Center?</h2>
									<div class="content">
										<p>Agent performance and customer satisfaction.</p>
									</div>
								</a>
							</article-->
						</section>
					</div>
				</div>

		</div>

    <!-- The overlay -->
    <div id="myNav" class="overlay">

      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>

      <!-- Overlay content -->
      <div id="embedDiv" class="overlay-content"></div>

    </div>

		<!-- Scripts -->
      <script src="//code.jquery.com/jquery-latest.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

      <script src="assets/js/spaces.js" type="text/javascript"></script>
      <script src="https://sde.birst.com/js/birst_embed.js" type="text/javascript"></script>

  		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/spaces-skel.min.js"></script>
			<script src="assets/js/spaces-util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/spaces-main.js"></script>

      <script>

        // Keeps track of the current space being viewed
        var currSpace = "";

        var serverUrl = "https://sde.birst.com";

        // Open the demo div when someone clicks on the demo box
        function openNav(demo) {
          // Check to see if it is the current space. If so don't reload.
          if (currSpace != demo.spaceId){
            // If different space, clear the embedded div
            $(".overlay-content").empty();
            // Load new demo
            loadDemo(demo);
          }

          document.getElementById("myNav").style.width = "100%";
        }

        // Close when someone clicks on the "x" symbol inside the overlay
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        // Posts the SSO info, gets the token, then requests the embedded content
        function ssoPost(ssoUrl, params, element) {
          $.post(ssoUrl, {}, function(data){
            var iframeUrl = serverUrl + "/SSO.aspx?BirstSSOToken=" + data + params;
            var hgt = $('#myNav').height() * .99 ;
            var opts = {autoSize: true, width: '100%', height: hgt, iframeSrc: iframeUrl};

            // Call Birst to get the embedded content and place in the specified element
            BirstConfig.create(element, opts);
          });
        }

        // Creates the SSO URL and set the embedded content request parameters
        function loadDemo(demo){

          // Construct the SSO URL
          var ssoUrl = "https://sde.birst.com/TokenGenerator.aspx?birst.username=" + demo.user + "&birst.ssopassword=" + demo.pass + "&birst.spaceId=" + demo.spaceId;
          // Construct the embedded content parameters
          var params =  "&birst.module=" + demo.module + "&birst.embedded=" + demo.embed + "&birst.hideDashboardNavigation=" + demo.nav + "&birst.hideDashboardPrompts=" + demo.prompts + "&birst.dashboard=" + demo.dash + "&birst.page=" + demo.page;

          // Set the current space ID for tracking
          currSpace = demo.spaceId;

          // Get the embedded content
          ssoPost(ssoUrl, params, "embedDiv");
        }

			</script>

	</body>
</html>
