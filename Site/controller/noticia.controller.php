<?php
		include_once("../model/noticia.php");//incluindo a classe com os comandos

		$not = new Noticia(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_not":
					//passando as informações do formulário
					$not->titulo = $_POST["titulo"];
					$not->local = $_POST["local"];
					$not->descricao = $_POST["descricao"];
					$not->valor = $_POST["valor"];
					$not->linkmap = $_POST["linkmap"];

					//img1

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem = $nome_arquivo;//para gravar no BD

					//img2

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem2']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem2']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem2 = $nome_arquivo;//para gravar no BD

					//img3

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem3']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem3']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem3 = $nome_arquivo;//para gravar no BD



					$not->Cadastrar();//executando a função
					
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_noticia.php';</script>";
				break;

				case "atualizar_not":
					//passando as informações do formulário
					$not->titulo = $_POST["titulo"];
					$not->local = $_POST["local"];
					$not->descricao = $_POST["descricao"];
					$not->valor = $_POST["valor"];
					$not->linkmap = $_POST["linkmap"];

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem = $nome_arquivo;//para gravar no BD

					//img2

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem2']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem2']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem2 = $nome_arquivo;//para gravar no BD

					//img3

					//upload do arquivo/imagem
					$nome_arquivo = $_FILES['imagem3']['name'];
					$destino = 'arquivos/'.$nome_arquivo;
					$nome_tmp = $_FILES['imagem3']['tmp_name'];

					move_uploaded_file($nome_tmp, $destino);

					$not->imagem3 = $nome_arquivo;//para gravar no BD

					

					$not->codimovel = $_POST["codimovel"];

					$not->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultanoticia.php';</script>";
				break;

				case "excluir_not":
					//passando as informações do formulário
					$not->codimovel = $_GET["codimovel"];

					$not->Excluir();//executando a função
					header("location: form_consultanoticia.php ");//direcionando para o formulário
				break;

				case "dados_not":
					$not = $not->RetornarDados($_GET["codimovel"]);//executando a função para retornar dados
				break;
			}
		}

		?>