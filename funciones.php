<?php
// datos de conexion
$host ="mysql.hostinger.com.ar";
$usuario ="u696487032_4200";
$clave ="4200771alex";
$base ="u696487032_bm";


function conectar($host,$usuario,$clave,$base)
{	
	if (!$conectado = @mysql_connect($host,$usuario,$clave))
		{
		return false;
		}
	elseif(!mysql_select_db($base))
		{
		return false;
		}
	else
		{
		return true;
		}
}

function consultar($consulta)
{	if (!$datos = mysql_query($consulta) or mysql_num_rows($datos)<1)
	{return false;} // si no hay registros para esa consulta
	else {return $datos;} // esto es un paquete de datos 
}

?>	

	
	