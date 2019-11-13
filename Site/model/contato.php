<?php
	class Contato
	{
		public $codcontato;
		public $nome;
   		public $email;
   		public $telefone;
   		public $celular;
   		public $mensagem;
	   		

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
			$sql = "delete from contato	
					where codcontato = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codcontato));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from contato");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$cont = new Contato();
				$cont->codcontato 		= $linha->codcontato;
				$cont->nome 	= $linha->nome;
	   			$cont->email 	= $linha->email;
	   			$cont->telefone 	= $linha->telefone;
	   			$cont->celular 	= $linha->celular;
	   			$cont->mensagem 	= $linha->mensagem;
	   			
				
				$dados[] = $cont;
			}
			return $dados;

		}


		public function RetornarDados($codcontato)
		{
			$sql = $this->con->prepare("select * from contato where codcontato = ?");
			          

			$sql->execute(array($codcontato));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$cont = new Contato();
				$cont->codcontato 		= $linha->codcontato;
				$cont->nome 	= $linha->nome;
	   			$cont->email 	= $linha->email;
	   			$cont->telefone 	= $linha->telefone;
	   			$cont->celular 	= $linha->celular;
	   			$cont->mensagem 	= $linha->mensagem;

	   			

			return $not;//objeto preenchido a ser retornado
		}

	}

	?>