<p>Usted ya fue habilitada por lo cual verifique las materias que tomara</p>
<table border=1px>
<tr>
  <td>SIGLA</td>
  <td>MATERIA</td>
</tr>
<?php
$sql="select * from academico.materia";
$resultado=mysqli_query($con, $sql); 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["sigla"]."</td>";
  echo "<td>".$fila["nombre"]."</td>";
  echo "</tr>";
}
?>

</table>
<br>
<p>Aviso: No puede modificar ni reclamar por el pago ya hecho para su inscripcion.</p>