<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador</title>
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

$Administrador=$_REQUEST[administrador];
$Clave=$_REQUEST[clave];

if ($Administrador=="Omar9980" && $Clave=="9980")
{
	$_SESSION['usuario']=$Administrador;
	$_SESSION['clave']=$Clave;
}

if($_SESSION['usuario']=="Omar9980" && $_SESSION['clave']=="9980")
{
?>

<table width="1000" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="111" colspan="2"><div align="right"><a class="[small, medium, large] button" href="cerrar_sesion.php">Cerrar Sesion</a> </div></td>
  </tr>
  <tr>
    <td width="250" height="36"><div align="center"><a href="Admin.php?op=1">Agregar Alumno</a></div></td>
    <td height="300" rowspan="5">
	<div align="center">
	<?php 
	$opcion=$_REQUEST[op];
	switch($opcion)
	{
	case "1" : ?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_1" type="text" id="nombre_1" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_1" type="password" id="clave_1" maxlength="6" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Turno:</div></td>
      <td><label>
        <input name="m_1" type="radio" value="Matutino" />
      </label>
      Matutino 
      <label>
      <input name="m_1" type="radio" value="Vespertino" />
      </label>
      Vespertino </td>
    </tr>
    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_1" type="text" id="grado_1" maxlength="1" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_1" type="text" id="grupo_1" maxlength="1" onkeyup = "this.value=this.value.toUpperCase()" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_1" type="text" id="ciclo_1" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Agregar" />
        </label>
      <input type="hidden" name="opc" value="1" />	          	  
	  </div></td>
    </tr>
  </table>
</form>
	<?php
	$opcion=0;
	break;
	case "2" :?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_2" type="text" id="nombre_2" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_2" type="password" id="clave_2" maxlength="6" />
      </label></td>
    </tr>

    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_2" type="text" id="grado_2" maxlength="1" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_2" type="text" id="grupo_2" maxlength="1" onkeyup = "this.value=this.value.toUpperCase()" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_2" type="text" id="ciclo_2" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Agregar" />
        </label>
      <input type="hidden" name="opc" value="2" />
	  </div></td>
    </tr>
  </table>
</form>
	<?php
	$opcion=0;
	break;
	case "3" :
		echo "<center><strong>Seleccione de la izquierda la operacion  desee realizar.</strong></center>";
	break;
	case "4" : 
		echo "<strong>Escriba los datos que se piden para MODIFICAR el registro que desee</strong>";
	?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right"></div></td>
      <td>
	  <label>
      <input name="m_2" type="radio" value="1" />
	  </label>
      Alumno 
	  <label>
      <input name="m_2" type="radio" value="2" /> 
      </label>
      Profesor 
	</td>
    </tr>
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_3" type="text" id="nombre_3" />
      </label></td>
    </tr>

    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_3" type="password" id="clave_3" maxlength="6" />
      </label></td>
    </tr>

    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Modificar" />
        </label>
      <input type="hidden" name="opc" value="3" />
	  </div></td>
    </tr>
  </table>
</form>
	<?php
	break;
	case "5" : 
	echo "<strong>Escriba los datos que se piden para ELIMINAR el registro que desee</strong>";
	?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right"></div></td>
      <td><label>
        <input name="m_3" type="radio" value="1" />
		</label>
      Alumno 
	  <label>
      <input name="m_3" type="radio" value="2" /> 
	        </label>
      Profesor 
	</td>
    </tr>
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_4" type="text" id="nombre_4" />
      </label></td>
    </tr>

    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_4" type="password" id="clave_4" maxlength="6" />
      </label></td>
    </tr>

    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Eliminar" />
		<input type="hidden" name="opc" value="4" />
        </label>
	  </div></td>
    </tr>
  </table>
</form>
	<?php
	break;
	}
	
$opcion_2=$_REQUEST[opc];	
	switch ($opcion_2)
	{
	case "1" :
		$nombre_1=$_POST['nombre_1'];
		$clave_1=$_POST['clave_1'];
		$turno_1=$_POST['m_1'];
		$grado_1=$_POST['grado_1'];
		$grupo_1=$_POST['grupo_1'];
		$ciclo_1=$_POST['ciclo_1'];
		
		if($nombre_1=='' or $clave_1=='' or $grado_1=='' or $grupo_1=='' or $ciclo_1=='' or $turno_1=='')
		{
			echo "<center><strong>Uno de los campos esta vacio, llenelos todos sin excepcion</strong></center>";
			echo "<br><a href = Admin.php?op=1>Intentar de Nuevo</a>";
		}
		else
		{
			$registros=mysql_query("select * from alumnos where nombre='$nombre_1' or  clave='$clave_1'",$conexion)or die("Problemas en el Select".mysql_error());

			if($reg=mysql_fetch_array($registros))
			{

				if($reg['nombre']=$nombre_1)
				{
					echo "<center><strong>Ya existe un alumno con ese nombre</strong></center><br>";
				}

				if($reg['clave']=$clave_1)
				{
					echo "<center><strong>Ya existe un alumno con esa clave</strong></center><br>";
				}
				
				echo "<br><a href = Admin.php?op=1>Intentar de Nuevo</a>";
			}
			else
			{
				$sql=mysql_query("insert into alumnos values('$nombre_1','$grado_1','$grupo_1','$turno_1','$ciclo_1','$clave_1')",$conexion)or die("Problemas  en el select".mysql_error());
				echo "<center><strong>El registro se ha insertado correctamente</strong></center>";
				
			}
		}
	break;
	case "2" :
		$nombre_2=$_POST['nombre_2'];
		$clave_2=$_POST['clave_2'];
		$grado_2=$_POST['grado_2'];
		$grupo_2=$_POST['grupo_2'];
		$ciclo_2=$_POST['ciclo_2'];
		
		if($nombre_2=='' or $clave_2=='' or $grado_2=='' or $grupo_2=='' or $ciclo_2=='')
		{
			echo "<center><strong>Uno de los campos esta vacio, llenelos todos sin excepcion</strong></center>";
			echo "<br><a href = Admin.php?op=2>Intentar de Nuevo</a>";
		}
		else
		{
			$registros=mysql_query("select * from profesores where nombre='$nombre_2' or  clave='$clave_2'",$conexion)or die("Problemas en el Select".mysql_error());

			if($reg=mysql_fetch_array($registros))
			{

				if($reg['nombre']=$nombre_2)
				{
					echo "<center><strong>Ya existe un Profesor con ese nombre</strong></center><br>";
				}

				if($reg['clave']=$clave_2)
				{
					echo "<center><strong>Ya existe un Profesor con esa clave</strong></center><br>";
				}
				
				echo "<br><a href = Admin.php?op=2>Intentar de Nuevo</a>";
			}
			else
			{
				$sql=mysql_query("insert into profesores values('$clave_2','$nombre_2','$grado_2','$grupo_2','$ciclo_2')",$conexion)or die("Problemas  en el select".mysql_error());
				echo "<center><strong>El registro se ha insertado correctamente</strong></center>";
			}
		}
	break;
	case "3" : ?>


<?php
$nombre=$_REQUEST['nombre_3'];
$clave=$_REQUEST['clave_3'];
$opcion=$_REQUEST['m_2'];

if($opcion==1)
{
	$registros=mysql_query("select * from alumnos where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());

	if($reg=mysql_fetch_array($registros))
	{ ?>
<form id="form2" name="form2" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_12" type="text" id="nombre_12" value="<?php echo $reg['nombre'];?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_12" type="text" id="clave_12" value="<?php echo $reg['clave'];?>" />
      </label></td>
    </tr>
	<tr>
      <td><div align="right">Turno:</div></td>
      <td>
	   <?php
	   if($reg['turno']=="Matutino")
	   {
	   ?>
        <label>
        <input name="radiobutton" type="radio" value="Matutino" checked="checked" />
        </label>
        Matutino 
        <label>
        <input name="radiobutton" type="radio" value="Vespertino" />
        </label> 
        Vespertino 
	   <?php
	   }
	   else
	   {?>
	    <label>
        <input name="radiobutton" type="radio" value="Matutino" />
        </label>
        Matutino 
        <label>
        <input name="radiobutton" type="radio" value="Vespertino" checked="checked"/>
        </label> 
        Vespertino 
		<?php
	   }
	   ?>
		</td>
    </tr>
    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_12" type="text" id="grado_12" value="<?php echo $reg['grado'];?>" />
        </label></td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_12" type="text" id="grupo_12" value="<?php echo $reg['grupo'];?>" />
        </label></td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_12" type="text" id="ciclo_12" value="<?php echo $reg['ciclo'];?>" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <label>
          <input type="submit" name="Submit2" value="Guardar" />
          </label>
          <a href="Admin.php?op=4">Cancelar</a>
          <input type="hidden" name="opc" value="7" />
      </div></td>
    </tr>
  </table>
</form>
<?php
	}
}
if($opcion==2)
{
	$registros=mysql_query("select * from profesores where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());

	if($reg=mysql_fetch_array($registros))
	{ ?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_1" type="text" id="nombre_1" value="<?php echo $reg['nombre'];?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_1" type="text" id="clave_1" value="<?php echo $reg['clave'];?>" />
      </label></td>
    </tr>

    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_1" type="text" id="grado_1" value="<?php echo $reg['grado'];?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_1" type="text" id="grupo_1" value="<?php echo $reg['grupo'];?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_1" type="text" id="ciclo_1" value="<?php echo $reg['ciclo'];?>" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Guardar" />
        </label>
      <a href="Admin.php?op=4">Cancelar</a>
      <input type="hidden" name="opc" value="8" />
	  </div></td>
    </tr>
  </table>
  </form>
<?php
	}
}
?>


	<?php
	break;
	case "4" : ?>
<?php
$nombre=$_REQUEST['nombre_4'];
$clave=$_REQUEST['clave_4'];
$opcion_3=$_REQUEST['m_3'];

if($opcion_3=="1")
{
	$registros=mysql_query("select * from alumnos where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());

	if($reg=mysql_fetch_array($registros))
	{ ?>
<form id="form2" name="form2" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_12" type="text" id="nombre_12" value="<?php echo $reg['nombre'];?>" />
        </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_12" type="text" id="clave_12" value="<?php echo $reg['clave'];?>" />
        </label></td>
    </tr>
	<tr>
      <td><div align="right">Turno:</div></td>
      <td><label></label>
        <label>
        <input name="radiobutton" type="radio" value="radiobutton" />
      </label>
        Matutino 
        <label>
        <input name="radiobutton" type="radio" value="radiobutton" />
        </label> 
        Vespertino </td>
    </tr>
    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_12" type="text" id="grado_12" value="<?php echo $reg['grado'];?>" />
        </label>
        </td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_12" type="text" id="grupo_12" value="<?php echo $reg['grupo'];?>" />
        </label>
        </td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_12" type="text" id="ciclo_12" value="<?php echo $reg['ciclo'];?>" />
        </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <label>
          <input type="submit" name="Submit2" value="Eliminar" />
          </label>
          <a href="Admin.php?op=5">Cancelar</a>
          <input type="hidden" name="opc" value="5" />
      </div></td>
    </tr>
  </table>
</form>
<?php
	}
}
elseif($opcion_3=="2")
{
	$registros=mysql_query("select * from profesores where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());

	if($reg=mysql_fetch_array($registros))
	{ ?>
<form id="form1" name="form1" method="post" action="Admin.php">
  <table width="400" border="0" align="center">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><label>
        <input name="nombre_1" type="text" id="nombre_1" value="<?php echo $reg['nombre'];?>"  />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td><label>
        <input name="clave_1" type="text" id="clave_1" value="<?php echo $reg['clave'];?>" />
      </label></td>
    </tr>

    <tr>
      <td><div align="right">Grado:</div></td>
      <td><label>
        <input name="grado_1" type="text" id="grado_1" value="<?php echo $reg['grado'];?>" />
      </label>
      </td>
    </tr>
    <tr>
      <td><div align="right">Grupo:</div></td>
      <td><label>
        <input name="grupo_1" type="text" id="grupo_1" value="<?php echo $reg['grupo'];?>" />
      </label>
      </td>
    </tr>
    <tr>
      <td><div align="right">Ciclo:</div></td>
      <td><label>
        <input name="ciclo_1" type="text" id="ciclo_1" value="<?php echo $reg['ciclo'];?>" />
       </label>
	   </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Eliminar" />
		<input type="hidden" name="opc" value="5" />
        </label>
      <a href="Admin.php?op=5">Cancelar</a>
      <input type="hidden" name="opc" value="6" />
	  </div></td>
    </tr>
  </table>
  </form>
<?php
	}
}
else
{
	echo '<strong>No hay coincidencia en los datos proporcionados</strong>';
}
?>
	<?php
	break;
	
	case "5" :
	$nombre=$_REQUEST['nombre_12'];
	$clave=$_REQUEST['clave_12'];
	
	mysql_query("delete from alumnos where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());
	
	echo '<strong>El registro ha sido Eliminado</strong>';
	break;
	
	case "6" :
	$nombre=$_REQUEST['nombre_1'];
	$clave=$_REQUEST['clave_1'];
	
	mysql_query("delete from profesores where nombre='$nombre' and  clave='$clave'",$conexion)or die("Problemas en el Select".mysql_error());
	
	echo '<strong>El registro ha sido Eliminado</strong>';
	break;
	
	case "7" :
		$nombre_1=$_POST['nombre_12'];
		$clave_1=$_POST['clave_12'];
		$turno_1=$_POST['radiobutton'];
		$grado_1=$_POST['grado_12'];
		$grupo_1=$_POST['grupo_12'];
		$ciclo_1=$_POST['ciclo_12'];
		
		if($nombre_1=='' or $clave_1=='' or $grado_1=='' or $grupo_1=='' or $ciclo_1=='' or $turno_1=='')
		{
			echo "<center><strong>Uno de los campos esta vacio, llenelos todos sin excepcion</strong></center>";
			echo "<br><a href = Admin.php?op=4>Intentar de Nuevo</a>";
		}
		else
		{
				mysql_query("Update alumnos Set nombre='$nombre_1',grado='$grado_1',grupo='$grupo_1',turno='$turno_1',ciclo='$ciclo_1',clave='$clave_1' where nombre='$nombre_1' and clave='$clave_1'",$conexion)or die("Problemas  en el select".mysql_error());
				echo "<center><strong>El registro se ha Modificado correctamente</strong></center>";
		}
	break;
	
	case "8" :
		$nombre_2=$_POST['nombre_1'];
		$clave_2=$_POST['clave_1'];
		$grado_2=$_POST['grado_1'];
		$grupo_2=$_POST['grupo_1'];
		$ciclo_2=$_POST['ciclo_1'];
		
		if($nombre_2=='' or $clave_2=='' or $grado_2=='' or $grupo_2=='' or $ciclo_2=='')
		{
			echo "<center><strong>Uno de los campos esta vacio, llenelos todos sin excepcion</strong></center>";
			echo "<br><a href = Admin.php?op=4>Intentar de Nuevo</a>";
		}
		else
		{
				mysql_query("update profesores set clave='$clave_2',nombre='$nombre_2',grado='$grado_2',grupo='$grupo_2',ciclo='$ciclo_2' where nombre='$nombre_2' and clave='$clave_2'",$conexion)or die("Problemas  en el select".mysql_error());
				echo "<center><strong>El registro se ha Modificado correctamente</strong></center>";
		}
	break;
	}
	?>
	</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center"><a href="Admin.php?op=2">Agregar Profesor</a> </div></td>
  </tr>
  <tr>
    <td height="21"><div align="center"><a href="Admin.php?op=5">Eliminar</a></div></td>
  </tr>
  <tr>
    <td height="21"><div align="center"><a href="Admin.php?op=4">Modificar</a></div></td>
  </tr>
  <tr>
    <td width="250" height="60"></td>
  </tr>
  <tr>
    <td height="70" colspan="2">&nbsp;</td>
  </tr>
</table>

<?php
}
else
{
?>
  <form id="form1" name="form1" method="post" action="Admin.php">
    <table width="272" border="0">
      <tr>
        <td width="106"><div align="right">Administrador:</div></td>
        <td width="150"><label>
          <input name="administrador" type="text" id="administrador" />
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Clave:</div></td>
        <td><label>
          <input name="clave" type="password" id="clave" />
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
          <input type="submit" name="Submit" value="Iniciar Sesion" />
		        <input type="hidden" name="op" value="3" />
          </label>
        </div></td>
      </tr>
    </table>
  </form>
  <?php
  }
  ?>
</div>
</body>
</html>
