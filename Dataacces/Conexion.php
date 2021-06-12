<?php
$servidor="localhost";
$usuario="root";
$password="";
$base="bdsitio";

$conexion=mysqli_connect("$servidor","$usuario","$password") or die();
$base=mysqli_select_db($conexion,$base);

?>