<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "tcc";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Problemas com a conexao do Banco de Dados");
?>
