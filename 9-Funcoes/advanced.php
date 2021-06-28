<html>
  <head>
    <title>Funções</title>
  </head>
  <body>
    <?php
      $n1 = 1;
      function teste1 ($n1) {
        $n1 = 0;
      }
      teste1($n1);

      echo $n1.'<br/><br/>';

      $n2 = 2;
      function teste2 (&$num) {
        $num = 3;
      }
      teste2($n2);

      echo $n2;
    ?> 
  </body>
</html>