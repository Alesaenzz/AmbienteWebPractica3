<?php
include_once 'layoutInterno.php';
include_once '../Controller/registroController.php';

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
                                <h1 class="m-0 text-dark">Registro de Pagos</h1>
                                <br />
                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">

                                        <?php
                                        if (isset($mensaje)) {
                                            echo '<div class="alert alert-info TextoCentrado">' . $mensaje . '</div>';
                                        }
                                        ?>

                                        <form action="" method="post">

                                            <label>Compra</label>
                                            <div class="input-group mb-3">
                                                <select id="cod_compra" name="cod_compra" class="form-control">
                                                    <?php ConsultarComprasPendientes(); ?>
                                                </select>
                                            </div>

                                            <label>Saldo Anterior</label>
                                            <div class="input-group mb-3">
                                                <input id="txtSaldoAnterior" name="txtSaldoAnterior" type="text" class="form-control" read Only>
                                            </div>

                                            <label>Abono</label>
                                            <div class="input-group mb-3">
                                                <input id="txtAbono" name="txtAbono" type="text" class="form-control" placeholder="Abono" required>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <button id="btnRegistrarAbono" name="btnRegistrarAbono" type="submit" class="btn btn-primary btn-block">Registrar Abono</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2024 </strong>
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
</body>

</html>