<?php

include_once('consultas.php');
class clsClienteData
{
  private $objConsultas;
  public function __construct()
  {
    $this->objConsultas = new clsConsultas();
  }

  public function registrarCliente($datos)
  {

    $sql = "INSERT INTO terceros(identificacionTercero, nombreTercero
      , emailTercero, celularTercero, telefonoTercero, direccionTercero, descripcionTercero,
        esCliente, esProveedor, estadoTercero, usuarioCreacion,fechaCreacion)
       VALUES ('" . $datos->obteneridentificacionTercero() . "','" . $datos->obtenernombreTercero() . "',
         '" . $datos->obteneremailTercero() . "','" . $datos->obtenercelularTercero() . "',
         '" . $datos->obtenertelefonoTercero() . "','" . $datos->obtenerdireccionTercero() . "',
         '" . $datos->obtenerdescripcionTercero() . "','" . $datos->obteneresCliente() . "',
         '" . $datos->obteneresProveedor() . "',1,'"
         . $datos->obtenerusuarioCreacion()."',NOW())";


    return $this->objConsultas->actualizarEliminarInsertar($sql);
  }
}
