<br>
<?php
session_start();
echo "<input type='hidden' name='proceso' value='".$proceso."'>";
$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
$nmat=$fila["nmat"];


$nombrecompleto=$fila["nombrecompleto"];
echo "<strong>Sr. ".$nombrecompleto." sus materias han sido registradas en el sistema</strong>";

?><br>