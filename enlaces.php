<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Enlaces</title>
<link href="Enlaces1.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery.js"></script>  
<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.primero,div.segundo,div.tercero,div.cuarto","tr,tl");
}
</script>
</head>


<body background="cuadrobiblioteca.jpg">

<div class="primero">
<a href='listaTodos.php?orden=titulo' target="inferior"><b>T&iacute;tulos</b></a></div>

<div class="segundo">
<a href='listaTodos.php?orden=autor' target="inferior"><b>Autores</b></a></div>

<div class="tercero">
<a href='enlaces2.php'><b>Busqueda</b></a></div>

<div class="cuarto">
<a href='form_cargar_titulo.php' target="inferior"><b>Agregar</b></a></div>




</body>
</html>
