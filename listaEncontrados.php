<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>P&aacute;gina de inicio</title>

<link href="estilos_home.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.cabecera,div.listado","big");
}
</script>
</head>

<body>

<?php

include("conexion.php");



//include("funciones.php");
echo"<div class='listado'>";
echo"<table>
	<th width=410 align='left'>T&Iacute;tulos</th>
	<th width=400 align='left'>Autores</th> 
	</table>";


mysql_connect($host,$usuario,$clave);
mysql_select_db($base);

if (isset($_POST["titulo"]) and ($_POST["titulo"] != ""))
{
$buscado = $_POST["titulo"];
$verTodos = "SELECT id,titulo,autor FROM libros WHERE titulo LIKE '%$buscado%'";
}else{
$buscado = $_POST["autor"];
$verTodos = "SELECT id,titulo,autor FROM libros WHERE autor LIKE '%$buscado%'";
}
$datos = mysql_query($verTodos);

		echo"<table cellspacin = 0>";

	
		$i = 0;	
		while($fila = mysql_fetch_array($datos))
		
		{	
			$titulo = $fila["titulo"];
			$autor = $fila["autor"];
			$nomAutor= strstr($autor,',');
			$nomAutor= substr($nomAutor,1);
			$apeAutor= strstr($autor,',',true);
			
			$id = $fila["id"];
			
			//if($fila["id"]%2 == 0)
			if($i%2 == 0)
			{
			echo"<tr class='par'>";
			echo"<td class='par' 	width=400><a href='modificar.php?codigo=$id'>$titulo</a><td>";
			echo"<td class='par' 	width=400><a href='http://es.wikipedia.org/wiki/$nomAutor $apeAutor' target='_blank'>$autor</a><td>";
			echo"</tr>";
			}
			else
			{
			echo"<tr class='inpar'>";
			echo"<td class='inpar' width=400><a href='modificar.php?codigo=$id'>$titulo</a><td>";
			echo"<td class='inpar' width=400><a href='http://es.wikipedia.org/wiki/$nomAutor $apeAutor' target='_blank'>$autor</a><td>";
			echo"</tr>";
			}
		$i ++;	
		}
		echo"<table>";	
		echo"<a href='imprimir.php?titulo=$buscado'> &nbsp;Generar PDF</a>";
		echo "</div>";


?>
</body>
</html>