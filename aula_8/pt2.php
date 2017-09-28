<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 8-Funções para manipulação de STRIGS</title>
  </head>
  <body>
    <?php
      echo("<h1>strtolower() && strtoupper()</h1>");

      $produto = "leASDdas";
      echo strtolower($produto);
      echo "</br>";
      echo strtoupper($produto);
      echo "</br>";
      echo ucfirst($produto);
      echo "</br>";
      echo ucwords($produto);
      echo "</br>";
      echo "</br>";

      echo("<h1>strrev()</h1>");

      $produto = "leASDdas";
      echo strrev($produto);
      echo "</br>";
      echo "</br>";

      echo("<h1>strpos() && stripos()</h1>");

      $produto = "leASDdas";
      echo strpos($produto,"a");
      echo "</br>";
      echo stripos($produto,"a");
      echo "</br>";
      echo "</br>";

      echo("<h1>substr() && substr_count()</h1>");

      $produto = "leASDdas";
      echo substr($produto,2,5);
      echo "</br>";
      echo substr_count($produto,"a");
      echo "</br>";
      echo "</br>";

      echo("<h1>str_pad && str_repeat()</h1>");

      $produto = "leASDdas";
      echo str_pad($produto,50,"-",STR_PAD_BOTH);
      echo "</br>";
      echo str_repeat('-', 50);
      echo "</br>";
      echo "</br>";

      echo("<h1>str_replace() && str_ireplace()</h1>");

      $produto = "leASDdas";
      echo str_replace("ASD", "-xatuba-", "Produto");
      echo "</br>";
      echo str_ireplace("asd", "-xatuba-", "Produto");
      echo "</br>";
      echo "</br>";

    ?>
  </body>
</html>
