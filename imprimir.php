<?php

include("conexion.php");
require('fpdf.php');

	if(isset($_POST['miselect'])) {
		$seleccion= $_POST['miselect'];
		$cons="SELECT titulo,autor,lugar FROM libros ORDER BY $seleccion";	
	}else{
		$buscado=($_GET["titulo"]);
		$cons="SELECT titulo,autor,lugar FROM libros WHERE titulo LIKE '%$buscado%'";
	}
		
//echo"$cons";

class PDF extends FPDF
{
}
$pdf = new FPDF(); //crea la pagina
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
//TITULO

$pdf->Cell(0,12,'Este listado podes descargarlo y guardarlo en formato PDF o imprimirlo directamente',1,1,'C');
$pdf->Ln();
//CABECERA DE LA TABLA
$pdf->SetFont('Arial','B',12);
   $pdf->Cell(90, 8, 'Titulo',0,0);
	$pdf->Cell(90, 8, 'Autor',0,0);
	$pdf->Cell(10, 8, 'Lugar',0,1);
//MUESTRA UNA CONSULTA
mysql_connect($host,$usuario,$clave);
mysql_select_db($base);
$pdf->SetFont('Arial','',10);
$datos = mysql_query($cons);
while($fila = mysql_fetch_array($datos))
{
	$pdf->Cell(90, 8, utf8_decode($fila['titulo']),0,0);
	$pdf->Cell(90, 8, utf8_decode($fila['autor']),0,0);
	$pdf->Cell(10, 8, $fila['lugar'],0,1);
}
$pdf->Output();
?>