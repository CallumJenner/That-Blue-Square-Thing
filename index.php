<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" lang="uk" />
    <title>That Blue Square Thing</title>
    
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

    <?php
    $base_dir  = __DIR__."/"; 
    
    define('ROOT', __DIR__ .'/');
    include($base_dir."pages/Master/Main/home-main.php");
    include("pages/Master/footer.php");
    
    
    /*
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/That Blue Square Thing/";
      include_once($path);
      include($path.'pages/Master/nav.php');
      include("pages/Master/Main/home-main.php");
    
      /*$path = $_SERVER['DOCUMENT_ROOT'];
      define("ROOT", __DIR__ ."/");
      include("pages/Master/Main/home-main.php");
      /*include('pages/Master/nav.php');?>
      <?php include('pages/Home/home-main.php');*/
    ?>
  </body>
</html>

<!--
Warning
: include(pages/Master/Tabs/about-tab.php): failed to open stream: No such file or directory in
/opt/lampp/htdocs/That Blue Square Thing/pages/Master/nav.php
on line
41


Warning
: include(): Failed opening 'pages/Master/Tabs/about-tab.php' for inclusion (include_path='.:/opt/lampp/lib/php') in
/opt/lampp/htdocs/That Blue Square Thing/pages/Master/nav.php
on line
41

