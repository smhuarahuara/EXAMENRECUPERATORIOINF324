<br>
<?php
session_start();

$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
$nmat=$fila["nmat"];
echo "<strong>".$nombrecompleto." La siguiente lsita son las materias habilitadas para el curso de temporada:</strong>";
echo "<br>";
$sql = "select * from academico.materia";
$resultado=mysqli_query($con, $sql);
?>
