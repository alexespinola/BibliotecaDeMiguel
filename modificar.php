<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>modificar</title>
<link href="estilos_home.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.contenedor_izquierda,div.contenedor_derecha","big");
}

var parametros = "width=860, height=585,left=600,top=320, resizable=no, menubar=no, toolbar=no, directories=no, location=no, scrollbars=yes, status=no";
function abrirVentana(dat)
{ 
ventana = window.open ("https://www.google.com/search?site=imghp&tbm=isch&source=hp&biw=798&bih=576&q="+dat+"&oq="+dat+"&gs_l=img.3..0l10.11684.13469.0.14476.5.5.0.0.0.0.259.1065.0j1j4.5.0....0...1ac.1.21.img.iLKDCN5WBAI","ventana", parametros);
ventana.focus();
}

</script>


</head>

<body>
<?php

$id = ( $_GET["codigo"]);

include("conexion.php");

mysql_connect($host,$usuario,$clave);
mysql_select_db($base);

$verSeleccionado = "SELECT * FROM libros WHERE id='$id'";
$datos = mysql_query($verSeleccionado);

$fila =(mysql_fetch_array($datos));

$codigo_actual = $fila["id"];
$titulo_actual = $fila["titulo"];
$autor_actual = $fila["autor"];
$editorial_actual = $fila["editorial"];
$edicion_actual = $fila["edicion"];
$coleccion_actual = $fila["coleccion"];
$tomo_actual = $fila["tomo"];
$genero_actual = $fila["genero"];
$lugar_actual = $fila["lugar"];



echo'

<form action="modificado.php" target="inferior" method="post">

<div class="contenedor_izquierda">
<h4>Si preciona el boton "Ver Imagenes" google le mostrara el arte de tapa las diferentes ediciones de este libro e imagenes relacionadas con &eacute;l.</h4>
    

	<input name="codigo" type="hidden"  value= "'.$codigo_actual.'" />

	<p>
	<label for="titulo">Titulo:&nbsp;</label>
	<input name="titulo" type="text" size= 50 value= "'.$titulo_actual.'" />
	</p>


	<p>
	<label for="autor">Autor:&nbsp;</label>
	<input name="autor" type="text" size= 50 value= "'.$autor_actual.'"/>
	</p>
	
	<p>
	<label for="editorial">Editorial:&nbsp;</label>
	<input name="editorial" type="text" size= 50 value= "'.$editorial_actual.'"/>
	</p>
	
	<p>
	<label for="edicion">Edicion: (opcional)&nbsp;</label>
	<input name="edicion" type="text" size= 50 value= "'.$edicion_actual.'"/>
	</p>

		
	
	<p>
	<label for="coleccion">Colecci&oacute;n: (opcional)&nbsp;</label>
	<input name="coleccion" type="text" size= 50 value= "'.$coleccion_actual.'"/>
	</p>
	
	<p>
	<label for="tomo">Tomo: (opcional)&nbsp;</label>
	<input name="tomo" type="text" size= 50 value= "'.$tomo_actual.'"/>
	</p>
	
	<p>
	<label for="genero">Genero: (opcional)&nbsp;</label>
	<input name="genero" type="text" size= 50 value= "'.$genero_actual.'"/>
	</p>
	
	<p>
	<label for="lugar">Lugar:&nbsp;</label>
	<input name="lugar" type="text" size= 50 value= "'.$lugar_actual.'"/>
	</p>
	
	
	<p>
	<input type="submit" name="agregar" value="Modificar datos"/>
	';
	?>
	
	<input type="button" name="boton" value="Ver Imagenes"  onClick="abrirVentana('<?PHP print($titulo_actual." ". $autor_actual); ?>');">
	<?PHP
	echo'</p>
	
	</form>
	
	</div>';

?>

</body>
</html>
