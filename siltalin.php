<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: index.html");
  }
  if(isset($_POST['logout'])){
    //echo "<script type='text/javascript'>alert('Dude!');</script>";
    unset($_SESSION['email']);
    header("Location: index.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Siltalin</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <!-- Popup dialogs -->
    <link href="assets/css/popup.css" rel="stylesheet">

    <!-- Checkboxes -->
    <link href="assets/css/radioAndCheckboxes.css" rel="stylesheet">

    <style>
      .body {
        background: #F7F7F7;
      }
      #birst {
        width: 100%;
        height: 100%;
        /*overflow: hidden !important;*/
      }
      .bcontainer {
        /*position: absolute;
        top: 50%;
        left: 50%;
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);*/
      }

      ul>li.hz{
        display: inline-flex !important;
      }

    </style>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" id="leftcol">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="spaces.php" class="site_title"><i class="fa fa-paw"></i> <span>Siltalin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Han</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a onClick="openHome()"><i class="fa fa-home"></i> Home </span></a>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Dashboards <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="hz">
                        <a href="#" onclick="openDemo(retail,false)">Retail</a>
                        <a href="#" data-popup-open="retail"><span id="retail" class="glyphicon glyphicon-filter"></span></a>
                      </li>
                      <li class="hz">
                          <a href="#" onclick="openDemo(sales,false)">Sales</a>
                          <a href="#" data-popup-open="sales"><span class="glyphicon glyphicon-filter"></span></a>
                      </li>
                      <li><a href="#" onclick="openDemo(chain,false)">Supply Chain</a></li>
                      <li><a href="#" onclick="openDemo(marketing)">Marketing</a></li>
                      <li><a href="#" onclick="openDemo(insurance)">Insurance</a></li>
                      <li><a href="#" onclick="openDemo(education)">Education</a></li>
                      <li><a href="#" onclick="openDemo(finance)">Finance</a></li>
                      <li><a href="#" onclick="openDemo(human)">Human Resources</a></li>
                      <li><a href="#" onclick="openDemo(exasol)">Exasol (In-memory)</a></li>
                      <li><a href="#" onclick="openDemo(usage)">Usage Tracking</a></li>
                      <!--li><a href="#" onclick="openDemo(fleet)">Fleet</a></li-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" onclick="openReport(pipeline)">Pipeline</a></li>
                      <li><a href="#" onclick="openReport(returns)">Returns</a></li>
                      <li><a href="#" onclick="openReport(revenue)">Channel Revenue</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Standard</a></li>
                      <li><a href="#">Dynamic</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="spaces.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Han
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="spaces.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Ben</span>
                          <span class="time">2 mins ago</span>
                        </span>
                        <span class="message">
                          Dad! I told you to stay out of my room! You can't just barge in! I'm almost a Jedi now and...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Lando</span>
                          <span class="time">13 mins ago</span>
                        </span>
                        <span class="message">
                          Han old buddy! Been a while. I've got a can't miss opportunity that we need to talk about...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>C-3PO</span>
                          <span class="time">24 mins ago</span>
                        </span>
                        <span class="message">
                          Is this thing on? R2 be quiet! They won't be able to hear this! Sir, I have something you need...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div id="pageContent">
        </div>
      </div>
    </div>

    <!-- Popup Retail -->
    <div class="popup" data-popup="retail">
			<div class="popup-inner">
        <div class="row">
          <div class="col-xs-12">
            <h2>Choose a filter value:</h2>
            <hr>
            <br>
            <div class="btn-group btn-group-vertical" data-toggle="buttons" id="retailCheckboxes" data-type="checkboxes">
              <label class="btn">
                <input type="checkbox" name="param1" value="Mango Retail Stores"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i> <span> Mango Retail Stores</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param2" value="Mango Online Store"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Mango Online Store</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param3" value="Online Retailers"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Online Retailers</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param4" value="Big Box Stores"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Big Box Stores</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param5" value="University Stores"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> University Stores</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param6" value="Wireless"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Wireless</span>
              </label>
            </div>
          </div>
        </div>
        <div>
          <hr>
          <button type="button" id="retailPrompt" name="retail" data-type="prompt" data-filter="Stores.Channel" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
            Apply
          </button>
  				<a class="popup-close" data-popup-close="retail" href="#">x</a>
			  </div>
      </div>
		</div>

    <!-- Popup Sales -->
    <div class="popup" data-popup="sales">
      <div class="popup-inner">
        <div class="row">
          <div class="col-xs-12">
            <h2>Choose a filter value:</h2>
            <hr>
            <br>
            <div class="btn-group btn-group-vertical" data-toggle="buttons" id="salesCheckboxes">
              <label class="btn">
                <input type="checkbox" name="param1" value="Direct"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i> <span> Direct</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param2" value="Partner"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Partner</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param3" value="VAR"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> VAR</span>
              </label>
              <label class="btn">
                <input type="checkbox" name="param4" value="Overlay"><i class="fa fa-square-o fa-2x"></i>
                <i class="fa fa-check-square-o fa-2x"></i><span> Overlay</span>
              </label>
            </div>
          </div>
        </div>
        <div>
          <hr>
          <button type="button" id="salesPrompt" name="sales" data-type="prompt" data-filter="Manager.Channel Name" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
            Apply
          </button>
          <a class="popup-close" data-popup-close="sales" href="#">x</a>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- DateJS (used for left dropdown menu. strange but it is) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

    <!-- Birst Code -->
    <!-- Demo definitions -->
    <script src="assets/js/spaces.js" type="text/javascript"></script>
    <!-- Birst Javascript API -->
    <script src="https://sde.birst.com/js/birst_embed.js" type="text/javascript"></script>

    <!-- Load demos -->
    <script>

      /* VARIABLES */

      // Keeps track of the current space being viewed
      // TODO Make these an object or something
      var currSpace = "";
      var currReport = "";
      var reportLoaded = true;
      var promptUsed = false;

      // Wait time for redraw
      var wait;

      // ??
      var view = "";

      var filters = "";

      // Keeps track of original content div height
      var origHeight = 0;

      //var serverUrl = "https://sde.birst.com";
      var serverUrl = "https://sde.birst.com";

      /* FUNCTION */
      // Remove active status from menu items after clicking on another item
      $(".nav.child_menu > li").click(function(){
        $(".nav.child_menu > li").removeClass("active");
        $(this).addClass("active");
      });

      /* FUNCTION openDemo */
      // Checks to see if a demo is already loaded, if not loads the demo page
      // Then it loads the specified demo into the demo div
      function openDemo(demo, promptFlag) {
        console.info("in openDemo");
        console.info("reportLoaded: " + reportLoaded);
        console.info("currReport: " + currReport);
        console.info("currSpace: " + currSpace);
        console.info("promptFlag: " + promptFlag);

        // Check to see if it is the current space. If so don't reload.
        if (reportLoaded == true){
          // Get Birst content
          getContent("siltalinBirst.html");
        }

        if (currSpace != demo.spaceId || promptFlag == true){
          // Load new demo
          ssoDemo(demo);

          // Set reportLoaded to show a demo is loaded not a report
          reportLoaded = false;
          // Set the current space ID to avoid reloading the same demo
          currSpace = demo.spaceId;
          // Blank out the current report since a demo is loaded not a report
          currReport = "";
        }

      }

      /* FUNCTION openReport */
      // Checks to see if Home is already loaded, if not loads the home page
      // Then it loads the specified report into the report div
      function openReport(report){
        console.info("in openReport");
        console.info("reportLoaded: " + reportLoaded);
        console.info("currReport: " + currReport);
        console.info("currSpace: " + currSpace);

        // TODO
        // check for siltalinBase/reportLoaded
        // if true, then just load the report to the div as normal
        // if false, load base using the specified report

        if (reportLoaded == false){
          // Get Birst content
          getContent("siltalinBase.html");
        }

        if (currReport != report.reportName){
          ssoDemo(report);

          // Set reportLoaded to show a report is loaded not a demo
          reportLoaded = true;
          // Set the current report to avoid reloading the same report
          currReport = report.reportName;
          // Blank out the current spaceId since a report is loaded not a demo
          currSpace = "";
        }

      }

      /* FUNCTION openHome */
      // Checks to see if Home is already loaded, if not loads the home page
      function openHome(){
        if (reportLoaded == false){
          getContent("siltalinBase.html");
          ssoDemo(pipeline);
          reportLoaded = true;
          currReport = pipeline.reportName;
          currSpace = "";
        }
      }

      /* FUNCTION ssoPost */
      // Posts the SSO info, gets the token, then requests the embedded content
      function ssoPost(ssoUrl, params, element, demo) {

        console.log("in ssoPost");

        $.post(ssoUrl, {}, function(data){
          var iframeUrl = serverUrl + "/SSO.aspx?BirstSSOToken=" + data + params;

          // If viewing the widgets with the embedded chart
          if (view == "siltalinBase.html"){
            hgt = $("#todolist .x_content").outerHeight() + 5; // For some reason 5px are missing
            wdt = $("#todolist .x_content").outerWidth();

            // DEBUG
            console.info("todolist x_content hgt: " + hgt);
            console.info("todolist x_content wdt: " + wdt);

            // Set height/width for the chart content
            $("#birstPanel .bcontainer").outerHeight(hgt);
            $("#birstPanel .bcontainer").outerWidth(wdt);

            // Set margin/padding for the chart content
            $("#birstPanel .bcontainer").css("padding","0px");
            $("#birstPanel .bcontainer").css("margin","0px");

            $("#birstPanel div h2").html(demo.titleText);
            str = $("#birstPanel div h2").html();
            //console.log("af str: " + str);

          // Else loading a demo
          }else{
            // Set height/width for the demo content
            var hgt = $(window.top).height() - 68; // Subtract menu bar size (57), border (1), and margin (10)
            //var hgt = $('#leftcol').outerHeight() - 68; // Subtract menu bar size (57), border (1), and margin (10)
            var wdt = $('#pageContent').outerWidth();

            // DEBUG
            console.info("demo hgt: " + hgt);
            console.info("demo wdt: " + wdt);

            /* TODO test which one of these is actually needed */
            $("#conttrow").outerHeight(hgt);
            $("#birst").outerHeight(hgt);
          }

          var opts = {autoSize: true, iframeSrc: iframeUrl};

          // Call Birst to get the embedded content and place in the specified element
          BirstConfig.create(element, opts);

        });
      }

      /* FUNCTION ssoDemo */
      // Creates the SSO URL and set the embedded content request parameters
      function ssoDemo(demo){
        console.info("in ssoDemo");

        // Construct the SSO URL
        var ssoUrl = serverUrl + "/TokenGenerator.aspx?birst.username=" + demo.user + "&birst.ssoPassword=" + demo.pass
          + "&birst.spaceId=" + demo.spaceId;

        // Construct the embedded content parameters
        if (demo.module == "visualizer"){
          console.info("Viz");
          /* TODO When embedding a chart is fixed, clean this up */
          var params =  "&birst.module=" + demo.module + "&embeddedView=" + demo.embeddedView + "&birst.reportName="
            + demo.reportName;
        }else{
          console.info("Dash");
          var params =  "&birst.module=" + demo.module + "&birst.embedded=" + demo.embed + "&birst.hideDashboardNavigation="
            + demo.nav + "&birst.hideDashboardPrompts=" + demo.prompts + "&birst.dashboard=" + demo.dash
            + "&birst.page=" + demo.page + "&birst.hideHeader=" + demo.hideHeader + "&birst.hideSubHeader="
            +  demo.hideSubHeader + "&birst.filters=" + demo.filters;
        }

        // Debugging
        console.log("ssoURL: " + ssoUrl);

        // Get the embedded content
        ssoPost(ssoUrl, params, "birst", demo);
        console.info("done ssoDemo");
      }

      /* FUNCTION getContent */
      // Populate the content div with data from specified file
      function getContent(content){

        view = content;

        var xhr= new XMLHttpRequest();
        xhr.open("GET", content, true);

        xhr.onreadystatechange= function() {
            if (this.readyState!==4) return;
            if (this.status!==200) return; // or whatever error handling you want

            // Empty the content div
            $("#pageContent").empty();

            // Add data to the content div
            document.getElementById("pageContent").innerHTML= this.responseText;

            // DEBUG TODO Not needed??
            var cHgt = $("#taskbox").outerHeight();
            var cWdt = $("#taskbox").outerWidth();
            console.info("cWdt: " + cWdt);
            console.info("cHgt: " + cHgt);

            if (origHeight == 0 ){
              origHeight = $('#pageContent').outerHeight();
              console.info("#pageContent height: " + origHeight);
            }

        };

        xhr.send();

        // If home content is loaded, set current spaceId to blank
        if (content == "siltalinBase.html"){
          currSpace = "";
        }

      }

      // FUNCTION resizeChartDiv
      // Resizes the chart div when the window resizes
      function resizeChartDiv (height,width){
        // Set height/width for the chart content
        $("#birstPanel .bcontainer").outerHeight(height);
        $("#birstPanel .bcontainer").outerWidth(width);
      }

      // FUNCTION ON RESIZE
      // Checks for window resize and calls the draw code
      $(window).resize(function(){

        // Get current dimensions of the window
        winWidth = $("#todolist .x_content").width();
        winHeight = $("#todolist .x_content").height();

        // Debugging
        console.info("#todolist .x_content width: " + winWidth);
        console.info("#todolist .x_content height: " + winHeight);

        clearTimeout(wait);

        wait = setTimeout(resizeChartDiv(winHeight,winWidth), 500);

      });

      // Load the base Siltalin app content
      getContent("siltalinBase.html");
      ssoDemo(pipeline);
      reportLoaded = true;
      currReport = pipeline.reportName;
      currSpace = "";

    </script>

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
            // Close popup if visible
            if (targetPopup != null){
              $('[data-popup="' + targetPopup + '"]').fadeOut(350);
              targetPopup = null;
            }
          }
        });

        document.addEventListener("click", function(evnt){

          console.log("event listener");

          // Debugging
          console.log("evnt.target.id: " + evnt.target.id);
          console.log("evnt.target.name: " + evnt.target.name);
          console.log("evnt.target.data(type): " + $(evnt.target).data("type"));
          console.log("evnt.target.data(filter): " + $(evnt.target).data("filter"));

          if ($(evnt.target).data("type") == "prompt" ){
            console.log("clicked a prompt");

            var selects = [];

            $(".popup[data-popup='" + evnt.target.name + "'] input:checked").each(function (){
              console.log("this.attr.value: " + $(this).attr("value"));
              selects.push(encodeURIComponent($(this).attr("value")));
            });

            // Debugging
            console.log("selects array:");
            console.log(selects);

            // Create encoded string of filter values for SSO request
            console.log("this.target.data(filter): " + $(evnt.target).data("filter"));
            var filterName = $(evnt.target).data("filter");
            filters = encodeURIComponent(filterName) + ":" + selects.join(",");

            // Debugging
            console.log("filters: " + filters);

            // Set selected demo filter value
            eval(evnt.target.name).filters = filters;

            // Close popup if visible
            if (targetPopup != null){
              $('[data-popup="' + targetPopup + '"]').fadeOut(350);
              targetPopup = null;
            }

            openDemo(eval(evnt.target.name),true);
          }

        });

      });

      // TODO check if this is needed, I don't think it is
      // Toggle popup div between "Create an account" and "Sign In"
      $('.message a').click(function(){
         $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });

    </script>

    <script>
    var birstEventHandler=function(e){
      if(e.data.operation==="setFilters"){
        console.log("e");
        console.log(e);
        console.log("e.data");
        console.log(e.data);
        console.log("e.data.filters");
        console.log(e.data.filters);

        //document.getElementById("filterData").value=JSON.stringify(e.data.filters);
      }
    }
    </script>
  </body>
</html>
