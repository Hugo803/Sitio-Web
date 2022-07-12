<?php
//Cargamos la libreria
require("fpdf/fpdf.php");
//Cargamos la conexion
require("../db/dbconeg.php");
//Creamos la instancia de la libreria
$pdf=new FPDF("P","mm","LETTER");
//Agregamos la primera pagina y definimos la fuente a usar
$pdf->AddPage("P");
$pdf->SetFont("Arial","B",14);
//Defino los encabezados: imagen, titulo y fecha
//$pdf->image("logo.gif",10,10,0);
$pdf->cell(40);
$pdf->cell(120,10,"Reporte de Productos",0,0,"C");
$pdf->cell(40,10,date("Y-m-d"),0,0,"R");
//Imprimir los encabezados de la tabla
$pdf->ln(20); //Hacemos salto de linea
$pdf->cell(20,8,"Codigo",0,0,"C");
$pdf->cell(55,8,"Producto",0,0,"C");
$pdf->cell(50,8,"Cantidad",0,0,"C");
$pdf->cell(50,8,"Monto",0,0,"C");
$pdf->ln(10); //Hacemos salto de linea
//Mostrar los datos de la tabla
$sql="SELECT * FROM detallecompra ORDER BY id";
$consulta=mysqli_query($con,$sql);
$total=mysqli_num_rows($consulta); //Contar los registros de la consulta
//Recorremos los registros para imprimirlos
$pdf->SetFont("Arial","",10);
while($fila=mysqli_fetch_array($consulta))
{
$pdf->cell(20,10,$fila['id'],0,0,"C");
$pdf->cell(55,10,$fila['producto'],0,0,"C");
$pdf->cell(50,10,$fila['cantidad'],0,0,"C");
$pdf->cell(50,10,$fila['precio'],0,0,"C");
$pdf->ln(10);
$pdf->ln(10); //Hacemos salto de linea
}
//Imprimir el total
$pdf->line(150,$pdf->gety(),210,$pdf->gety());
$pdf->cell(140);
$pdf->cell(60,10,'Total de Productos: '.$total,0,0,"C");
//Imprimir el pie de pagina
$pdf->line(10,235,210,235);
$pdf->sety(240); //Definimos la posicion Vertical
$pdf->cell(200,10,"Confiteria Americana",0,0,"C");
//Generamos el documento
$pdf->Output();
?>