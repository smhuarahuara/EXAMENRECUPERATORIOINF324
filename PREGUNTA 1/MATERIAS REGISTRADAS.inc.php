<br>
<table border=1px>
<tr>
  <td>SIGLA</td>
  <td>MATERIA</td>
</tr>
<?php
$sql = "select academico.materia.* from academico.alumno_materia, academico.materia ";
$sql.= "where academico.alumno_materia.id_alumno=".$_SESSION["id"]." and academico.materia.sigla = academico.alumno_materia.sigla";
$resultado=mysqli_query($con, $sql);
while ($fila1=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila1["sigla"]."</td>";
  echo "<td>".$fila1["nombre"]."</td>";
  echo "</tr>";
}
?>
</table>