<!DOCTYPE html>
<html>
<head>
  <title>Twitch Barato</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
  <script src="js/query.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img style="height: 50px" src="Imagememes/Twitch3.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Descubrimiento<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Explorar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Probar <i>Prime</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><b>...</b></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
      <button style="background:#6415AE; color: white" class="btn btn-secondary my-2 my-sm-0" type="submit">Iniciar sesión</button>
        <button style="background:#6415AE;color: white"class="btn btn-secondary my-2 my-sm-0" type="submit">Registrarse</button>
    </form>
  </div>
</nav>

 <?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "twitch";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$sql="SELECT * FROM streamers";
$data= $conexion->query($sql);
echo '<table class="table table-hover" style="background-color: white; margin-top: 100px">';
echo '<thead>';
echo '<tr>';
echo '<th><a class="btn btn-xs btn-primary" href="registro.php">Registrar streamers</a></th>';
echo '<th>Nombre</th>';
echo '<th>Nacionalidad</th>';
echo '<th>Suscriptores</th>';
echo '<th>Juego</th>';
echo '<th>ID</th>';
echo '</tr>';
echo '</thead';
echo '<tbody> ';
while ($obj=$data->fetch_object()) {
echo '<tr><td><a class="btn btn-xs btn-primary" href="editarStreamer.php?id='.$obj->id.'">Editar</a><a class="btn btn-xs btn-primary"style="margin-left:20px;"  href="eliminar.php?id='.$obj->id.'">Eliminar</a></td>';
echo '<td>'.$obj->nombre.'</td>';
echo '<td>'.$obj->nacionalidad.'</td>';
echo '<td>'.$obj->suscriptores.'</td>'; 
echo '<td>'.$obj->juego.'</td>';
echo '<td>'.$obj->id.'</td></tr>';


} echo '</tbody> </table>'
?>

</div>
</body>
</html>
