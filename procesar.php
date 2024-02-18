<?php

// $nombre = $_GET["nombre"];
// $nombre = $_POST["nombre"];

$nombre = $_REQUEST["nombre"];
$edad = $_REQUEST["edad"];
$sexo = $_REQUEST["sexo"];
$roles = $_REQUEST["roles"];
$mensaje = $_REQUEST["mensaje"];
$image = $_FILES["image"];
$patch = $_SERVER["DOCUMENT_ROOT"] . "/imgs/" . $image['name'];

echo "Hola $nombre <br/>";
echo "Tienes $edad años <br/>";
echo "Tu genero es $sexo <br/>";
echo "El mensaje enviado es $mensaje <br/>";

var_dump($patch);

move_uploaded_file($image["tmp_name"], $patch);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    :root {
      color-scheme: dark;
      font-family: sans-serif;
      margin: 32px;
    }
  </style>
</head>

<body>
  <p>Roles: </p>
  <ul>
    <?php
    foreach ($roles as $role) {
      echo "<li>$role</li>";
    }
    ?>
  </ul>
</body>

</html>