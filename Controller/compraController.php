<?php 
include_once '../Model/compraModel.php';

function ConsultarCompras()
{
    $respuesta = ConsultarCompraBD(); 

    if ($respuesta && $respuesta->num_rows > 0) {
        while ($row = mysqli_fetch_array($respuesta)) { 
            echo "<tr>";
            echo "<td>" . $row["cod_compra"] . "</td>";
            echo "<td>" . $row["descripcion"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td>" . $row["saldo"] . "</td>";
            echo "<td>" . $row["estado"] . "</td>";
            echo "</tr>";
        }
    }
}
?>
