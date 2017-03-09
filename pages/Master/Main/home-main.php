<!DOCTYPE HTML>
<html>
  <head>
    
  </head>
  <body>
    <?php
      $title = "Home";
      include('pages/Master/nav.php');

      function homePages() { ?>
        <main class="mdl-layout__content">
        <?php
        include('pages/Home/home.php'); 
        include('pages/Home/site-map.php');
        include('pages/Home/contact.php');
        include('pages/Master/footer.php');
      }
      ?>
    </main>
  </body>
</html>
