<html>
  <head>
    <title>Funções</title>
  </head>
  <body>
    <?php
      function media ($n1 = 0, $n2 = 0, $n3 = 0) {
        return ($n1+$n2+$n3)/3;
      }
      
      echo media(3,9);
    ?> 
  </body>
</html>