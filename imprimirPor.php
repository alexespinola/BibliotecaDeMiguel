<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>P&aacute;gina de inicio</title>

<link href="estilos_home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.tit","big");
document.getElementById('titulo').focus();
}
</script>
</head>

<body>


<div class="tit">
<form action="imprimir.php" method="post">

<p>
<label for="miselect">Imprimir Todos los libros de la biblioteca ordenados por: </label>
<select name="miselect">
<option>titulo</option>
<option> autor</option>
<option> lugar</option>
</select>
<input type="submit"<input name="Imprimir" value="Genera PDF"/>
</p>

</form>
</div> 

</body>
</html>