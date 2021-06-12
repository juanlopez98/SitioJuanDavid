<?php

include_once('../Dataacces/Encript.php');
class clsClienteEntidad
{
    private $identificacionTercero, $nombreTercero,$emailTercero,$celularTercero,
    $telefonoTercero,$direccionTercero,$descripcionTercero,
    $estadoTercero, $usuarioCreacion, $esCliente,
    $esProveedor, $contactoTercero,$fechaCreacion,$usuarioModificacion,
    $fechaModificacion,$objClsEncript;
   

    public function __construct()
   
    {
        $this->objClsEncript = new clsEncript();
        
    }
    public function setearidentificacionTercero($value)
    {
        $this->identificacionTercero =trim($value);
    }
    public function setearnombreTercero($value)
    {
        $this->nombreTercero =trim($value);
    }
    public function setearemailTercero($value)
    {
        $this->emailTercero =trim($value);
    }
    public function setearcelularTercero($value)
    {
        $this->celularTercero =trim($value);
    }
    public function seteartelefonoTercero($value)
    {
        $this->telefonoTercero =trim($value);
    }
    public function seteardireccionTercero($value)
    {
        $this->direccionTercero =trim($value);
    }
    public function seteardescripcionTercero($value)
    {
        $this->descripcionTercero =trim($value);
    }
    public function setearestadoTercero($value)
    {
        $this->estadoTercero =trim($value);
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
    public function setearesCliente($value)
    {
        $this->esCliente =trim($value);
    }
    public function setearesProveedor($value)
    {
        $this->esProveedor =trim($value);
    }
      
    public function setearcontactoTercero($value)
    {
        $this->contactoTercero =trim($value);
    }
    public function setearfechaCreacion($value)
    {
        $this->fechaCreacion =trim($value);
    }
    public function setearusuarioModificacion($value)
    {
        $this->usuarioModificacion =trim($value);
    }
    public function setearfechaModificacion($value)
    {
        $this->fechaModificacion =trim($value);
    }





    public function obteneridentificacionTercero()
    {
        return $this->identificacionTercero;
    }
    public function obtenernombreTercero()
    {
        return $this->nombreTercero;
    }
    public function obteneremailTercero()
    {
        return $this->emailTercero;
    }
    public function obtenercelularTercero()
    {
        return $this->celularTercero;
    }
    public function obtenertelefonoTercero()
    {
        return $this->telefonoTercero;
    }
    public function obtenerdireccionTercero()
    {
        return $this->direccionTercero;
    }
    public function obtenerdescripcionTercero()
    {
        return $this->descripcionTercero;
    }
    public function obtenerestadoTercero()
    {
        return $this->estadoTercero;
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
    public function obteneresCliente()
    {
        return $this->esCliente;
    }
    public function obteneresProveedor()
    {
        return $this->esProveedor;
    }
    public function obtenercontactoTercero()
    {
        return $this->contactoTercero;
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
    
}



?>


