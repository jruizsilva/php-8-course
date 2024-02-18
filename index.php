<?php

// define('CURSO', 'php 8 desde cero');
// define('USUARIO_1', 'Jonathan');

// define('ANIMALES', ['perro', 'gato', 'loro']);

// if (defined('CURSO')) {
//   echo 'si se ha definido';
// }

// echo 'Mi version de php es ' . PHP_VERSION . '<br/>';
// echo 'Sistema operativo ' . PHP_OS . '<br/>';
// echo 'Linea actual ' . __LINE__ . '<br/>';
// echo 'ruta archivo ' . __FILE__ . '<br/>';

// $int = 123;
// $float = 123.24;
// $string = "hola mundo mi nombre \$es \"Jonathan\" ";

// echo "int " . $int . "<br/>";
// echo "float " . $float . "<br/>";
// echo "string " . $string . "<br/>";

// $variable = -34;
// // El negativo cambia de signo la variable
// $variableConSignoCambiado = -$variable;

// echo $variableConSignoCambiado . "<br/>";

// $a = 4;
// $b = 1;
// var_dump($a < $b || $b > 3);

// $a = 10;

// $b = 2;

// $a %= $b;

// echo "el valor de a es $a <br/>";
// echo "el valor de b es $b <br/>";

// $a = 3;
// $b = 3;

// if ($a > $b) {
//   echo "a es mayor";
// } elseif ($a < $b) {
//   echo "a es menor";
// } else {
//   echo "son iguales";
// }

// $valor = $a > $b ? "mayor" : ($a < $b ? "menor" : "igual");

// echo "a es $valor";


// switch ($a) {
//   case '1':
//     echo "Lunes <br/>";
//     break;
//   case '2':
//     echo "Martes <br/>";
//     break;
//   case '3':
//     echo "Miercoles <br/>";
//     break;
//   case '4':
//     echo "Jueves <br/>";
//     break;
//   case '5':
//     echo "Viernes <br/>";
//     break;
//   case '6':
//     echo "Sabado <br/>";
//     break;
//   case '7':
//     echo "Domingo <br/>";
//     break;

//   default:
//     echo "El valor de ingresado no es valido";
//     break;
// }

// $a = 1;


// echo match ($a) {
//   1 => "Lunes",
//   2 => "Martes",
//   3 => "Miercoles",
//   4 => "Jueves",
//   5 => "Viernes",
//   6 => "Sabado",
//   7 => "Domingo",
//   default => "El valor de ingresado no es valido"
// };

// $i = 10;

// while ($i < 10) {
//   echo "Hola mundo $i <br/>";
//   $i++;
// }

// $i = 11;

// do {
//   echo "Hola mundo $i <br/>";
//   $i++;
// } while ($i <= 10);

// echo "Has salido del bucle <br/>";

// $base = 2;
// $exp = 5;

// $result = 1;

// $i = 1;
// while ($i <= $exp) {
//   $result *= $base;
//   $i++;
// }


// for ($i = 1; $i <= $exp; $i++) {
//   $result *= $base;
// }

// echo "Resultado $result";

// $filas = 10;

// for ($i = 1; $i <= $filas; $i++) {
//   for ($j = 1; $j <= $i; $j++) {
//     echo "*";
//   }

//   echo "<br/>";
// }

// $nombres = ['Victor', 'Ires', "Eliza", 'Joel'];

// foreach ($nombres as $key => $value) {
//   echo "$key. $value <br/>";
// }

// for ($i = 1; $i < 20; $i++) {
//   if ($i === 7 || $i === 15) {
//     continue;
//   }
//   echo $i . "<br/>";
// }

// echo "Has salido del bucle <br/>";

// echo "marca de tiempo: " . time() . "<br/>";
// echo "raiz cuadrada de 9: " . sqrt(9) . "<br/>";
// echo "numero aleatorio entre 90 y 100: " . rand(90, 100) . "<br/>";

// echo "numero pi" . pi() . "<br/>";

// function factorial($num)
// {
//   $resultado = 1;
//   for ($i = 1; $i <= $num; $i++) {
//     $resultado *= $i;
//   }
//   return $resultado;
// }

// echo factorial(6);

// $a = 5;
// $b = 10;

// function test(&$n)
// {
//   $n = $n + 10;
// }

// test($a);
// test($b);

// echo "$a <br/>";
// echo "$b <br/>";

// function valoracion($nombre, $rating = 5)
// {
//   echo "$nombre tiene una valoracion de $rating <br/>";
// }

// valoracion('php curso', 4);

// function concatenar(...$palabras)
// {
//   $resultado = '';
//   foreach ($palabras as $palabra) {
//     $resultado .= $palabra . ' ';
//   }
//   return $resultado;
// }
// echo concatenar('hola', 'mundo', 'cruel');

// declare(strict_types=1);

// int, float, string, bool, array, object, null

// function sumarEnteros(int $num1, int $num2): int|float
// {
//   return ($num1 + $num2) / 2;
// }

// $resultado = sumarEnteros(2, 5);
// echo $resultado;

// $cadena = 'aeíou';
// $holamundo = "hola mundo como estás";

// echo "$cadena[1] <br/>";
// echo "strlen($cadena) <br/>"; // trae la cantidad de bytes
// echo mb_strlen($cadena) . " <br/>"; // trae la cantidad de bytes

// echo strpos($cadena, 'a') . " <br/>"; // trae la posicion de la letra

// echo str_contains($holamundo, 'mundo') ? "si se encuentra <br/>" : "no se encuentra"; // trae true si contiene la letra

// echo str_starts_with($holamundo, 'hola') ? "si empieza con hola <br/>" : "no empieza con hola <br/>"; // trae true si empieza con la letra

// echo str_ends_with($holamundo, 'estás') ? "si termina con estás <br/>" : "no termina con estás <br/>"; // trae true si termina con la letra

// $cadena1 = "prueba";
// $cadena2 = "Prueba";

// if (strcmp($cadena1, $cadena2) === 0) {
//   echo "son iguales <br/>";
// } else {
//   echo "son diferentes <br/>";
// }

// if (strcasecmp($cadena1, $cadena2) === 0) {
//   echo "son iguales <br/>";
// } else {
//   echo "son diferentes <br/>";
// }

// $cadena = "hola mundo";
// echo substr($cadena, 1) . "<br/>";
// echo substr($cadena, 0, 4) . "<br/>";
// echo substr($cadena, -2) . "<br/>";
// echo substr($cadena, -5, 3) . "<br/>";

// echo str_replace("mundo", "dasda", $cadena) . "<br/>";
// echo strtolower($cadena) . "<br/>";
// echo strtoupper($cadena) . "<br/>";
// echo ucfirst($cadena) . "<br/>";
// echo ucwords($cadena) . "<br/>";

// $array = [10, 13, 15, 20];
// $array[] = 25;
// $array[] = 30;
// $array[] = 35;
// $array[] = 40;

// echo "$array[6]";

// $array = [10, false, "string"]
// $datos = [
//   'nombre' => 'Jonathan',
//   'email' => 'email@email.com',
// ];

// echo $datos['nombre'] . " <br/>";
// echo $datos['email'] . "<br/>";

// $datos = [
//   [
//     'nombre' => 'Jonathan',
//     'email' => 'email@email.com',
//   ],
//   [
//     'nombre' => 'jose',
//     'email' => 'jose@email.com',
//     'direccion' => [
//       'pais' => 'argentina'
//     ]
//   ],
//   [
//     'nombre' => 'marcelo',
//     'email' => 'marcelo@email.com',
//   ],
// ];

// echo $datos[1]['nombre'] . " <br/>";
// echo $datos[1]['email'] . " <br/>";
// echo $datos[1]['direccion']['pais'] . " <br/>";

// foreach ($datos as $item) {
//   echo $item['nombre'] . " <br/>";
//   echo $item['email'] . " <br/>";

//   echo "<hr/>";
// }

// $array = [1, 2, 3];

// list($a, $b, $c) = $array;

// // var_dump($a, $b, $c);

// $array = range(10, 11);

// var_dump($array);

// echo "<br/>";

// echo count($array) . "<br/>";

// $array = ["jonathan", "jose", "marcelo"];

// unset($array[0]); // elimina el elemento del array

// if (in_array("jonathan", $array)) {
//   echo "si se encuentra <br/>";
// } else {
//   echo "no se encuentra <br/>";
// }


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
  <form action="procesar.php" method="post" enctype="multipart/form-data">
    <label>
      Nombre:
      <input type="text" name="nombre">

    </label>
    <br />
    <label>
      Edad:
      <input type="number" name="edad">
    </label>
    <br />
    <p style="margin: 4px 0;">Sexo:</p>
    <select name="sexo">
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
    <!-- <label>
      <input type="radio" name="sexo" value="masculino">
      Masculino
    </label>
    <label>
      <input type="radio" name="sexo" value="femenino">
      Femenino
    </label> -->
    <br />
    <p style="margin: 4px 0;">Roles:</p>
    <label>
      <input type="checkbox" name="roles[]" value="admin">
      Admin
    </label>
    <label>
      <input type="checkbox" name="roles[]" value="editor">
      Editor
    </label>
    <label>
      <input type="checkbox" name="roles[]" value="moderador">
      Moderador
    </label>
    <br />
    <br />
    Imagen:
    <br>
    <input type="file" name="image">
    <br />
    <br />
    <label>Mensaje</label>
    <br />
    <textarea name="mensaje"></textarea>

    <button type="submit">Enviar</button>
  </form>
</body>

</html>