<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Enlaces</title>
<link href="Enlaces2.css" rel="stylesheet" type="text/css" />

<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.corner.js" type="text/javascript"></script>



<script type="text/javascript">
$(document).ready(iniEventos2);

function iniEventos2()
{
	$(".primero").corner("15px top");
	$(".segundo").corner("15px top");
	$(".tercero").corner("15px top");
	$(".tercero1").corner("8px right");
	$(".cuarto").corner("15px top");
	$(".quinto").corner("15px top");
		y=$(".tercero");
		y.mouseover(entrar2);
		y.mouseout(salir2);
}

function entrar2()
{
	sub=$(".tercero1");
	sub.css("display","block");
	sub.mouseover(function(){
		$(".tercero1").css("display","block");					   
		$(this).css("background-color","#f63");
						   })
	sub.mouseout(function(){
		$(".tercero1").css("display","none");	
		$(this).css("background-color","#f30");
						   })
	$(this).css("background-color","#f60");
	$(this).css("margin-bottom","auto");
}	
function salir2()
{
	sub=$(".tercero1");
	sub.css("display","none");
	sub.css("background-color","#f30");
	$(this).css("background-color","#f60");
}

</script>

</head>


<body background="cuadrobiblioteca.jpg">

<div class="primero">
<a href='listaTodos.php?orden=titulo' target="inferior"><b>T&iacute;tulos</b></a></div>

<div class="segundo">
<a href='listaTodos.php?orden=autor' target="inferior"><b>Autores</b></a></div>

<div class="cuarto">
<a href='form_cargar_titulo.php' target="inferior"><b>Agregar</b></a></div>

<div class="quinto">
<a href='imprimirPor.php' target="inferior"><b>Imprimir</b></a></div>

<div class="tercero">
<a href='enlaces2.php'><b>Busqueda</b></a></div>

<div class="tercero1">
<a href='form_busca_titulo.php' target="superior"><b>Titulo</b></a></div>

<div class="tercero1">
<a href='form_busca_autor.php' target="superior"><b>Autor</b></a></div>

<div class="tercero1">
<a href='#'><b>Género</b></a></div>




</body>
</html>
