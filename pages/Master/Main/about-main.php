<!DOCTYPE HTML>
<html>
  <head>
    
  </head>
  <body>
    <?php
      $title = "About";
      include('../nav.php');

      function aboutPages() { ?>
        <main class="mdl-layout__content">
        <?php
        include('../../About/about.php'); 
        include('../../About/images.php');        
        include('../../About/tech-bits.php');        
        include('../../Master/footer.php');
      }
      ?>
    </main>
  </body>
</html>
