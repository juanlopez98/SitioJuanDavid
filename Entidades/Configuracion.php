<?php
include_once('../Dataacces/Encript.php');
//crear una clase la clase puede tener propiedades,caracteristicas
//Tipo de variable private=Solo lo puedo ver yo,public=lo pueden ver todos,protected=lo pueden ver las personas que yo autorice
//Todas las variables se iniciar con signo $
class clsconfiguracionEntidad
{     
   private $Servidor, $BasedeDatos, $Usuario, $Clave, $objClsEncript, $valoresCargados;

   public function __construct()
   {
     $this->objClsEncript = new clsEncript();
   }

   public function setearServidor($value)
  {
      //Para validar los datos  is_null= si llega , ¡isset=si no llega ,strlen=para la longitud de una cadena.
      if(is_null($value) || !isset($value) || (strlen($value) <= 0 ))
      {
          $this->Servidor = null;
      }
      else
      {
        $this->Servidor =$this->objClsEncript->encriptar(trim($value));
         
      }
      
  }
  
  
  public function setearBasedeDatos($value)
  {
  if(is_null($value) || !isset($value) || (strlen($value) <= 0 ))
  {
      $this->BasedeDatos = null;
  }
  else
  {
    $this->BasedeDatos = $this->objClsEncript->encriptar(trim($value));
  }
    
  }



  public function setearUsuario($value)
  {
    if(is_null($value) || !isset($value) || (strlen($value) <= 0 ))
    {
        $this->Usuario = null;
    }
    else
    {
      $this->Usuario = $this->objClsEncript->encriptar(trim($value));
    }
      
    
  
  }
  public function setearClave($value)
  {
    if(is_null($value) || !isset($value) || (strlen($value) <= 0 ))
    {
        $this->Clave = null;
    }
    else
    {
      $this->Clave =$this->objClsEncript->encriptar(trim($value));
    }
       
  }

  public function obtenerServidor()
  {
      return $this->Servidor;
  }
  public function obtenerBasedeDatos()
  {
      return $this->BasedeDatos;
  }
  public function obtenerUsuario()
  {
      return $this->Usuario;
  }
  public function obtenerClave()
  {
      return $this->Clave;
  }
  public function obtenerDatosCargados()
  
  {
 
   $datosCargados = array();
    $this->valoresCargados = array();
    
if (!is_null($this->Servidor))
{
  $datosCargados[] = "server";
  $this->valoresCargados[] = $this->Servidor;
}
if(!is_null($this->BasedeDatos))
{
  $datosCargados[] = "BD";
  $this->valoresCargados[] = $this->BasedeDatos;
}
if(!is_null($this->Usuario ))
{
  $datosCargados[] = "User";
  $this->valoresCargados[] = $this->Usuario;
}
if(!is_null($this->Clave ))
{
  $datosCargados[] = "Pass";
  $this->valoresCargados[] = $this->Clave;
}
return $datosCargados;

}
public function obtenerValorCargado($indice)
{
  return $this->valoresCargados[$indice];
}
 
}
?>