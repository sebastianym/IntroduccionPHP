<?php include 'includes/header.php';

$nombreCliente = "Sebastián Yepes";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Sebastián', 'S', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Pedro');

$tipoCliente = "Premium";

echo "<br>";

// Concatenar
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

// Otra forma de concatenar
echo "El Cliente {$nombreCliente} es ${tipoCliente} ";

include 'includes/footer.php';
