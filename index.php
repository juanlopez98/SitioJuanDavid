<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JUAN DAVID | Inicio</title>
  <link rel="shortcut icon" href="img/Muebles.ico">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>SITIO JUAN DAVID  </b></a>
  </div>
  <!-- /.login-logo -->

<?php
  if (isset($_GET['MsgType'])) {
    $tipoMensaje = $_GET['MsgType'];
    $mensaje = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";
    if ($tipoMensaje === "Err") {
        echo "<div class='alert alert-danger alert-dismissible container-fluid role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h5><i class='icon fas fa-ban'></i> Error!</h5> " . $mensaje . " </div>";
    }
  }

?>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Preciona aceptar para iniciar sesión</p>

      <form action="Business/Usuarios.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" id="txtUsuario" name="txtUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" id="txtPassword" name="txtPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Aceptar</button>
            <input type="hidden" id="txtOperacion" name="txtOperacion" value="Login">
          </div>  
        </div>
      </form>    
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
