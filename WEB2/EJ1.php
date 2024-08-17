<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
      $titulo = "Hola mundo";
      echo "<h1>" . $titulo . "</h1>"; // Corregido el cierre del <h1>

      echo('<ul>');
      for ($i=0;$i<10;$i++){
        $cadena ="<li> $i </li";
        echo ($cadena);

      }
      echo ('</ul>');
   ?>

    <h1><?php echo $titulo; ?></h1>
  </body>
</html>
