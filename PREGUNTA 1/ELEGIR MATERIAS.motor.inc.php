<?php 
session_start();
$mat=$_GET["id_mat1"];
$sql = "insert into academico.alumno_materia (id_alumno, sigla) ";
$sql.="values (".$_SESSION["id"].", '$mat')";
$resultado=mysqli_query($con, $sql);


if (isset($_GET["id_mat2"])) {
    $mat=$_GET["id_mat2"];
    $sql = "insert into academico.alumno_materia (id_alumno, sigla) ";
    $sql.="values (".$_SESSION["id"].", '$mat')";
    $resultado=mysqli_query($con, $sql);

}
?>