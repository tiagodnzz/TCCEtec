<?php
		include_once("../model/usuario.php");//incluindo a classe com os comandos

		$usu = new Usuario(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_usu":
					//passando as informações do formulário
					$usu->nome = $_POST["nome"];
					$usu->email = $_POST["email"];
					$usu->nomeusuario = $_POST["nomeusuario"];
					$usu->senha = sha1($_POST["senha"]);
					$usu->tipo = $_POST["tipo"];



					$usu->Cadastrar();//executando a função

					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_usuario.php';</script>";
				break;

				case "atualizar_usu":
					//passando as informações do formulário
					$usu->nome = $_POST["nome"];
					$usu->email = $_POST["email"];
					$usu->nomeusuario = $_POST["nomeusuario"];
					$usu->senha = sha1($_POST["senha"]);
					$usu->tipo = $_POST["tipo"];
					

					$usu->codusuario = $_POST["codusuario"];

					$usu->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultausuario.php';</script>";
				break;

				case "excluir_usu":
					//passando as informações do formulário
					$usu->codusuario = $_GET["codusuario"];

					$usu->Excluir();//executando a função
					header("location: form_consultausuario.php ");//direcionando para o formulário
				break;

				case "dados_usu":
					$usu = $usu->RetornarDados($_GET["codusuario"]);//executando a função para retornar dados
				break;
				
				case "logar_usu":
					$usu = $usu->Logar($_POST['nomeusuario'],sha1($_POST['senha']));
					if($usu->codusuario != "")
					{
						session_start();//criando a sessão
						$_SESSION['nomeusuario'] = $usu->nomeusuario;
						$_SESSION['codusuario'] = $usu->codusuario;
						$_SESSION['tipo'] = $usu->tipo;

						//direcionando para principal
						header("location:index.php");
					}
					else
					{
						echo "<script>alert('NÃO FOI POSSÍVEL ACESSAR O SISTEMA');window.location='login.php';</script>";
					}
				break;

				case "sair":
						session_start();//iniciar sessão
						session_destroy();//excluir sessão
						header("location:../view/login.php");
				break;
				}
			}

			?>