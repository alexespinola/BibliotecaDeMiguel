<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>P&aacute;gina de inicio</title>

<link href="estilos_home.css" rel="stylesheet" type="text/css" />


<script src="jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.cabecera,div.listado,div.contador","big");
Nifty("div.tittabla","top");
}

$(window).scroll(function contador()
{
var cont;
cont=$(".contador");
var des=$(window).scrollTop();
cont.css("top","des");
});
</script>

</head>

<body>

<?php

include("conexion.php");
//$host ="localhost";
//$usuario ="root";
//$clave ="alex";
//$base ="biblioteca";

//include("funciones.php");


echo"<div class='tittabla'>";
echo"<table>
	<th width=420 align='left'> &nbsp;&nbsp;T&iacute;tulos</th>
	<th width=413 align='left'> &nbsp;Autores</th> 
	</table>";
echo"</div>";	


mysql_connect($host,$usuario,$clave);
mysql_select_db($base);

if (isset($_GET["orden"]))
{
$orden=$_GET['orden'];
}else{
$orden="titulo";
}
$verTodos = "SELECT id,titulo,autor FROM libros ORDER BY $orden "; 


$datos = mysql_query($verTodos);
		
		echo"<div class='listado'>";
		echo"<table cellspacin = 0>";
	
		$i=0;
		while($fila = mysql_fetch_array($datos))
		
		{	
			$titulo = $fila["titulo"];
			$autor = ($fila["autor"]);
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
		$i++;	
		}
		echo"<table>";	
		
		echo "</div>";
		
		echo"<div class='contador'>";
		echo"La biblioteca consta de $i tomos <br>
		<br> Ok Charli... Ya funciona bien el link de cada autor a wikipedia siempre y cuando tenga una coma entre el apellido y el nombre y este cuadro que contiene el contasdor y este texto no deberia superponerse a la tabla ya " ;
		
		echo"</div>";


?>
</body>
</html>