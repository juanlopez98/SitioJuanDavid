<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JUAN DAVID | Registro Usuarios</title>
  <?php 
 
  include_once('../../Business/caduca.php');
  include_once('../Templates/heah.php');
  
  ?>
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../img/ico.ico" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../home/" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="../home/" class="brand-link">
        <img src="../../img/ico.ico" alt="Logo Sitio" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sitio Juan David </span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../Img/FOTO.JPG" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="../Home/" class="d-block">Usuario</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <?php
           
        if (isset($_SESSION['perfil']))
        {
        if($_SESSION['perfil']==='1')
        {
          include_once('../Templates/menuInventario.php');
        }
        elseif($_SESSION['perfil']==='2')
        {
        include_once('../Templates/menuVendedor.php');
        }        
        elseif($_SESSION['perfil']==='3')
        {
        include_once('../Templates/menuAdmin.php');
        }
        elseif($_SESSION['perfil']==='4')
        {
        include_once('../Templates/menuSuperUsuario.php'); 
        }
      
        else
      {
       $mensaje = "Ocurrio un erro en la operacion..</br>intenta nuevamente.";
      header('Location:../Pages/Home/?MsgType=Err&MsgValue='. urlencode($mensaje)); 
      }
    }
        
      
     
        ?>
      </div>
    </aside>
    <div class="wrapper">
      <div class="content-wrapper">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-2">
              </div>
              <?php
              if(isset($_GET['MsgType'])){
                  $tipoMensaje = $_GET['MsgType'];
                  $mensaje = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";
                  if($tipoMensaje === "Err")
                  {
                    echo "<div class='alert alert-danger alert-dismissible  container-fluid'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h5><i class='icon fas fa-ban'></i> Alert!</h5>".$mensaje."</div>";
                   

                  }
                  if($tipoMensaje === "Ext")
                  {
                      echo "<div class='alert alert-success alert-dismissible container-fluid'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h5><i class=icon fas fa-check'></i> Alert!</h5>".$mensaje."</div>";
                  }

              }

              //USUARIOS
              
              if(isset($_GET['op'])){
                  $opcion = $_GET['op'];
                 if($opcion === "Ruser"){
                      include_once('../Usuarios/Registrar.php');
                  }
                  else if($opcion === "Cuser")
                  {
                    include_once('../Usuarios/Listar_Usuarios.php');
                   }
                  else if($opcion === "Rproducts")
                  {
                     include_once('../Productos/RegistrarProducto.php');          
                   }
                  else if($opcion === "Cproducts")
                  {
                    include_once('../Productos/Listar_Productos.php');
                   }
                  else if($opcion === "Rclient")
                  {
                    include_once('../Terceros/RegistrarTercero.php');
                  }
                  else if($opcion === "Cclient")
                  {
                    include_once('../Terceros/Listar_Terceros.php'); 
                  }
                  else if($opcion === "Rvendors")
                  {
                      include_once('../Terceros/RegistrarTercero.php');    
                   }
                else if($opcion === "Cvendors")
                {
                      include_once('../Terceros/Listar_Terceros.php');
       
                }
              
                else if($opcion==="EndSesion")
                {
                  
                    session_destroy();
                    
                }
              }
             
              

      
      
          
             
              ?>
             
              <div class="col-2">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once('../Templates/footer.php'); ?>
    </div>
    <?php include_once('../Templates/foot.php'); ?>
</body>

</html>