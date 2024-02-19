<?php
// require_once("clases/Persona.php");

// $persona1 = new Persona("JONATHAN", "RUIZ", 24);
// $persona1->setNombre("mArcelo");

// var_dump($persona1);

// echo "Nombre: " . $persona1->getNombre();

// $argentino = new Chileno;

// $argentino->setApellidos("Ruiz", "Silva");

// var_dump($argentino);

// echo "<br/>Apellidos: " . $argentino->getApellidos() . "<br/>";

// class MyClass
// {
//   public $public = "public";
//   protected $protected = "protected";
//   private $private = "private";

//   function printHello()
//   {
//     echo $this->public . "<br/>";
//     echo $this->protected . "<br/>";
//     echo $this->private . "<br/>";
//   }

// }

// class MyClass2 extends MyClass
// {
//   function printHello()
//   {
//     echo $this->public . "<br/>";
//     echo $this->protected . "<br/>";
//     echo $this->private . "<br/>";
//   }
// }

// $object = new MyClass;

// echo $object->public . "<br/>";
// echo "<br/>";
// echo $object->printHello();

// $object2 = new MyClass2;

// echo $object2->printHello();

// interface ITemplate
// {
//   function setVariable($name);
//   function getHtml();
// }

// class Template implements ITemplate
// {
//   function setVariable($name)
//   {

//   }
//   function getHtml()
//   {

//   }
// }

// interface a
// {
//   public function prueba();
// }
// interface b extends a
// {
//   public function prueba2();
// }

// interface c extends a, b
// {
//   public function prueba3();
// }

// class d implements c
// {
//   public function prueba()
//   {

//   }
//   public function prueba2()
//   {

//   }
//   public function prueba3()
//   {

//   }
// }

// abstract class ClaseAbstracta
// {
//   abstract protected function getValor();
//   abstract public function valorPrefijo($prefijo);

//   public function imprimer()
//   {
//     echo $this->getValor();
//   }
// }

// class ClaseConcreta extends ClaseAbstracta
// {
//   protected function getValor()
//   {
//     return "clase concreta <br/>";
//   }
//   public function valorPrefijo($prefijo)
//   {
//     return $prefijo;
//   }
// }

// $clase1 = new ClaseConcreta();

// $clase1->imprimer();
// echo $clase1->valorPrefijo("hola");
// use carpeta1\Humano;
// use carpeta2\Humano as Humano2;

// require_once('carpeta1/Humano.php');
// require_once('carpeta2/Humano.php');

// $humano1 = new Humano;
// $humano2 = new Humano2;

// $humano1->saludar();
// echo '<br/>';
// echo '<br/>';
// $humano2->saludar();

// use controllers\CourseController;
// use models\Course;

// spl_autoload_register(function ($class) {
//   if (file_exists(str_replace("\\", "/", $class) . ".php")) {
//     require_once str_replace("\\", "/", $class) . ".php";
//   }

// });

// $course = new Course;
// $courseController = new CourseController;

// $course->saludar();
// echo "<br/>";
// $courseController->saludar();


// final en una clase evita que puedan extender esa clase
// class Hogar
// {
//   public $color;
//   public $seguridad;

//   // final en un metodo impide que se pueda sobreescribir ese metodo
//   public function saludar()
//   {
//     echo "Bienvenido a la casa";
//   }
// }

// class Depa extends Hogar
// {
//   public function saludar()
//   {
//     echo "Bienvenido al depa";
//   }
// }

// $depa = new Depa;
// $depa->saludar();

// class Humano
// {
//   public static $nombre = "Jonathan ruiz";
//   static function saludar()
//   {
//     echo "Hola mundo <br/>";
//   }

//   public function saludoCustom()
//   {
//     echo "Hola " . self::$nombre . "<br/>";
//   }
// }

// Humano::saludar();
// echo Humano::$nombre . "<br/>";

// $humano = new Humano;
// $humano->saludoCustom();

// class Argentino extends Humano
// {
//   public function saludoArgentino()
//   {
//     echo "Saludo argentino de" . parent::$nombre . "<br/>";
//   }
// }

// $humanoarg = new Argentino;
// $humanoarg->saludoArgentino();
$cadena = "hol2";

$expresion = "/hol[^aeiou]$/i";

if (preg_match($expresion, $cadena)) {
  echo "cumple la condicion";
} else {
  echo "la cadena no cumple la condicion";
}

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
      font-size: 32px;
      font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin: 16px;
    }
  </style>
</head>

<body>

</body>

</html>