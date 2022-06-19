<?php
include "conexion.inc.php";
session_start();
$_SESSION["ID_usuario"]=21;
$_SESSION["cod_usuario"]="msilva";

$sql="select * from FlujoProcesoSeguimiento ";
$sql.="where Usuario='".$_SESSION["cod_usuario"]."' ";
$sql.="and HoraFin is null ";
$resultado=mysqli_query($con, $sql);
?>
<table>
<tr>
  <td>Nro Tramite</td>
  <td>Flujo</td>
  <td>Proceso</td>
  <td>Operacion</td>
</tr>
<?php 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["NumeroTramite"]."</td>";
  echo "<td>".$fila["Flujo"]."</td>";
  echo "<td>".$fila["Proceso"]."</td>";
  echo "<td><a href='principal.php?flujo=".$fila["Flujo"]."&proceso=".$fila["Proceso"]."'>Editar</a></td>";
  echo "</tr>";
}
?>
</table>