<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes</title>
</head>
<body>
    <center>
	<h2>Estudiantes registrados</h2>
    
        <table border="1">
		<tr>
			<td>Codigo</td>
			<td>Estudiante</td>
			<td>Email</td>
			<td>Curso</td>
			<td>Modificar</td>
		</tr>

		<?php
			include('php/connection.php');
			$sqlquery = "SELECT * FROM alumnos";
			$res = $conn->query($sqlquery);
			while ($mostrar = $res->fetch_assoc()) {
		?>

		<tr>
			<td><?php echo $mostrar['codigo'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['mail'] ?></td>
			<td><?php echo $mostrar['idCurso'] ?></td>
			<td><a href="modificar.php">Modificar</a></td>
		</tr>
            <?php 
                }
            ?>
	</table>
        <br><br><a href="index.php">Atras</a>
    </center>
	
	
</body>
</html>