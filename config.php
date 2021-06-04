<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('BASE','officer');
	
	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()){
		printf("Conexão error: ",mysqli_connect_error());
		exit;
	}
?>