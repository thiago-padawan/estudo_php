<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 8-Funções para manipulação de STRIGS</title>
  </head>
  <body>
    <?php
      echo("<h1>printf()</h1>");
      $produto = "leite";
      $valor = 4.5;
      printf("O produto %s está custando R$%0.2f",$produto,$valor);

      echo "</br>";
      echo "</br>";

      echo("<h1>print_r()</h1>");
      $x[0]=10;
      $x[1]=10;
      $x[2]=10;
      var_export($x);

      echo "</br>";
      echo "</br>";

      echo("<h1>wordwrap()</h1>");
      $texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque lectus ut enim ornare, vestibulum bibendum diam molestie. Etiam id tempus eros, et pellentesque sem. Etiam accumsan turpis ac turpis tristique lobortis. Integer sollicitudin dapibus neque, eget vehicula neque maximus a. Vivamus sed tristique lacus. Ut eget semper nisl. Quisque fermentum eu neque sit amet sodales. Cras bibendum tempor maximus. Integer id scelerisque nisi. Ut sit amet libero id velit efficitur volutpat in vitae tortor. Cras diam elit, tincidunt at justo nec, lobortis fringilla augue. Praesent ultricies elit in odio posuere, euismod consectetur enim condimentum. Integer faucibus ex nunc. In libero nunc, bibendum sit amet justo non, condimentum pharetra lectus. Ut quis pharetra lectus. Phasellus dictum enim vitae diam cursus fermentum.";

      echo(wordwrap($texto, 150,"</br>"));
      echo "</br>";
      echo "</br>";

      echo("<h1>strlen()</h1>");
      $txt = "eque, eget vehicula neque maximus a. Vivamus sed tristique lacus. Ut eget semper nisl. Quisque";
      echo "</br>";
      echo "</br>";
      echo($txt);

      echo("<h1>strlen()</h1>");
      echo trim("       Xatuba de mesquita       ");

      echo("<h1>str_word_count()</h1>");
      $txt=str_word_count("Xatuba de mesquita",0);
      echo("com 0 ".$txt);
      echo "</br>";
      $txt=str_word_count("Xatuba de mesquita",1);
      echo("com 1 ".var_dump($txt));      
      echo "</br>";
      $txt=str_word_count("Xatuba de mesquita",2);
      echo("com 2 ".var_dump($txt));


      echo "</br>";
      echo "</br>";

      echo("<h1>explode()</h1>");

      echo var_dump(explode(" ","Xatuba de mesquita"));
      echo "</br>";
      echo "</br>";

      echo("<h1>implode()</h1>");
      $x = array(1,2,3,4,5,6,7,8,9);
      echo var_dump(implode(" ",$x));
      echo "</br>";
      echo "</br>";

    ?>
  </body>
</html>
