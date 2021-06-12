<?php
include_once('../Entidades/Productos.php');
include_once('../Dataacces/ProductosData.php');

if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objclsProductosData = new clsProductosData();
        $objClsProductosEntidad = ObtenerDatosFormulario();
        

        if ($objclsProductosData->registrarProductos(ObtenerDatosFormulario())) {
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

    $mensaje = "Ocurrio un erro en la operacion..</br>intenta nuevamente.";
      header('Location:../Pages/Home/?MsgType=Err&MsgValue='. urlencode($mensaje)); 
}

function ObtenerDatosFormulario()
{
    $objClsProductosEntidad = new clsProductosEntidad();
    if (isset($_POST["txtcodigoProducto"])) {
        echo "1";
        $objClsProductosEntidad->setearcodigoProducto($_POST["txtcodigoProducto"]);

        if (isset($_POST['txtnombreProducto'])) {
            echo "1";
            $objClsProductosEntidad->setearnombreProducto($_POST['txtnombreProducto']);
            if (isset($_POST["txtdescripcionProducto"])) {

                $objClsProductosEntidad->seteardescripcionProducto($_POST["txtdescripcionProducto"]);
                if (isset($_POST["txtunidadMedida"])) {

                    $objClsProductosEntidad->setearunidadMedida($_POST["txtunidadMedida"]);
                    if (isset($_POST["txtmarcaProducto"])) {

                        $objClsProductosEntidad->setearmarcaProducto($_POST["txtmarcaProducto"]);

                        if (isset($_POST["txtprecioActual"])) {

                            $objClsProductosEntidad->setearprecioActual($_POST["txtprecioActual"]);
                            if (isset($_POST["txtcantidadActual"])) {


                                return $objClsProductosEntidad;
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