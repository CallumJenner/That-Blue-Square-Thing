<!DOCTYPE HTML>
<html>
  <head>

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
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/About/about-main.php">About TBST</a>
            <a class="mdl-navigation__link" href="/That Blue Square Thing/pages/ICT Hub/ict-hub-main.php">The ICT Hub</a>
            <a class="mdl-navigation__link" href="/pages/compsci-gcse.html">COMPSCI GCSE</a>
            <a class="mdl-navigation__link" href="/pages/">Business Centre</a>
            <a class="mdl-navigation__link" href="">Geography Centre</a>
          </nav>
        </div>
        <!-- Tabs -->
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <?php
              switch ($title) {
                case "Home":
                  include("/opt/lampp/htdocs/That Blue Square Thing/pages/Master/Tabs/home-tab.php");
                  break;
                case "About":
                  include("/opt/lampp/htdocs/That Blue Square Thing/pages/Master/Tabs/about-tab.php");
                  break;
                default:
                  echo "Steve";
                  break; }
            ?>
          </div>
      </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Site Navigation</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/pages/About/about-main.php">About TBST</a>
        <a class="mdl-navigation__link" href="/pages/ict-hub.html">The ICT Hub</a>
        <a class="mdl-navigation__link" href="/pages/compsci-gcse.html">COMPSCI GCSE</a>
        <a class="mdl-navigation__link" href="/pages/business-centre.html">Business Centre</a>
        <a class="mdl-navigation__link" href="/pages/geography-centre.html">Geography Centre</a>
      </nav>
    </div>
  </body>
</html>
