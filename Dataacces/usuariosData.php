<?php

include_once ('consultas.php');
class clsUsuariosData
{
    private $objConsultas;
    public function __construct()  
    {
        $this->objConsultas = new clsConsultas();
    }

    public function registrarUsuario($datos)
    {      
      $sql=  "INSERT INTO usuarios(nombreUsuario, primerNombre, segundoNombre, primerApellido, 
        segundoApellido, email, celular, indetificacion, direccion, perfilUsuario, passUsuario,
        estadoUsuario, usuarioCreacion,  fechaCreacion ) VALUES ('".$datos->obtenerNombreUsuario()."','".$datos->obtenerPrimerNombre()."',
         '".$datos->obtenerSegundoNombre()."','".$datos->obtenerPrimerApellido()."',
         '".$datos->obtenerSegundoApellido()."','".$datos->obtenerEmail()."','".$datos->obtenerCelular()."',
         '".$datos->obtenerIdentificacion()."','".$datos->obtenerDireccion()."',".$datos->obtenercmbPerfil().",
         '".$datos->obtenerPassword()."',1,'".$datos->obtenerUsuarioCreacion()."',NOW())";
         
         
          return $this->objConsultas->actualizarEliminarInsertar($sql);
    }

    public function autenticarUsuario($datos)
    {

      $sql="SELECT  perfilUsuario FROM  usuarios  WHERE   nombreUsuario ='".$datos->obtenerNombreUsuario()."' AND  passUsuario ='".$datos->obtenerPassword()."';";
      return $this->objConsultas->cargarDatos($sql);
    }

}


?>