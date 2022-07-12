<?php
    $bd_host = "localhost:86";
    $bd_usuario = "root";    // el alias de la cuenta creada de la base de datos
    $bd_password = "";          // la contrasena de la cuenta
    $bd_base = "bd_practica";   // el nombre de la base de datos
 
	$con = mysql_connect($bd_host, $bd_usuario,$bd_password); 
	 mysql_select_db($bd_base, $con);
	 mysql_set_charset('utf8'); 

      if($con==TRUE){
       //echo "coneccion existosa";
      }

?>