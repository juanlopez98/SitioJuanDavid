<?php
include_once('../Entidades/usuario.php');
include_once('../Dataacces/usuariosData.php');

if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClsUsuariosData = new clsUsuariosData();
        $objClsUsuarioEntidad = ObtenerDatosFormulario();
        echo ":" . $objClsUsuarioEntidad->obtenerNombreUsuario();

        if ($objClsUsuariosData->registrarUsuario(ObtenerDatosFormulario())) {
            $mensaje = "operacion ejecutada correctamente. ";
            header('location:../Pages/Home/?MsgType=Ext&MsgValue=' . urlencode($mensaje));
        } else {
            EnviarMensajeError();
        }
    }
    elseif($operacion === "Login")
    {
        $objClsUsuariosData = new clsUsuariosData();
        $objClsUsuarioEntidad = new clsUsuarioEntidad();
        if (isset($_POST['txtUsuario'])) {                                
            $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtUsuario']);
            if (isset($_POST['txtPassword'])) {
                $objClsUsuarioEntidad->setearPassUsuario($_POST['txtPassword']);
                $resultado = $objClsUsuariosData->autenticarUsuario($objClsUsuarioEntidad);
                if(!$resultado)
                {
                    $mensaje = "Verificar los datos..</br>intenta nuevamente.";
                    header('Location:../?MsgType=Err&MsgValue='.urlencode($mensaje)); 
                }
                else
                {
                    $mensaje = "Bienvenido al sitio JUAN DAVID.";
                   $resultado[0];
                   session_start();
                   $_SESSION['perfil']=$resultado[0];
                   $_SESSION['tiempo']=time();
                    header('location:../Pages/Home/?MsgType=Ext&MsgValue='.urlencode($mensaje));
                }
                
            } else {
                EnviarMensajeError();
            }
        } else {
            EnviarMensajeError();
        }
    }
} else {
    EnviarMensajeError();
}

function EnviarMensajeError()
{

    $mensaje = "Ocurrio un erro en la operacion..</br>intenta nuevamente.";
      header('Location:../Pages/Home/?MsgType=Err&MsgValue='. urlencode($mensaje)); 
}

function ObtenerDatosFormulario()
{
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_POST['txtNombreUsuario'])) {
        echo "1";
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtNombreUsuario']);
        echo ":" . $objClsUsuarioEntidad->obtenerNombreUsuario();
        if (isset($_POST['txtPrimerNombre'])) {
            echo "2";
            $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtPrimerNombre']);
            if (isset($_POST['txtSegundoNombre'])) {
                echo "3";
                $objClsUsuarioEntidad->setearSegundoNombre($_POST['txtSegundoNombre']);
                if (isset($_POST['txtPrimerApellido'])) {
                    echo "4";
                    $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtPrimerApellido']);
                    if (isset($_POST['txtSegundoApellido'])) {
                        echo "5";
                        $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtSegundoApellido']);
                        if (isset($_POST['txtEmail'])) {
                            echo "6";
                            $objClsUsuarioEntidad->setearEmail($_POST['txtEmail']);
                            if (isset($_POST['txtCelular'])) {
                                echo "7";
                                $objClsUsuarioEntidad->setearCelular($_POST['txtCelular']);
                                if (isset($_POST['txtIdentificacion'])) {
                                    echo "8";
                                    $objClsUsuarioEntidad->setearIdentificacion($_POST['txtIdentificacion']);
                                    if (isset($_POST['txtDireccion'])) {
                                        echo "9";
                                        $objClsUsuarioEntidad->setearDireccion($_POST['txtDireccion']);

                                        if (isset($_POST['txtPassUsuario'])) {
                                            
                                            $objClsUsuarioEntidad->setearPassUsuario($_POST['txtPassUsuario']);
                                            if (isset($_POST['cmbPerfil'])) {
                                                $objClsUsuarioEntidad->setearcmbPerfil($_POST['cmbPerfil']);
                                                return $objClsUsuarioEntidad;
                                            } else {
                                                EnviarMensajeError();
                                            }
                                        } else {
                                            EnviarMensajeError();
                                        }
                                    } else {
                                        EnviarMensajeError();
                                    }
                                } else {
                                    EnviarMensajeError();
                                }
                            } else {
                                EnviarMensajeError();
                            }
                        } else {
                            EnviarMensajeError();
                        }
                    } else {
                        EnviarMensajeError();
                    }
                } else {
                    EnviarMensajeError();
                }
            } else {
                EnviarMensajeError();
            }
        } else {
            EnviarMensajeError();
        }
    } else {
        EnviarMensajeError();
    }
}
