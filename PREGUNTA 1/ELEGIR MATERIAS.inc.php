
<?php
    $i=0;
    while ($nmat > $i ) {
        $i = $i + 1;
        echo "<span>Materia:</span>";
        echo "<input list='materias' placeholder='Seleccione Materia' name='id_mat".$i."' required>";
        echo "<datalist name='materias' id='materias'>";
        while ($fila1 = mysqli_fetch_array($resultado)) {
            echo "<option value='".$fila1["sigla"]."'></option>";
        }
        echo "</datalist>";
        echo "<br>";
    }
?>

<p>Unas vez seleccionadas presiona siguiente</p>