<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>busqueda</title>
<link href="estilos_home.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.tit","big");
document.getElementById('autor').focus();
}
</script>
</head> 

<body background="cuadrobiblioteca.jpg">

<script type="text/javascript">
  function activarPrimerControl()
  {
    document.getElementById('autor').focus();
   }
</script>   	
	
<form action="listaEncontrados.php" target="inferior" method="post">

<div class="tit">
   	<h1>Biblioteca Digital</h1>

	<p>
	<input name="autor" id="autor" size= 50 type="text"/>
	<input type="submit" name="buscar" value="Buscar Autor"/>
	</p>
</div>	
	

</form>	
</body>
</html>
