<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control Escolar</title>
</head>
<?php
error_reporting(E_ALL & ~E_NOTICE);  
?>
<body>
<?php
$servidor="localhost";
$usuario="root";
$clave="";
$conexion=mysql_connect($servidor,$usuario,$clave) or die("Fallo la conexion");
mysql_select_db("escuela",$conexion) or die ("Problemas en la seleccion de la Base de Datos");
?>
</body>
</html>
