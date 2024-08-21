<?php
include_once 'layoutInterno.php';
include_once '../Controller/compraController.php';
?>

<!DOCTYPE html>
<html>

<?php
HeadCSS();
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php
        MostrarNav();
        MostrarMenu();
        ?>

        <div class="content-wrapper">
            <section class="content">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0 text-dark">Consulta de Compras</h1>
                                <br />

                                <?php
                                if (isset($_POST["msj"])) {
                                    echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                }
                                ?>
                                <br />

                                <table id="tablaCompras" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Codigo de la compra</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Saldo</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        ConsultarCompras();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2024 </strong>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?php
    HeadJS();
    ?>

</body>

</html>