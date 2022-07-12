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
$pdf->cell(90,8,"Nombre",0,0,"C");
$pdf->cell(70,8,"Precio de Venta",0,0,"C");
$pdf->ln(10); //Hacemos salto de linea
//Mostrar los datos de la tabla
$sql="SELECT * FROM producto ORDER BY IdProducto";
$consulta=mysqli_query($con,$sql);
$total=mysqli_num_rows($consulta); //Contar los registros de la consulta
//Recorremos los registros para imprimirlos
$pdf->SetFont("Arial","",10);
while($fila=mysqli_fetch_array($consulta))
{
$pdf->cell(20,15,$fila['IdProducto'],0,0,"C");
$pdf->cell(90,15,$fila['Nombreproducto'],0,0,"C");
$pdf->cell(70,15,$fila['Precio'],0,0,"C");
$pdf->ln(10); //Hacemos salto de linea
}
//Imprimir el total
$pdf->line(1,$pdf->gety(),50,$pdf->gety());

$pdf->cell(30,10,'Total de Productos: '.$total,0,0,"C");
//Imprimir el pie de pagina
$pdf->line(10,200,210,200);
$pdf->sety(200); //Definimos la posicion Vertical
$pdf->cell(200,10,"Developers Tech",0,0,"C");
//Generamos el documento
$pdf->Output();
?>