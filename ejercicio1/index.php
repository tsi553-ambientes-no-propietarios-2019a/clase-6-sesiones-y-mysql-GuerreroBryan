<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/

?>

<!DOCTYPE html>
<div class="container">
  <div class="row">
    <div class="col-sm">
     
    </div>
    <div class="col-sm">
              <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-squiv="X-UA-Compatible" content="ie=edge">
            <title>Login</title>
        </head>
        <body>
            <center>
                 <img src="https://myslu.slu.edu/res/images/cas-padlock-icon.png" width="100px" height="100px">
                <form action="php/inicio.php" method="POST">
                    <input type="text" name="usuario" placeholder=" usuario " required="required">
                    <br><br>
                    <input type="password" name="pass" placeholder=" clave " required="required">
                    <br><br>
                    <button type="submit">Ingresar</button>
                </form>
            </center>
        </body>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
</html>