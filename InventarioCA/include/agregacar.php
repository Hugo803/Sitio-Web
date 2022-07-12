<?php 
session_start();

extract($_REQUEST);

require_once '../db/dbconeg.php';

if(!isset($cantidad)){
	$cantidad=1;
}

$consulta = "select * from producto where IdProducto='".$id."'";
$qry=mysqli_query($con, $consulta); 

$row=mysqli_fetch_array($qry);

$producto = $row['Nombreproducto'];
$precio = $row['Precio'];

if(isset($_SESSION['carro']))

$carro=$_SESSION['carro'];

$carro[md5($id)] = array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=> $producto,'precio'=> $precio,'id'=>$id);

$_SESSION['carro']=$carro;

header("Location:catalogo?".SID);

?>