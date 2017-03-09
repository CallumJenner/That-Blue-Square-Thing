<!DOCTYPE HTML>
<html>
  <head>
    
  </head>
  <body>
    <?php
      $title = "Business";
      include('../nav.php');

      function businessPages() { ?>
        <main class="mdl-layout__content">
        <?php
        include('../../Business Centre/business-centre.php'); 
        include('../../Master/footer.php');
      }
      ?>
    </main>
  </body>
</html>
