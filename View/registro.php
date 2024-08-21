<?php include_once 'layoutInterno.php';
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
                        <h1 class="m-0 text-dark">Registro de pago</h1>
                        <br />
                        <div class="row mb-2">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <form action="" method="post" enctype="multipart/form-data">

                                    <Label>Descripcion</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtNombre" name="txtDescripcion" type="text" class="form-control"
                                            placeholder="Descripcion" required value="">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label>Precio</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtPrecio" name="txtPrecio" type="text" class="form-control"
                                            placeholder="Precio" required value=""
                                            onkeypress="return SoloMontos(event, this)">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-credit-card"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label>Saldo</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtPrecio" name="txtSaldo" type="text" class="form-control"
                                            placeholder="Saldo" required value=""
                                            onkeypress="return SoloMontos(event, this)">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-credit-card"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <button type="submit" id="btnRegistrarPago" name="btnRegistrarPago"
                                            class="btn btn-primary btn-block">Registrar Pago</button>
                                    </div>
                            </div>
                            </form>
                           

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
    <script src="dist/js/productos.js"></script>
</body>

</html>