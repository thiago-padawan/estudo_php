<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 3</title>
  </head>
  <body>
<?php
  $a=2 ;
  $a += 2 ;//Adiciona 2 em a
  $a -= 2 ;//Subtrai 2 de a
  $a *= 2 ;//Multiplica a por 2
  $a /= 2 ;//Divide a por 2
  $a %= 2 ;//Faz o módulo de a por 2
  $a .= 2 ;//Concatena a com 2

  $x = 2 ;
  echo 'a variavel $x vale '.$x.'<br>';
  $y = &$x;
  echo 'ja a $y vale '.$y.'<br>';
  $y +=3;
  echo 'porem como eu mudei $y para '.$y.', a var $x tbm mudou para '.$x;

  
 ?>
  </body>
</html>
