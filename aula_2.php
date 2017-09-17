<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 2</title>
    <style media="screen">
      h2{
        font-family: sans-serif;
        font-size: 2em;
      }
    </style>
  </head>
  <body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $soma = $n1+$n2;//SOMA
        $sub = $n1-$n2;//SUBTRAÇÃO
        $mult = $n1*$n2;//MULTIPLICAÇÃO
        $div = $n1/$n2;//DIVISÃO
        $mod = $n1%$n2;//MÓDULO
        echo '<h2>'.'A soma de '.$n1.' e '.$n2.' é '.number_format($soma,2,',','.').'<br> <br>';
        echo '<h2>'.'A subtração de '.$n1.' e '.$n2.' é '.$sub.'<br> <br>';
        echo '<h2>'.'A multiplicação de '.$n1.' e '.$n2.' é '.$mult.'<br> <br>';
        echo '<h2>'.'A divisão de '.$n1.' e '.$n2.' é '.$div.'<br> <br>';
        echo '<h2>'.'O módulo de '.$n1.' e '.$n2.' é '.$mod.'<br> <br>';
     ?>
  </body>
</html>
