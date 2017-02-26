<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" lang="uk" />
    <title>That Blue Square Thing</title>

    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- My Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/opt/lampp/htdocs/That Blue Square Thing/css/main.css" />
  </head>
  <body>
    <?php
      $title = "About";
      include('/opt/lampp/htdocs/That Blue Square Thing/pages/Master/nav.php');
    ?>
    <main class="mdl-layout__content">
    <?php
      include('about.php');
      include('tech-bits.php');
      include('images.php');
      include('../Master/footer.php');
    ?>
  </body>
</html>
