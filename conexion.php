<?php 
	
	$host = 'laravel.cziqrxsyma2n.us-east-1.rds.amazonaws.com';
	$user = 'admin';
	$password = 'mEx0wkBNExgjpPp67oks';
	$db = 'facturacion';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

?>