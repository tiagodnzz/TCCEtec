<?php
class Conexao
{

	function Conectar()
	{
		$endereco_servidor = "localhost";
		$usuario_servidor  = "root";
		$senha_servidor = "";
		$porta_mysql = "3306";
		$nome_BD = "tcc";

		//PDO - PHP Data Objects é uma classe para trabalhar com procedimentos relacionados a banco de dados
		$con = new PDO("mysql:host=$endereco_servidor;dbname=$nome_BD;port=$porta_mysql;","$usuario_servidor","$senha_servidor");
		return $con;
	}
}
?>