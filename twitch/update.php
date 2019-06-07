<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "twitch";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}

$id = $_POST["id"];
$nombre =$_POST["nombre"];
$nacionalidad = $_POST["nacionalidad"];
$suscriptores =$_POST["suscriptores"];
$juego=$_POST["juego"];

$sql = "UPDATE streamers SET nombre='$nombre', nacionalidad='$nacionalidad', suscriptores='$suscriptores', juego='$juego' WHERE id=$id";
echo $sql;
 if ($conexion->query($sql)== TRUE){
 	header("Location:index.php");
}else{
	echo "ocurrio un error";
}
$conexion->close();
?>
</body>
</html>