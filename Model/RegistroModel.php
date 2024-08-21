<?php include_once 'baseDatosModel.php';

    function PagoParcial($cod_abono,$abono,$cod_compra,$precio,$descripcion,$estado)
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL PagoParcial('$cod_abono','$abono','$cod_compra','$precio','$descripcion','$estado')";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);

        return $respuesta;
    }

?>