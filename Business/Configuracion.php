<?php

include_once('../Entidades/Configuracion.php');//para acceder a otras carpetas include() y include_once()
include_once('../Dataacces/ConfiguracionData.php');
if(!isset($_POST['txtServidor']))
{
    echo 'No se recupero el Servidor<br />';
}

if(!isset($_POST['txtBaseDeDatos']))
{
    echo 'No se recupero la Base de datos<br /> ';
}

if(!isset($_POST['txtUsuario']))
{
    echo 'No se recupero el Usuario<br />';
}

if(!isset($_POST['txtPassword']))
{
    echo 'No se recupero el Password';
}

$objClasConfiguracionEntidad = new clsconfiguracionEntidad();

$objClasConfiguracionEntidad->setearServidor($_POST['txtServidor']);
$objClasConfiguracionEntidad->setearBasedeDatos($_POST['txtBaseDeDatos']);
$objClasConfiguracionEntidad->setearUsuario($_POST['txtUsuario']);
$objClasConfiguracionEntidad->setearClave($_POST['txtPassword']);

$objClsConfiguracion = new clsConfiguracion();

$objClsConfiguracion->actualizarArchivo($objClasConfiguracionEntidad);





/* sAca se imprimen los datos de un objeto ,solo para ensayar 
echo 'Valor almacenado: ('.$objClasConfiguracionEntidad->obtenerServidor() .')<br />';
echo 'Valor almacenado: ('.$objClasConfiguracionEntidad->obtenerBasedeDatos() .')<br />';
echo 'Valor almacenado: ('.$objClasConfiguracionEntidad->obtenerUsuario().')<br />';
echo 'Valor almacenado: ('.$objClasConfiguracionEntidad->obtenerClave() .')<br />';*/


?>