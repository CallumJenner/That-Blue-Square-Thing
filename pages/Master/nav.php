<!DOCTYPE HTML>
<html>
  <head>
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <!-- My Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/That Blue Square Thing/css/main.css" />
  </head>
  <body>
    <!-- Simple header with fixed tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title"><a href="/That Blue Square Thing">That Blue Square Thing</a></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/Master/Main/about-main.php">About TBST</a>
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/Master/Main/ict-hub-main.php">The ICT Hub</a>
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/Master/Main/compsci-main.php">COMPSCI GCSE</a>
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/Master/Main/business-centre-main.php">Business Centre</a>
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/Master/Main/geog-main.php">Geography Centre</a>            
          </nav>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <?php
              switch ($title) {
                case "Home":
                  include("Tabs/home-tab.php");
                  break;
                case "About":
                  include("Tabs/about-tab.php");
                  break;
                case 'ICT-HUB':
                  include("Tabs/ict-tab.php");
                  break;
                case 'Geography':
                  include("Tabs/geog-tab.php");
                  break;
                case 'CompSci':
                  include("Tabs/compsci-tab.php");
                  break;
                case 'Business':
                  include("Tabs/business-tab.php");
                default:
                  echo "Steve";
                  break; 
              }
            ?>
        </div>
      </header>
      <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Site Navigation</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="pages/About/about-main.php">About TBST</a>
        <a class="mdl-navigation__link" href="pages/ICT Hub/ict-hub-main.php">The ICT Hub</a>
        <a class="mdl-navigation__link" href="pages/COMPSCI GCSE/compsci-main.php">COMPSCI GCSE</a>
        <a class="mdl-navigation__link" href="pages/Business Centre/business-centre-main.php">Business Centre</a>
        <a class="mdl-navigation__link" href="pages/Geography Section/geog-main.php">Geography Centre</a>
      </nav>
    </div>
      <?php
              switch ($title) {
                case "Home":
                  homePages();
                  break;
                case "About":
                  aboutPages();
                  break;
                case 'ICT-HUB':
                  ictPages();
                  break;
                case 'Geography':
                  geogPages();
                  break;
                case 'CompSci':
                  compsciPages();
                  break;
                case 'Business':
                  businessPages();
                  break;
                default:
                  echo "Steve";
                  break; }
            ?>
    </div>
  </body>
</html>
