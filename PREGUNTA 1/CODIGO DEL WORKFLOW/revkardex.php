<?php
include "conexion.inc.php";
echo "<p>Bienvenida kardixta</p>";

$sql="select * from academico.alumno ";
$sql.="where enespera=1";
$resultado=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kardex</title>
</head>
<body>
  
<h3>Lista de personas que enviaron el nro de boleta</h3>
<table border=1px>
<tr>
  <td>Nombre</td>
  <td>boleta</td>
  <td>Operacion</td>
</tr>
<?php
$sql="select * from academico.alumno ";
$sql.="where nroboleta!=0 and estado!='aceptado'";
$resultado=mysqli_query($con, $sql); 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["nombrecompleto"]."</td>";
  echo "<td>".$fila["nroboleta"]."</td>";
  echo "<td><a href='rkardex.php?estado=aceptado&id=".$fila["id"]."'>Aceptar</a> <a href='rkardex.php?estado=rechazado&id=".$fila["id"]."'>Rechazar</a></td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
