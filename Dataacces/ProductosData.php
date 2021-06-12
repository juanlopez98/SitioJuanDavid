<?php

include_once ('consultas.php');
class clsProductosData
{
    private $objConsultas;
    public function __construct()  
    {
        $this->objConsultas = new clsConsultas();
    }

    public function registrarProductos($datos)
    {   
        
      $sql= "INSERT INTO productos(codigoProducto, nombreProducto, descripcionProducto, unidadMedida, 
        marcaProducto, precioActual, cantidadActual, estadoProducto, usuarioCreacion, fechaCreacion)
         VALUES ('".$datos->obtenercodigoProducto()."','".$datos->obtenernombreProducto()."',
         '".$datos->obtenerdescripcionProducto()."','".$datos->obtenerunidadMedida()."',
         '".$datos->obtenermarcaProducto()."','".$datos->obtenerprecioActual()."','".$datos->obtenercantidadActual().
         "', 1,'".$datos->obtenerUsuarioCreacion()."',NOW())";
             
          return $this->objConsultas->actualizarEliminarInsertar($sql);
    }

}


?>