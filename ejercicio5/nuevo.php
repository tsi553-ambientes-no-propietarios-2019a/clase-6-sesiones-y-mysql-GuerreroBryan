<?php
include('php/connection.php');
if ($_POST) {
		if (isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['curso'])&&!empty($_POST['nombre'])&&!empty($_POST['curso'])&&!empty($_POST['email'])) {
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$curso = $_POST['curso'];
			$sqlinsert = "INSERT INTO alumnos(nombre, mail, idCurso) VALUES ('$nombre', '$email', '$curso')";
			$res = $conn->query($sqlinsert);
			if ($conn->error) {
				header('Location: nuevo.php?message_error=Error en la insercion'.$conn->error);
			}else{
				//echo 'Registro correcto!';
			}
		}else{
			header('Location: nuevo.php?message_error=Llene todos los campos');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Estudiante</title>
</head>
<body>
    <center>
    <h2>Ingrese Estudiante</h2>
	<form method="POST">
		<input type="text" name="nombre" placeholder="Nombre del Estudiante" required="required"><br><br>
		<input type="text" name="email" placeholder="Email del Estudiante" required="required"><br><br>
		<input type="text" name="curso" placeholder="Codigo Curso" required="required"><br><br>
		<button>Registrar alumno</button><br><br>
	</form>
	<a href="index.php">Atras</a></center>

</body>
</html>
