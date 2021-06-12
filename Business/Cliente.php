<?php

include_once('../Entidades/Cliente.php');
include_once('../Dataacces/ClienteData.php');

if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objclsClienteData = new clsClienteData();
        $objClsClienteEntidad = ObtenerDatosFormulario();
        

        if ($objclsClienteData->registrarCliente(ObtenerDatosFormulario())) {
            $mensaje = "operacion ejecutada correctamente. ";
            header('location:../pages/home/?MsgType=Ext&MsgValue=' . urlencode($mensaje));
        } else {
            EnviarMensajeError();
        }
    }
} else {
    EnviarMensajeError();
}

function EnviarMensajeError()
{

    /*$mensaje = "Ocurrio un erro en la operacion..</br>intenta nuevamente.";
     /* header('Location:../Pages/Home/?MsgType=Err&MsgValue='. urlencode($mensaje)); */
}

function ObtenerDatosFormulario()
{
    $objClsClienteEntidad= new clsClienteEntidad();
    if (isset($_POST["txtidentificacionTercero"])) {
        echo "1";
        $objClsClienteEntidad->setearidentificacionTercero($_POST["txtidentificacionTercero"]);

        if (isset($_POST['txtnombreTercero'])) {
            echo "1";
            $objClsClienteEntidad->setearnombreTercero($_POST['txtnombreTercero']);
            if (isset($_POST["txtemailTercero"])) {
                echo "1";
                $objClsClienteEntidad->setearemailTercero($_POST["txtemailTercero"]);
                if (isset($_POST["txtcelularTercero"])) {
                    echo "1";
                    $objClsClienteEntidad->setearcelularTercero($_POST["txtcelularTercero"]);

                    if (isset($_POST["txttelefonoTercero"])) {
                        echo "1";
                        $objClsClienteEntidad->seteartelefonoTercero($_POST["txttelefonoTercero"]);

                        if (isset($_POST["txtDireccionTercero"])) {
                            echo "6";
                            $objClsClienteEntidad->setearDireccionTercero($_POST["txtDireccionTercero"]);

                            if (isset($_POST["txtDescripcionTercero"])) {
                                echo "7";
                                $objClsClienteEntidad->setearDescripcionTercero($_POST["txtDescripcionTercero"]); 


                                return $objClsClienteEntidad;
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
?>