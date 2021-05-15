<?php
class clsConfiguracion
{
  //lo esencial que los valores sean privados
   private $nombre = null, $ruta = null, $rutaCompleta = null;
    //cada ves que ejecute lo de esta clase se me ecutara todo lo que tenga en la funcion 
    public function __construct()
    {
         
        //Definir los valores de las propiedades
      
        $this->ruta ="../Dataacces/";
        $this->nombre = "config.txt";
        $this->generarRutaCompleta();
        
        //ruta donde esta y nombre del archivo 
    }
    private function generarRutaCompleta()
    { 
        //concatenamos con el punto 
        
        $this->rutaCompleta = $this->ruta.$this->nombre;    
       
    }

    public function actualizarArchivo( $objClasConfiguracionEntidad)
    {
       if( $this->validarExistenciaArchivo())
       {
        echo "<br\>metodo dice que si ";
        $this->modificarArchivo($objClasConfiguracionEntidad);
       }
       else
       {
           echo "<br\>metodo dice que no ";
           $this->crearArchivo($objClasConfiguracionEntidad);

       }
    }
    private function validarExistenciaArchivo()
    {
        if(file_exists($this->rutaCompleta))
        {
            echo"El archivo: ".$this->nombre."Existe en la ruta: ". $this->ruta;
            return true;
        }
        else
        {
            echo"El archivo: ".$this->nombre."No existe en la ruta: ". $this->ruta;
            return false;
        }
    }
        private function crearArchivo($objClasConfiguracionEntidad)
        {
            //nos permite abrir un archivo en ruta especifica fopen lo abrimos en forma lectura y escritura "w+b"
            
            $archivo = fopen($this->rutaCompleta, "w+b");
            if($archivo == false)
            {
                echo"</br> Error al intentar crear el archivo";
            }
            else
            {
                echo "Se crea el archivo correctamente ";
                //para escribir en el archivo se utiliza  una funcion fwrite()
                fwrite($archivo, "server:".$objClasConfiguracionEntidad->obtenerServidor()."\r\n");
                fwrite($archivo, "BD:".$objClasConfiguracionEntidad->obtenerBasedeDatos()."\r\n");
                fwrite($archivo, "User:".$objClasConfiguracionEntidad->obtenerUsuario()."\r\n");
                fwrite($archivo, "Pass:".$objClasConfiguracionEntidad->obtenerClave());
           
           
            }

            //cerrar un archivo funcion fclose
            fclose($archivo);

        }
        private function modificarArchivo($objClasConfiguracionEntidad)
       
        {
            
            $arrayDatosCargados =$objClasConfiguracionEntidad->obtenerDatosCargados();
          // print_r($arrayDatosCargados);

            for($i=0; $i < count ($arrayDatosCargados); $i++){
                $arrayLineasArchivo = file($this->rutaCompleta);

                for ($j=0; $j < count($arrayLineasArchivo) ; $j++) { 
                    $linea =$arrayLineasArchivo[$j];
                    $pos = strpos ($linea, $arrayDatosCargados[$i]);
                    if($pos !== false)
                    {
                        array_splice($arrayLineasArchivo, $j, 1);
                    }
                   
                }
                $archivo = fopen($this->rutaCompleta, "w+b");
                foreach ($arrayLineasArchivo as $linea)
                 {
                    fwrite($archivo, $linea);
                }
               
                fwrite($archivo,"\r\n" .$arrayDatosCargados[$i]. ":".$objClasConfiguracionEntidad->obtenerValorCargado($i));
                fclose($archivo);
            }

        }
    }
?>
