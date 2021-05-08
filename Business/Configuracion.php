<?php
if(isset($_POST['txtServidor']))
{
    echo 'Se recupero el Servidor' .$_POST['txtServidor'].'<br />';
}
else{
    echo 'No se recupero el Servidor<br />';

}
if(isset($_POST['txtBaseDeDatos']))
{
    echo 'Se recupero la Base de datos '.$_POST['txtBaseDeDatos'].'<br />';
}
else{
    echo 'No se recupero la Base de datos<br /> ';

}
if(isset($_POST['txtUsuario']))
{
    echo 'Se recupero el Usuario'.$_POST['txtUsuario'].'<br />';
}
else{
    echo 'No se recupero el Usuario<br />';
}
if(isset($_POST['txtPassword']))
{
    echo 'Se recupero el Password'.$_POST['txtPassword'].'<br />';
}
else{
    echo 'No se recupero el Password';
}





?>