<br>
<?php
session_start();

$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
echo "<h3><strong>Bienvenido ".$nombrecompleto."</strong></h3>";
?><br>