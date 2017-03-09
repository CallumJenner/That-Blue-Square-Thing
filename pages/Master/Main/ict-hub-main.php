<!DOCTYPE HTML>
<html>
  <head>
    
  </head>
  <body>
    <?php
      $title = "ICT-HUB";
      include('../nav.php');

      function ictPages() { ?>
        <main class="mdl-layout__content">
        <?php
        include('../../ICT Hub/aqa.php'); 
        include('../../ICT Hub/cida-dida.php');
        include('../../ICT Hub/cool-it.php');        
        include('../../ICT Hub/functional-it.php'); 
        include('../../ICT Hub/ks3.php'); 
        include('../../ICT Hub/wjec.php'); 
        include('../../Master/footer.php');
      }
      ?>
    </main>
  </body>
</html>

