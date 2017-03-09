<!DOCTYPE HTML>
<html>
  <head>
    
  </head>
  <body>
    <?php
      $title = "Geography";
      include('../nav.php');
    
      function geogPages() { ?>
        <main class="mdl-layout__content">
        <?php
        include('../../Geography Section/geog-resources.php'); 
        include('../../Geography Section/geog-revision.php'); 
        include('../../Master/footer.php');
      }
    ?>
    </main>
  </body>
</html>
