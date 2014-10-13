<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Agregar de inicio</title>

<link href="estilos_home.css" rel="stylesheet" type="text/css" />


</head>

<body>

<?php

include("conexion.php");


//include("funciones.php");


mysql_connect($host,$usuario,$clave);
mysql_select_db($base);

if(isset($_POST["titulo"],$_POST["autor"])and $_POST["titulo"]!="" and $_POST["autor"]!="")
{

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$edicion = $_POST["edicion"];
$coleccion= $_POST["coleccion"];
$tomo = $_POST["tomo"];
$genero = $_POST["genero"];
$lugar = $_POST["lugar"];

$consulta = "INSERT INTO libros(titulo,autor,editorial,edicion,coleccion,tomo,genero,lugar)
 VALUES('$titulo','$autor','$editorial','$edicion','coleccion','$tomo','$genero','$lugar')";
	if (mysql_query($consulta))
	{
	echo "<p>El libro se agrego correctamente</p>";
	}else{
	echo "<p>No se agrego</p>";
	}
		
}else{

echo'<p>Por favor, vuelba a completar el <a href="form_cargar_titulo.php">formulario</a></p>';
}

?>
</body>
</html>