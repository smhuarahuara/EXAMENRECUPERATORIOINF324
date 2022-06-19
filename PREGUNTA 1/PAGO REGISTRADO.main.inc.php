<br>
<?php
session_start();
$sql = "select * from academico.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
$estado=$fila["estado"];
if ($estado=="") {
    echo "<strong>Sr. ".$nombrecompleto." se esta verificando el pago que realizo el lapso maximo de tardia es de 10 min.</strong>";
    echo "<br>";    
}
else {
    if ($estado=="aceptado") {
        echo "<strong>Sr. ".$nombrecompleto." el pago a sido verificado puede continuar con el proceso</strong>";
        echo "<br>";
    }
    else {
        echo "<strong>Sr. ".$nombrecompleto." el nro de boleta a sido rechazado verifica que sea el correcto.</strong>";
        echo "<br>";
    }
}

?><br>