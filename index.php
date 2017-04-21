<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
  </head>
  <body>
    <p>##Exercice 1</p>
    <p>
      <?php
      $name = "BARRIERE";
        echo $name;
      ?>
    </p>

    <p>##Exercice 2</p>
    <p>
      <?php
      $name = "BARRIERE";
      $firstname = "Sylvain";
      $age = 30;
        echo $name.$firstname.$age;
      ?>
    </p>

    <p>##Exercice 3</p>
    <p>
      <?php
      $km = 125;
        echo $km;
      ?>
    </p>

    <p>##Exercice 4</p>
    <p>
      <?php
      $string = "string";
      $int = 666;
      $float = 666.66;
      $boolean = true;
        echo $string.$int.$float.$boolean;
      ?>
    </p>

    <p>##Exercice 5</p>
    <p>
      <?php
      $int = 5;
        echo $int;
      ?>
    </p>

    <p>##Exercice 6</p>
    <p>
      <?php
      $name = "Sylvain";
        echo "Hello ".$name.", how are you doing?";
      ?>
    </p>

    <p>##Exercice 7</p>
    <p>
      <?php
      $name = "BARRIERE";
      $firstname = "Sylvain";
      $age = 30;
        echo "Hello ".$firstname." ".$name.", you are ".$age." years old.";
      ?>
    </p>

    <p>##Exercice 8</p>
    <p>
      <?php
      $var1 = (3 + 4);
      $var2 = (5 * 20);
      $var3 = (45 / 15);
        echo $var1." ".$var2." ".$var3;
      ?>
    </p>
  </body>
</html>
