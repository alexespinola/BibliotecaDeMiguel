<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Agregar</title>
<link href="estilos_home.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.contenedor_izquierda,div.contenedor_derecha","big");
 document.getElementById('titulo').focus();
}
</script>

</head>

<body> 

<form action="agregar.php" target="inferior" method="post">

<div class="contenedor_izquierda">


	<p>
	<label for="titulo">Titulo:&nbsp;</label>
	<input name="titulo" id="titulo" type="text" size= 50 />
	</p>
	
	<p>
	<label for="autor">Autor:&nbsp;</label>
	<input name="autor" type="text" size= 50 />
	</p>
	
	<p>
	<label for="editorial">Editorial:&nbsp;</label>
	<input name="editorial" type="text"/>
	</p>
	
	<p>
	<label for="edicion">Edicion: (opcional)&nbsp;</label>
	<input name="edicion" type="text"/>
	</p>
	
	
	<p>
	<label for="coleccion">Colecci&oacute;n: (opcional)&nbsp;</label>
	<input name="coleccion" type="text"/>
	</p>
	
	<p>
	<label for="tomo">Tomo: (opcional)&nbsp;</label>
	<input name="tomo" type="text"/>
	</p>
	
	<p>
	<label for="genero">G&eacute;nero: (opcional)&nbsp;</label>
	<input name="genero" type="text"/>
	</p>
	
	<p>
	<label for="lugar">Lugar:&nbsp;</label>
	<input name="lugar" type="text"/>
	</p>
	
	<p>
	<input type="submit" name="agregar" value="Agregar a  biblioteca"/>
	</p>
	
	
	</div>
	

</form>	
</body>
</html>
