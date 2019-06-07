<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
$id_stream = $_GET['id'];
$sql = "SELECT * FROM streamers WHERE id=$id_stream LIMIT 1";
$stream = $conexion->query($sql)->fetch_object();
?>

<div class="container">
<div class="row well">
<div class="col-md-6 col-md-offset-3">
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id_stream; ?>">

<div class="form-group">
<label for="nombre">nombre:</label>
<input type="text" name="nombre" class="form-control"
value="<?php echo $stream->nombre; ?>">

</div>
<div class="form-group">
<label for="nacionalidad">nacionalidad:</label>
<input type="text" name="nacionalidad" class="form-control" 
value="<?php echo $stream->nacionalidad; ?>">
</div>
<div class="form-group">
<label for="suscriptores">suscriptores:</label>
<input type="text" name="suscriptores" class="form-control" 
value="<?php echo $stream->suscriptores; ?>">
</div>
<div class="form-group">
  <label for="juego">juego:</label>
<input type="text" name="juego" class="form-control" 
value="<?php echo $stream->juego; ?>">

</div>
<div class="form-group text-center">
<input type="submit" name="btn btn-primary" value="Guardar">
</div>
</form>
</div>
</div>
</div>

</body>
</html>