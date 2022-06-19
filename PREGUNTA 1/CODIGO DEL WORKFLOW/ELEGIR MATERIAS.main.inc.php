<br>
<?php
session_start();
echo "<input type='hidden' name='proceso' value='".$proceso."'>";
$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
$nmat=$fila["nmat"];

$sql = "select * from academico.materia";
$resultado=mysqli_query($con, $sql);


$nombrecompleto=$fila["nombrecompleto"];
echo "<strong>Sr. ".$nombrecompleto." porfavor selecione de la lista las materias a tomar</strong>";

?><br>