<?php include_once '../Model/RegistroModel.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarAbono()
    {
        $respuesta = ConsultarAbonoBD();
       
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta))
            { 
                echo "<tr>";
                echo "<td>" . $row["descripcion"] . "</td>";
                echo "<td>" . number_format($row["abono"],2) . "</td>";                
                echo "<td>" . $row["cod_compra"] . "</td>";
                echo "</tr>";
            }
        }
    }
    if(isset($_POST["btnRegistrarPago"]))
    {
        $descripcion = $_POST[""];
        $abono = $_POST["txtAbono"];
        $Precio = $_POST["txtPrecio"];
     

        $respuesta = RealizarAbono($abono,$precio); //($cod_compra,$cod_abono);

        if($respuesta == true)
        {
            #set($estado = "CANCELADO");
            header("location: ../View/consulta.php");
        } 
        else
        {
            $_POST["msj"] = "El abono no se ha completado correctamente.";
        }
    }


?>