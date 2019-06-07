<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "twitch";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$nombre =$_POST["nombre"];
$nacionalidad = $_POST["nacionalidad"];
$suscriptores =$_POST["suscriptores"];
$juego =$_POST["juego"];

$sql = "INSERT INTO streamers (nombre, nacionalidad, suscriptores, juego)
VALUES('$nombre', '$nacionalidad', '$suscriptores', '$juego')";

if ($conexion->query($sql) === TRUE){
	header("Location:index.php");
} else {
	echo "Error: " .$sql. "<br>" . $conexion->error;

}

?>