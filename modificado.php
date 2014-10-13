<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>modificado</title>
<link href="estilos_home.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

include("conexion.php");

mysql_connect($host,$usuario,$clave);
mysql_select_db($base);

@mysql_query("SET NAMES 'utf8_spanish_ci'");



$codigo = $_POST["codigo"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$edicion = $_POST["edicion"];
$coleccion = $_POST["coleccion"];
$tomo = $_POST["tomo"];
$genero = $_POST["genero"];
$lugar = $_POST["lugar"];

$actualiza ="UPDATE libros SET titulo='$titulo',autor='$autor',editorial='$editorial',
edicion='$edicion',coleccion='$coleccion',tomo='$tomo',genero='$genero',
lugar='$lugar' WHERE id='$codigo'";
if( mysql_query($actualiza))
	{
	echo "<p>Se actualizaron los datos de:'$titulo'.</p>";
	}
else{ 
	echo "<p>No se actualizaron los datos de: '$titulo' disculpe.</p>";
	}
?>

</body>
</html>
