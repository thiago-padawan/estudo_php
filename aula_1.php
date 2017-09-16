<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 1</title>
  </head>
  <body>
    <?php
      echo "eita <br>";
      $int = 1;//OS TYPECASTS DESSE TIPO PODEM SER (int) OU (integer)
      $float = 2.55;//OS TYPECASTS DESSE TIPO PODEM SER (real) OU (float) OU (double)
      $string = "shows";//O TYPECAST DESSE TIPO É (string)
      $boolean = false;//ESSE TIPO NÃO POSSUI TYPECAST

      echo "$int <br> $float <br> $string";
      echo '<hr>';
      //OU
      echo $int .'<br>'. $float .'<br>' .$string;
     ?>
  </body>
</html>
