<br>
<?php
session_start();

$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
$nmat=$fila["nmat"];
echo "<strong>".$nombrecompleto." lea la siguiente informacion:</strong>";
echo "<br>";
echo "<p>Se ha admitido el pago a razon de</p>";
echo "<p><strong>".$nmat." materias </strong> </p>";
?>
