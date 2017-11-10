<?php

  // Define server, user, pass, and spaceId
  $appUrl="https://sde.birst.com";
  $username="cmoynihan@birst.com";
  $ssoPassword="7AMl2CKG6kDR0eVbi9iPLahqBQ1E5y5e";
  $spaceId="612bceb6-3d0d-4b42-93b9-340d09f7132e";

  // Define POST URL for token generation
  $postUrl = $appUrl . "/TokenGenerator.aspx";

  // Construct the parameters for the token request
  $params = "birst.username=" . $username . "&birst.ssopassword=" . $ssoPassword . "&birst.spaceId=" . $spaceId;

  // Concatenate POST URL and parameters for the full request URL
  $fullUrl = $postUrl . "?" . $params;

  // Use curl to initialize a POST
  $ch = curl_init( $postUrl );
  // Set the curl options (see PHP curl help for details on each option)
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $params); // sets the parameters for the POST
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt( $ch, CURLOPT_HEADER, 0);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

  // Execute the curl POST request
  $response = curl_exec( $ch );

  // For troubleshooting
  //echo $response;
?>

<html>
  <head>
    <title>PHP Embed Test</title>

    <style>
      body {
        font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
        font-size: 62.5%;
      }
    </style>

    <!-- JQuery UI Style -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>

    <!-- JQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Birst JS API -->
    <script src="https://sde.birst.com/js/birst_embed.js" type="text/javascript"></script>

    <script>
      // For JQuery UI, changes list to tabs
      $(function() {
        $( "#tabs" ).tabs();
      });

      // Document ready. Wait until document is fully loaded before executing
      $( document ).ready(function() {
        console.log( "ready!" );

        document.getElementById ("gobutton").addEventListener ("click", testThis, false);

        // POST function
        function ssoPost(params, tabname) {

          console.log("params: " + params);
          var opts = {autoSize: true, width: "100%", height: "800", iframeSrc: <?php echo '"' . $appUrl . '/SSO.aspx?BirstSSOToken=' . $response . '"' ?> + params };
          console.log("opts:");
          console.log(opts);
          console.log("tabname: " + tabname);

          BirstConfig.create(tabname, opts);
        }

        // MODIFIY IF NECESSARY
        // Set parameters for embedding
        var module = "newDashboards";
        var embed = "true";
        var navigation = "false";
        var prompts = "false";

        function testThis(){
          thisPage = "VP Sales Dashboard";
          thisPage = encodeURI(thisPage);

          var tab2 =  "&birst.module=" + module + "&birst.embedded=" + embed + "&birst.hideDashboardNavigation=" + navigation + "&birst.hideDashboardPrompts=" + prompts + "&birst.dashboard=" + dashName + "&birst.page=" + thisPage;
          ssoPost( tab2, "tabs-1" );
        }

        // MODIFICATION NEEDED
        // Set dashboard name and URI encode
        var dashName = "Sales";

        dashName = encodeURI(dashName);
        console.log("Dash: " + dashName);

        // MODIFICATION NEEDED
        // Set page name and URI encode
        var page = "Executive Dashboard";

        page = encodeURI(page);
        console.log("Page: " + page);

        // A dashboard page
        // Set contents of tab 1
        var tab1 =  "&birst.module=" + module + "&birst.embedded=" + embed + "&birst.hideDashboardNavigation=" + navigation + "&birst.hideDashboardPrompts=" + prompts + "&birst.dashboard=" + dashName + "&birst.page=" + page;
        ssoPost( tab1, "tabs-1" );

      });

    </script>
  </head>

  <body>
    <div id="tabs">
      <!-- List for JQuery UI tabs-->
      <ul>
        <li><a href="#tabs-1">Executive</a></li>
        <li><a href="#tabs-2">VP Sales</a></li>
      </ul>
      <!-- DIVs for content -->
      <div id="tabs-1"></div>
      <div id="tabs-2"><button id="gobutton">Button</button></div>
    </div>
  </body>
</html>
