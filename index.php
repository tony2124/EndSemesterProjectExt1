<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control Escolar</title>
<link rel="stylesheet" type="text/css" href="foundation/stylesheets/foundation.css">
</head>
<?php
error_reporting(E_ALL & ~E_NOTICE);  
?>
<body>
<form id="form2" name="form1" method="post" action="Alumno.php">
  <p align="center" class="Estilo1">&nbsp;</p>
  <p align="center" class="Estilo1">&nbsp;</p>
  <table width="250" border="0" align="center">
    <thead>
        <th colspan="2"><h4>Alumnos</h4></th>
    </thead>
    <tbody>
    <tr>
      <td width="294"><div align="right">Nombre:</div></td>
      <td width="190">
        <div align="center">
          <input name="nombre_1" type="text" id="nombre_1" />
        </div></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td>
        <div align="center">
          <input name="clave_1" type="password" id="clave_1" maxlength="6" />
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
          <input class="button small" type="submit" name="Submit2" value="Iniciar Sesion" />
        </label>
      </div></td>
    </tr>
     <tr>
      <td colspan="2">
        <a href="registroAlumno.html">Registrar un alumno</a>
      </td>
    </tr>
    </tbody>
  </table>
</form>
<form id="form1" name="form1" method="post" action="Profesor.php">
  <p align="center" class="Estilo1">&nbsp;</p>
  <p align="center" class="Estilo1">&nbsp;</p>
  <table width="250" border="0" align="center">
     <thead>
        <th colspan="2"><h4>Profesores</h4></th>
    </thead>
    <tbody>
    <tr>
      <td width="294"><div align="right">Nombre:</div></td>
      <td width="190">
        <div align="center">
          <input name="nombre_2" type="text" id="nombre_2" />
        </div></td>
    </tr>
    <tr>
      <td><div align="right">Clave:</div></td>
      <td>
        <div align="center">
          <input name="clave_2" type="password" id="clave_2" maxlength="6" />
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
          <input class="button small"  type="submit" name="Submit" value="Iniciar Sesion" />
          <input type="hidden" name="op" value="3" />

        </label>
      </div></td>
    </tr>
    <tr>
      <td colspan="2">
        <a href="registroProfesor.html">Registrar un profesor</a>
      </td>
    </tr>
  </tbody>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
