<?php
	class Cadimovel
	{
		public $codava;
		public $nome;
   		public $email;
   		public $telefone;
   		public $celular;
   		public $endereço;
   		public $bairro;
   		public $cidade;
   		public $cep;
   		public $valor;
	   		

		public $con;

		function __CONSTRUCT()//executa o comando automáticamente
		{
			include_once("conexao.php"); //incluir a conexão
			$conexao = new Conexao(); //instancia da conexão
			$this->con = $conexao->Conectar();//executando método para conectar
	    }

	    /*
		function Cadastrar()
		{
			//passando o comando sql
			$sql = "insert into contato (nome,email,telefone,celular,mensagem)
			values (?,?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,
			$this->email,
			$this->telefone,
			$this->celular,
			$this->mensagem));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update contato set
					nome = ?,email = ?,telefone = ?,celular = ?,mensagem = ?
					where codcontato = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,
			$this->email,
			$this->telefone,
			$this->celular,
			$this->mensagem));
		}
		*/

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from cadimovel	
				where codava = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codava));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from cadimovel");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$cad = new Cadimovel();

				$cad->codava 		= $linha->codava;
				$cad->nome 	= $linha->nome;
				$cad->email 	= $linha->email;
	   			$cad->telefone 	= $linha->telefone;
	   			$cad->celular 	= $linha->celular;
	   			$cad->endereco 	= $linha->endereco;
	   			$cad->bairro 	= $linha->bairro;
	   			$cad->cidade 	= $linha->cidade;
	   			$cad->cep 	= $linha->cep;
	   			$cad->valor	= $linha->valor;
				
				$dados[] = $cad;
			}
			return $dados;

		}


		public function RetornarDados($cadimovel)
		{
			$sql = $this->con->prepare("select * from cadimovel where codava = ?");
			          

			$sql->execute(array($codava));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$cad = new Cadimovel();

				$cad->codava 		= $linha->codava;
				$cad->nome 	= $linha->nome;
				$cad->email 	= $linha->email;
	   			$cad->telefone 	= $linha->telefone;
	   			$cad->celular 	= $linha->celular;
	   			$cad->endereco 	= $linha->endereco;
	   			$cad->bairro 	= $linha->bairro;
	   			$cad->cidade 	= $linha->cidade;
	   			$cad->cep 	= $linha->cep;
	   			$cad->valor	= $linha->valor;

	   			

			return $cad;//objeto preenchido a ser retornado
		}

	}

	?>