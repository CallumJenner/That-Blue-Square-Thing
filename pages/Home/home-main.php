<!DOCTYPE HTML>
<html>
  <head>

  </head>
  <body>
    <?php
      $title = "Home";
      include('pages/Master/nav.php');
    ?>
    <main class="mdl-layout__content">
    <?php
      include('home.php');
      include('site-map.php');
      include('contact.php');
      include('footer.php');
    ?>
    </main>
  </body>
</html>
