<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 4</title>
  </head>
  <body>
<?php
  $a = $_GET['a'];
  $b = $_GET['b'];
  $op = $_GET['op'];

  $resultado = ($op == 'soma' ? $a + $b : $a * $b);
  echo 'O resultado é '.$resultado;
 ?>
  </body>
</html>
