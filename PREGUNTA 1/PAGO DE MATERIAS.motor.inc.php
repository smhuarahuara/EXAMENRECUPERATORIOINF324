<?php 
session_start();
$nroboleta=$_GET["nroboleta"];
$nmat=$_GET["nmat"];

$sql = "update academico.alumno set ";
$sql.=" nroboleta='$nroboleta', nmat='$nmat' where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
?>