<?php
	class Venda
	{
		public $codvenda;
		public $codimovel;
		public $nome;
   		public $telefone;
   		public $celular;
   		public $email;
   		public $comentario;
	   		

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
			$sql = "delete from venda	
					where codvenda = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codvenda));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from venda");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$ven = new Venda();
				$ven->codvenda 		= $linha->codvenda;
				$ven->codimovel 		= $linha->codimovel;
				$ven->nome 	= $linha->nome;
	   			$ven->telefone 	= $linha->telefone;
	   			$ven->celular 	= $linha->celular;
	   			$ven->email 	= $linha->email;
	   			$ven->comentario 	= $linha->comentario;
	   			
				
				$dados[] = $ven;
			}
			return $dados;

		}


		public function RetornarDados($codvenda)
		{
			$sql = $this->con->prepare("select * from venda where codvenda = ?");
			          

			$sql->execute(array($codcontato));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$ven = new Venda();
				$ven->codvenda 		= $linha->codvenda;
				$ven->codimovel 		= $linha->codimovel;
				$ven->nome 	= $linha->nome;
	   			$ven->telefone 	= $linha->telefone;
	   			$ven->celular 	= $linha->celular;
	   			$ven->email 	= $linha->email;
	   			$ven->comentario 	= $linha->comentario;

	   			

			return $ven;//objeto preenchido a ser retornado
		}

	}

	?>