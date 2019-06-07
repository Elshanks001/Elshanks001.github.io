<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de autos</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
</head>
<body>
	<div class="container">
	<div class="row well">
	<div class="col-md-6 col-md-offset-3">
	<form action="guardar.php" method="POST">
	<div class="form-group">
	<label for="nombgre">nombre:</label>
	<input type="text" name="nombre" class="form-control">
</div>
<div class="form-group">
	<label for="">nacionalidad:</label>
	<input type="text" name="nacionalidad" class="form-control">
	</div>
<div class="form-group">
<label for="suscriptores">suscriptores:</label>
<input type="text" name="suscriptores" class="form-control">
</div>
<div class="form-group">
	<label for="juego">juego:</label>
	<input type="text" name="juego" class="form-control">
	</div>
	
</div>
<div class="form-group text-center">
	<input type="submit" name="btn btn-primary" value="Registrar">
</div>
</form>
</div>
</div>
</div>
</body>
</html>