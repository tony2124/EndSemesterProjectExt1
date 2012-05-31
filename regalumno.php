<?php
mysql_connect("localhost","root","");
mysql_select_db("escuela");

$nombre = $_POST['nombre'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$turno = $_POST['turno'];
$ciclo = $_POST['ciclo'];
$clave = $_POST['clave'];
$query="insert into alumnos values('$nombre','$grado','$grupo','$turno','$ciclo','$clave')";
mysql_query($query) or die(mysql_error());

?>
<script type="text/javascript">
location.href="index.php";
</script>