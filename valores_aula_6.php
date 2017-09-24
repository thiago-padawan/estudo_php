<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mostrando valores aula 6</title>
  </head>
  <body>
    <?php
      $i = isset($_GET["incremento"]) ? $_GET["incremento"] : 1 ;
      $start = isset($_GET["start"]) ? $_GET["start"] : 1 ;
      $end = isset($_GET["end"]) ? $_GET["end"] : 100 ;
      if ($start < $end ) {
        while ($start <= $end) {
          echo $start."</br>";
          $start = $start + $i;
        }
      }else {
        while ($start >= $end) {
          echo $start."</br>";
          $start = $start - $i;
        }
      }

     ?>
     <a href="javascript:history.go(-1)">voltar</a>
  </body>
</html>
