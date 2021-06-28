<html>
  <head>
    <title>Strings</title>
  </head>
  <body>
    <?php
      $nome = 'Jales';
      $sobrenome = "Monteiro";

      echo $nome.' '.$sobrenome.'<br/><br/>';

      $nome .= ' '.$sobrenome;
      echo $nome.'<br/><br/>';

      echo strlen($sobrenome);
    ?> 
  </body>
</html>