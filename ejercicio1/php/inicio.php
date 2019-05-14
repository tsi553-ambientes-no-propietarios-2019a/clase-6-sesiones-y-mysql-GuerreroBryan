<?php
    include('../common/utils.php');
    $user = $_POST['usuario'];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Incio</title>
    </head>
    <body>
        <div class="container">
  <div class="row">
    <div class="col-sm">
     
    </div>
    <div class="col-sm" text-align="center">
              <div>
                <?php echo 'Bienvenido ' .strtoupper($_POST['usuario']);?>
                <p>Sus datos son:</p>
            </div>
            <label> <b>Usuario: </b><?php echo $user; ?></label>
            <div>
                <label><b>Contraseña: </b><?php echo $_POST['pass']?> </label>
            </div>
            <div>
                <br>
                <a href="home.php">salir</a>
            </div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
    </body>
</html>