<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>recebendo valores aula 5</title>
  </head>
  <body>
    <?php
      $texto = isset($_GET['texto']) ? $_GET['texto'] : 'texto não definido';

      echo $texto; 
     ?>
  </body>
</html>
