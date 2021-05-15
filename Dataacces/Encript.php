<?php
class clsEncript
{
    public function __construct()
    {
        //como declarar constante
        if(!defined('METODO'))
        {

        //cada metodo tiene su encripcion 
        define('METODO', 'AES-256-CBC');
        define('LLAVE', '$1t10');
        define('VECTOR', '202105');
    }

  }
  //Encriptar lo que se vaya a  enviar 
  
    public function encriptar($value)
    {
    //hash para enmascarar solamente 
        $salida=FALSE;
        $llave = hash('sha512', LLAVE);
        $vector = substr(hash('sha512', VECTOR), 0, 16);
   //Encirptar Fuertemente los datos 
        $salida=openssl_encrypt($value, METODO, $llave, 0, $vector);
        $salida = base64_encode($salida);
        return $salida;

    /*Encriptar en md5
        md5($value);*/
    }

}

?>