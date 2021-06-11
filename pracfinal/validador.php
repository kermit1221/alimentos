<?php

$nombres = $_GET['nombres'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];
$contraseña = $_GET['contraseña'];



echo"informacion recivida <br/>";

echo "<br/>tu nombre es: ".$nombres."<br/>";
echo "<br/>tu apellido es: ".$apellido.("<br />");
echo "<br/>tu correo es: ".$correo.("<br>");
echo "<br/>tu numero es: ".$telefono.("<br>");

?>