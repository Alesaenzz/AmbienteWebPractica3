<?php 
include_once '../Model/RegistroModel.php';
include_once '../Model/compraModel.php';

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

function ConsultarComprasPendientes() {
    $respuesta = ConsultarComprasPendientesBD();
    echo '<option value=""> Seleccione una compra pendiente </option>';
    if($respuesta && $respuesta->num_rows > 0) {
        while ($row = mysqli_fetch_array($respuesta)) {
            echo "<option value=" . $row["cod_compra"] . ">Producto #" . $row["cod_compra"] . " - " . $row["descripcion"] . " Saldo: " . number_format($row["saldo"], 2) . "</option>";
        }
    }
}

if(isset($_POST["btnRegistrarAbono"])) {
    $cod_compra = $_POST["cod_compra"];
    $abono = $_POST["txtAbono"];
    
    $conexion = AbrirBaseDatos();
    $sentencia = "SELECT saldo FROM principal WHERE cod_compra = '$cod_compra'";
    $resultado = $conexion->query($sentencia);
    $row = $resultado->fetch_assoc();
    $saldo_anterior = $row["saldo"];
    CerrarBaseDatos($conexion);

    if($abono <= $saldo_anterior) {
        $respuesta = RealizarAbonoBD($cod_compra, $abono);

        if($respuesta) {
            header("Location: ../View/consulta.php");
            exit();
        } else {
            $mensaje = "El abono no se ha completado correctamente.";
        }
    } else {
        $mensaje = "El abono no puede ser mayor que el saldo.";
    }
}
?>