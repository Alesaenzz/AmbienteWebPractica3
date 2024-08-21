<?php include_once 'baseDatosModel.php';

function RealizarAbonoBD($cod_compra, $abono) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarAbono('$cod_compra', '$abono')";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarComprasPendientesBD() {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarComprasPendientes()";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}
?>
