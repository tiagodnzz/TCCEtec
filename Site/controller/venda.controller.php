<?php
		include_once("../model/venda.php");//incluindo a classe com os comandos

		$ven = new Venda(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				/*
				case "cadastrar_not":
					//passando as informações do formulário
					$not->nome = $_POST["nome"];
					$not->email = $_POST["email"];
					$not->telefone = $_POST["telefone"];
					$not->celular = $_POST["celular"];
					$not->mensagem = $_POST["mensagem"];

					$not->Cadastrar();//executando a função
					
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_noticia.php';</script>";
				break;

				case "atualizar_not":
					//passando as informações do formulário
					$not->nome = $_POST["nome"];
					$not->email = $_POST["email"];
					$not->telefone = $_POST["telefone"];
					$not->celular = $_POST["celular"];
					$not->mensagem = $_POST["mensagem"];
					

					$not->codimovel = $_POST["codcontato"];

					$not->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultanoticia.php';</script>";
				break;
				*/

				case "excluir_not":
					//passando as informações do formulário
					$ven->codvenda = $_GET["codvenda"];

					$ven->Excluir();//executando a função
					header("location: form_consultavenda.php ");//direcionando para o formulário
				break;

				case "dados_not":
					$ven = $ven->RetornarDados($_GET["codvenda"]);//executando a função para retornar dados
				break;
			}
		}

		?>