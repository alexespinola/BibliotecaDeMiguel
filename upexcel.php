<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         
        

    <form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
    <input type="file" name="file"/>
    <input type="submit" name="enviar"  value="Importar" />
    <input type="hidden" value="upload" name="action" />
    </form>
       
<?php

extract($_POST);

if ($action == 'upload'){
//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_
    if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"]."<br>";
}
}
$archivo = $_FILES['file']['name'];
$tipo = $_FILES['file']['type'];
$destino = 'bak_'.$archivo;
if (copy($_FILES['file']['tmp_name'],$destino))
    {echo "Archivo Cargado Con Éxito";
    }else{
    echo 'Error Al Cargar el Archivo';}
    
    
    
if (file_exists('bak_'.$archivo)){

/** Clases necesarias */
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/Reader/Excel2007.php';

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load('bak_'.$archivo);
$objFecha = new PHPExcel_Shared_Date();

// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);

//conectamos con la base de datos
//$cn = mysql_connect ('localhost','root','') or die ('ERROR EN LA CONEXION');
//$db = mysql_select_db ('ventas',$cn) or die ('ERROR AL CONECTAR A LA BD');

// Llenamos el arreglo con los datos  del archivo xlsx
for ($i=1;$i<=30;$i++){
$_DATOS_EXCEL[$i]['id_ramal'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['origen'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['destino']= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['precio']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
}
echo '<br><br>';
//print_r($_DATOS_EXCEL);
}
//si por algo no cargo el archivo bak_
else{echo 'Necesitas primero importar el archivo';}
$errores=0;

//recorremos el arreglo multidimensional
//para ir recuperando los datos obtenidos
//del excel e ir insertandolos en la BD
foreach($_DATOS_EXCEL as $i => $registro){
//    $sql = "INSERT INTO tarifas VALUES (";

    foreach ($registro as $campo => $valor){
//    $campo == "precio" ? $sql.= $valor."');" : $sql.= $valor."','";
        echo $campo.'--->';
        echo $valor.'<br>';
        
    }
}
//$result = mysql_query($sql);
//if (!$result){ echo 'Error al insertar registro'.$campo;$errores+=1;}

//echo '<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>';
//
////una vez terminado el proceso borramos el
////archivo que esta en el servidor el bak_
//unlink($destino);
//}
?>
    </body>
</html>
