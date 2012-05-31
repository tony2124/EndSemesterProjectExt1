<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Profesor</title>
<link rel="stylesheet" type="text/css" href="foundation/stylesheets/foundation.css">
<script type="text/javascript" src="foundation/javascripts/jquery.min.js"></script>
<script type="text/javascript" src="foundation/javascripts/foundation.js"></script>
</head>
<?php
error_reporting(E_ALL & ~E_NOTICE);  
?>
<body>
<div align="center">
<?php
session_start();
include("conexion.php");

$nombre=$_REQUEST[nombre_2];
$clave=$_REQUEST[clave_2];

$registros=mysql_query("select * from profesores where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());

if($reg=mysql_fetch_array($registros))
{

	$_SESSION['nombre_2']=$nombre;
	$_SESSION['clave_2']=$clave;
}

if($_SESSION['nombre_2'] != NULL && $_SESSION['clave_2'] != NULL)
{
?>
<table width="1000" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="57" colspan="2">
      <div align="left">
       <div class="alert-box success"> <h3><?php echo "Bienvenido ".$_SESSION['nombre_2']; echo '<br>';?></h3></div>
      </div>
      <div align="right">
        <a class="medium red button nice" href="cerrar_sesion.php">Cerrar Sesion</a> 
      </div>
    </td>
  </tr>
  <tr>

    <td height="300" rowspan="4">
	<div align="center">
	<?php 
	$opcion=$_REQUEST[op];
	switch($opcion)
	{
	case "1" : ?>
<form id="form2" name="form2" class="nice" method="post" action="Profesor.php?op=2">
  <p align="center">Escriba el nombre de la materia y la clave del alumno (ejemplo: Quiroz=9982)</p>
  <table width="250" border="0" align="center">
    <tr>
      <td width="89"><div align="right"><label>Materia:</label></div></td>
      <td width="151">
      <div align="center">
        <input name="materia" class="input-text medium" type="text" id="materia" />
      </div></td>
      <td rowspan="2">
       <br> <input  class="button small white nice" type="submit" name="Submit" value="Enviar" />
      </td>
    </tr>
	<tr>
      <td width="89"><div align="right">Clave:</div></td>
      <td width="151">
      <div align="center">
        <input name="clave_1" class="input-text medium" type="password" id="clave_1" maxlength="6" />
      </div></td>
    </tr>
  </table>
</form>
	<?php	
	break;
	case "2" :?> 
	<form id="form3" class="nice" name="form3" method="post" action="Profesor.php?op=4">
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
	$clave_1=$_REQUEST['clave_1'];
	$materia_1=$_REQUEST['materia'];	
	$registro_2=mysql_query("select * from calificaciones where clave_alumno='$clave_1' and nombre_materia='$materia_1'")or die("Problemas en el Select".mysql_error());
	while($reg_2=mysql_fetch_array($registro_2))
	{
	?>
	  <table width="900" border="1">
        <tr>
          <td width="100"><div align="center"><?php echo $reg_2['nombre_materia'];?></div></td>
          <td width="100"><div align="center"><input name="b1" type="text" id="b1" size="3" value="<?php echo $reg_2['b1'];?>" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b2" type="text" id="b2" size="3" value="<?php echo $reg_2['b2'];?>" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b3" type="text" id="b3" size="3" value="<?php echo $reg_2['b3'];?>" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b4" type="text" id="b4" size="3" value="<?php echo $reg_2['b4'];?>" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b5" type="text" id="b5" size="3" value="<?php echo $reg_2['b5'];?>" maxlength="3" /></div></td>
<td width="100"><div align="center"><input name="promedio" type="text" id="proemdio" size="3" value="<?php echo $reg_2['promedio'];?>"maxlength="3" /></div></td>
        </tr>
      </table>
	      <div align="center">
		  <input type="submit" name="Submit" value="Guardar" />
		  <a href="Profesor.php?op=3">Cancelar</a>
		  </div>
		  
	  <input name="materia" type="hidden" value="<?php echo $materia_1;?>" id="materia" />
	  <input name="clave" type="hidden" value="<?php echo $clave_1;?>" id="clave" />
	<?php 
	}
	?>
	</form>
	<?php
	break;
	case "3" :
		echo '<h5>Seleccione una opcion</h5>';
	break;
	case "4" :
	$b1=$_REQUEST['b1'];
	$b2=$_REQUEST['b2'];
	$b3=$_REQUEST['b3'];
	$b4=$_REQUEST['b4'];
	$b5=$_REQUEST['b5'];
	$promedio=$_REQUEST['promedio'];
	$materia_3=$_REQUEST['materia'];
	$clave_3=$_REQUEST['clave'];
	
mysql_query("Update calificaciones Set b1='$b1',b2='$b2',b3='$b3',b4='$b4',b5='$b5',promedio='$promedio' where nombre_materia='$materia_3' and clave_alumno='$clave_3'",$conexion)or die("Problemas  en el select".mysql_error());

echo '<strong>Calificaciones guardadas con exito</strong>';
	break;
	case "5" : ?>
<form id="form2" name="form2" class="nice" method="post" action="Profesor.php?op=6">
  <p align="center">Escriba el nombre de la materia y la clave del alumno (ejemplo: Quiroz=9982)</p>
  <table width="250" border="0" align="center">
    <tr>
      <td width="89">
        <div align="right">Materia:</div>
      </td>
      <td width="151">
      <div align="center">
        <input name="materia" class="input-text medium" type="text" id="materia" />
      </div></td>
      <td rowspan="2"><br>
         <input type="submit" class="button small white nice" name="Submit" value="Enviar" />
      </td>
    </tr>
	<tr>
      <td width="89"><div align="right">Clave:</div></td>
      <td width="151">
      <div align="center">
        <input name="clave_1" class="input-text medium" type="password" id="clave_1" maxlength="6" />
      </div></td>
    </tr>
  </table>
  
</form>
<?php
	break;
	case "6" :
	
	$clave_1=$_REQUEST['clave_1'];
	$materia_1=$_REQUEST['materia'];	
	?>
<form id="form2" class="nice" name="form2" method="post" action="Profesor.php?op=7">
	  <table width="900" border="0">
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
	  <table width="900" border="1">
        <tr>
          <td width="100"><div align="center"><input name="b1" type="text" id="b1" size="11" value="<?php echo $materia_1;?>" /></div></td>
          <td width="100"><div align="center"><input name="b1" type="text" id="b1" size="3" value="" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b2" type="text" id="b2" size="3" value="" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b3" type="text" id="b3" size="3" value="" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b4" type="text" id="b4" size="3" value="" maxlength="3" /></div></td>
          <td width="100"><div align="center"><input name="b5" type="text" id="b5" size="3" value="" maxlength="3" /></div></td>
		  <td width="100"><div align="center"><input name="promedio" type="text" id="proemdio" size="3" value=""maxlength="3" /></div></td>
        </tr>
      </table>
	      <div align="center">
		  <input type="submit" class="button small green nice" name="Submit" value="Agregar" />
		  <a href="Profesor.php?op=3" class="button small white nice">Cancelar</a>
		  </div>
		  
	  <input name="materia" type="hidden" value="<?php echo $materia_1;?>" id="materia" />
	  <input name="clave" type="hidden" value="<?php echo $clave_1;?>" id="clave" />
	</form>
	<?php
	break;
	case "7" :
	$b1=$_REQUEST['b1'];
	$b2=$_REQUEST['b2'];
	$b3=$_REQUEST['b3'];
	$b4=$_REQUEST['b4'];
	$b5=$_REQUEST['b5'];
	$promedio=$_REQUEST['promedio'];
	$materia_3=$_REQUEST['materia'];
	$clave_3=$_REQUEST['clave'];
	
$mysql=mysql_query("insert into calificaciones values('$materia_3','$b1','$b2','$b3','$b4','$b5','$promedio','$clave_3')",$conexion)or die("Problemas  en el select".mysql_error());

echo '<strong>Calificaciones agregadas correctamente</strong>';
	}
	?>
	</div>
	</td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td height="70" colspan="0" bordercolor="#FFFFFF"><div align="center">
      <p><a class="button large nice" href="Profesor.php?op=5">Agregar Calificacion</a></p>
      <p><a class="button large nice" href="Profesor.php?op=1">Modificar Calificacion</a></p>
    </div></td>
  </tr>
</table>
<?php
}
else
{
	echo "<center><strong>Datos incorrectos</strong></center>";
	echo "<br><a href = index.php?op=2>Intentar de Nuevo</a>";
}
?>
</div>
</body>
</html>
