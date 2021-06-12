<?php
session_start();
$segundos = 120;
if(isset($_SESSION['perfil']))
{
    if($_SESSION['tiempo'] + $segundos < time())
    {
        session_destroy();
    }
    else
    {
        $_SESSION['tiempo'] = time();
       
    }
}
else
{
    header('location:../../');
}
?>