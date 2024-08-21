<?php include_once 'baseDatosModel.php';

function ConsultarCompraBD() {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarCompras()"; 
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

?>

