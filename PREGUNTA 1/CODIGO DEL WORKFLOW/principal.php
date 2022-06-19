<?php
include "conexion.inc.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila['Pantalla'];
$pantalla.=".inc.php";
$pantallalogica=$fila['Pantalla'];
$pantallalogica.=".main.inc.php";
$procesoanterior=$proceso;
$proceso=$fila['ProcesoSiguiente'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>INSCRIPCIONES CURSO DE TEMPORADA</title>
</head>
<body>
  <div class="text-center pt-5 bg-warning py-4">
    <h5 class="display-5">SISTEMA DE INSCRIPCION UNIVERSITARIA - TEMPORADA</h5>
    <p><strong>Universidad Mayor de San Andres</strong></p>
  </div>
  <div class="container-fluid bg-primary text-white py-4">
    <div class="container">
      <div class="row align center">
        <div id="formulario">
          <div class="registro">
            <form action="motor.php" method="get">
                <input type="hidden" name="flujo" value="<?php echo $flujo;?>">
                <input type="hidden" name="proceso" value="<?php echo $proceso;?>">
                <input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>">
            <?php
            include $pantallalogica;
            //echo $pantalla;
            include $pantalla;
            ?>
            <div class="form-group">
            <input type="submit" name="Anterior" class="btn btn-danger btn-lg btn-block" value="Anterior">
            <br>
            <input type="submit" name="Siguiente" class="btn btn-primary btn-lg btn-block" value="Siguiente">
            <br>
            <p></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--iframe src="pantalla.php"></iframe-->
  
</body>
<footer>
  <div class="text-center text-white"> 
    Sistema de inscripcion 2022 -UMSA
  </div>
</footer>
</html>
