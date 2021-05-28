<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Juan David | Registrar Terceros</title>
    <?php
    include_once('../Templates/heah.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="card-body register-card-body">
                            <div class="row" >
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <p class="login-box-msg"> <b> REGISTRAR TERCEROS</b> </p>
                                    <form action="../Business/Configuracion.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Identificacion Tercero" id="txtidentificacionTercero" name="txtidentificacionTercero" maxlength="25" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-credit-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre Tercero" id="txtnombreTercero" name="txtnombreTercero" maxlength="255" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="txtemailTercero" name="txtemailTercero" maxlength="70" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Celular" id="txtcelularTercero" name="txtcelularTercero" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-mobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Telefono" id="txttelefonoTercero" name="txttelefonoTercero" maxlength="25" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row="3" placeholder="Direccion" id="txtDireccionTercero" name="txtDireccionTercero" maxlength="250" required></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-building"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row="3" placeholder="Descripcion" id="txtDescripcionTercero" name="txtDescripcionTercero" maxlength="255" required></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-info"></span>
                                                </div>
                                            </div>
                                        </div>
                                       

                                        <div class="row">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-warning btn-block">Registrar</button>
                                            </div>
                                            <div class="col-3">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include_once('../Templates/footer.php');
        ?>
    </div>
    <?php
    include_once('../Templates/foot.php');
    ?>
</body>

</html>