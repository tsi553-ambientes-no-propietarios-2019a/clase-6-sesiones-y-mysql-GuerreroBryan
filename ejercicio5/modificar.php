<?php
include('php/connection.php');
if ($_POST) {
	if (isset($_POST['codigo'])&&isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['curso'])&&!empty($_POST['codigo'])&&!empty($_POST['nombre'])&&!empty($_POST['curso'])&&!empty($_POST['email'])) {
		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$curso = $_POST['curso'];
		$sqledit = "UPDATE alumnos SET nombre='$nombre', mail='$email', codigocurso='$curso' WHERE alumnos.codigo='$codigo'";
		$conn->query($sqledit);
		if($conn->error){
			header('Location: modificar.php?message_error=Error al actualizar registros');
			exit;
		}else{
				echo 'Modificacion correcta!';
		}
	}else{
		header('Location: modificar.php?message_error=Llene todos los campos');
		exit;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes</title>
</head>
<body>
    <center>
    <h2>Modificar Estudiante</h2>
	
	<form method="POST">
		Codigo al que pertenece el estudiante:
		<input type="text" name="codigo" style="width:30px"><br><br>
		<input type="text" name="nombre" placeholder="Cambiar nombre"><br><br>
		<input type="text" name="email" placeholder="Nuevo email"><br><br>
		<input type="text" name="curso" placeholder="Nuevo curso"><br><br>
		<button>Guardar cambios</button>
	</form>
	<br><br><a href="lista.php">Atras</a>
    </center>
	
</body>
</html>