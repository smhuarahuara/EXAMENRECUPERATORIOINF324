<br>
<?php
session_start();
$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
echo "<strong>".$nombrecompleto." escanea el sguiente QR para realizar el pago:</strong>";
echo "<br>";
?><br>