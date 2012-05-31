<?php
mysql_connect("localhost","root","");
mysql_select_db("escuela");

$nombre = $_POST['nombre'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$ciclo = $_POST['ciclo'];
$clave = $_POST['clave'];
$query="insert into profesores values('$clave','$nombre','$grado','$grupo','$ciclo')";
mysql_query($query) or die(mysql_error());

?>
<script type="text/javascript">
location.href="index.php";
</script>