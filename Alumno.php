<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alumno</title>
<link rel="stylesheet" type="text/css" href="foundation/stylesheets/foundation.css">
</head>
<?php
error_reporting(E_ALL & ~E_NOTICE);  
?>
<body>
<div align="center">
<?php
session_start();
include("conexion.php");

$nombre=$_REQUEST["nombre_1"];
$clave=$_REQUEST["clave_1"];

$registros=mysql_query("select * from alumnos where nombre='$nombre' and  clave='$clave'",$conexion) or die("Problemas en el Select ".mysql_error());

if($reg=mysql_fetch_array($registros))
{

	$_SESSION['nombre_1']=$nombre;
	$_SESSION['clave_1']=$clave;
}

if($_SESSION['nombre_1'] != NULL && $_SESSION['clave_1'] != NULL)
{
$registro_2=mysql_query("select * from calificaciones where clave_alumno='$_SESSION[clave_1]'")or die("Problemas en el Select ".mysql_error());
?>
<table width="1000" border="0" align="center">
  <tr>
	<div align="left"><h3><?php echo "Bienvenido ".$_SESSION['nombre_1']; echo '</h3><br>';?>
    <p align="center"><a class="button red nice" href="cerrar_sesion.php">Cerrar Sesion</a></p>
    <br>
  </div>
	</td>
  </tr>
  <tr>
    <td height="300" colspan="2">
	<div align="center">
	  <table width="900" border="1">
        <tr>
          <td width="100"><div align="center">Materia</div></td>
          <td width="100"><div align="center">Bimestre 1</div></td>
          <td width="100"><div align="center">Bimestre 2</div></td>
          <td width="100"><div align="center">Bimestre 3</div></td>
          <td width="100"><div align="center">Bimestre 4</div></td>
          <td width="100"><div align="center">Bimestre 5</div></td>
          <td width="100"><div align="center">Promedio</div></td>
        </tr>
      </table>
	<?php 
	while($reg_2=mysql_fetch_array($registro_2))
	{
	?>
	  <table width="900" border="1">
        <tr>
          <td width="100"><div align="center"><?php echo $reg_2['nombre_materia'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['b1'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['b2'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['b3'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['b4'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['b5'];?></div></td>
          <td width="100"><div align="center"><?php echo $reg_2['promedio'];?></div></td>
        </tr>
      </table>
	<?php 
	}
	?>
	</div>
	</td>
  </tr>
  <tr>
  </tr>
</table>
<?php
}
else
{
	echo "<center><strong>Datos Incorrectos</strong></center>";
	echo "<br><a href = index.php?op=1>Intenta de Nuevo</a>";
}
?>
</div>
</body>
</html>
