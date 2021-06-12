<?php

include_once('../Dataacces/Encript.php');
class clsProductosEntidad
{
    private $codigoProducto, $nombreProducto,$descripcionProducto,$unidadMedida,
    $marcaProducto,$precioActual,$cantidadActual,$usuarioCreacion,
    $fechaCreacion,$usuarioModificacion, $fechaModificacion, $estadoProducto,
    $objClsEncript;

    public function __construct()
   
    {
        $this->objClsEncript = new clsEncript();
        
    }
    public function setearcodigoProducto($value)
    {
        $this->codigoProducto =trim($value);
    }
    public function setearnombreProducto($value)
    {
        $this->nombreProducto =trim($value);
    }
    public function seteardescripcionProducto($value)
    {
        $this->descripcionProducto =trim($value);
    }
    public function setearunidadMedida($value)
    {
        $this->unidadMedida =trim($value);
    }

    public function setearmarcaProducto($value)
    {
        $this->marcaProducto =trim($value);
    }
    public function setearprecioActual($value)
    {
        $this->precioActual =trim($value);
    }
    public function setearcantidadActual($value)
    {
        $this->cantidadActual =trim($value);
    }
 
    public function setearusuarioCreacion($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <=0))
        {
        $this->usuarioCreacion = "system";
        }
        else
        {
            $this->usuarioCreacion =trim($value); 
        }
    }
    public function setearusuarioModificacion($value)
    {
        $this->usuarioModificacion =trim($value);
    }
    public function setearFechaModificacion($value)
    {
        $this->fechaModificacion =trim($value);
    }
       
    public function setearestadoProducto($value)
    {
        $this->estadoProducto =trim($value);
    }





    public function obtenercodigoProducto()
    {
        return $this->codigoProducto;
    }
    public function obtenernombreProducto()
    {
        return $this->nombreProducto;
    }
    public function obtenerdescripcionProducto()
    {
        return $this->descripcionProducto;
    }
    public function obtenerunidadMedida()
    {
        return $this->unidadMedida;
    }
    public function obtenermarcaProducto()
    {
        return $this->marcaProducto;
    }
    public function obtenerprecioActual()
    {
        return $this->precioActual;
    }
    public function obtenercantidadActual()
    {
        return $this->cantidadActual;
    }
    
    public function obtenerusuarioCreacion()
    {
        
        if(is_null($this->usuarioCreacion) || !isset($this->usuarioCreacion) || (strlen($this->usuarioCreacion) <=0))
        {
            return "System";
        }
        else
        {
            return $this->usuarioCreacion;

        }
    }
    public function obtenerfechaCreacion()
    {
        return $this->fechaCreacion;
    }
    public function obtenerusuarioModificacion()
    {
        return $this->usuarioModificacion;
    }
    public function obtenerfechaModificacion()
    {
        return $this->fechaModificacion;
    }
    public function obtenerestadoProducto()
    {
        return $this->estadoProducto;
    }
}



?>


