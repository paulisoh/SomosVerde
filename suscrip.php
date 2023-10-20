<?php
include_once './Model/conexion.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$sentencia = $bd ->prepare("INSERT INTO usuarios(nombre,correo,pass) VALUES(?,?,?);");
$resultado = $sentencia->execute([$nombre,$correo,$pass,]);

    if ($resultado === TRUE) {
      header('Location: ./index.html');
    } else {
      echo "error";
    }
if ($sentencia === false) {
    die(print_r($bd->errorInfo(), true));
}

?>