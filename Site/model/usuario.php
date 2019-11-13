<?php
	class Usuario
	{
		public $codusuario;
		public $nome;
   		public $email;
   		public $nomeusuario;
   		public $senha;
   		public $tipo;
	   		

		public $con;

		function __CONSTRUCT()//executa o comando automáticamente
		{
			include_once("conexao.php"); //incluir a conexão
			$conexao = new Conexao(); //instancia da conexão
			$this->con = $conexao->Conectar();//executando método para conectar
	    }

		function Cadastrar()
		{
			//passando o comando sql
			$sql = "insert into usuario
					(nome,email,nomeusuario,senha,tipo) 
					values 
					(?,?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,
			$this->email,
			$this->nomeusuario,
			$this->senha,
			$this->tipo));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update usuario set
					nome = ?,email = ?,nomeusuario = ?,senha = ?,tipo = ?
					where codusuario = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,$this->email,$this->nomeusuario,$this->senha,$this->tipo,
			$this->codusuario));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from usuario	
					where codusuario = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codusuario));
		}

		function Consultar($codusuario, $tipo)
		{
			$dados = array();
			if($tipo == "Administrador")
			{
				$sql = $this->con->prepare("select * from usuario");
			}
			else
			{
				$sql = $this->con->prepare("select * from usuario where codusuario = ?");
			}
			$sql->execute(array($codusuario));

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$usu = new Usuario();
				$usu->codusuario 		= $linha->codusuario;
				$usu->nome 	= $linha->nome;
	   			$usu->email 	= $linha->email;
	   			$usu->nomeusuario 	= $linha->nomeusuario;
	   			$usu->senha 	= $linha->senha;
	   			$usu->tipo 	= $linha->tipo;
	   			
				
				$dados[] = $usu;
			}
			return $dados;

		}

		public function RetornarDados($codusuario)
		{
			$sql = $this->con->prepare("select * from usuario where codusuario = ?");
			          

			$sql->execute(array($codusuario));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$usu = new Usuario();
			$usu->codusuario 		= $linha->codusuario;
			$usu->nome 	= $linha->nome;
   			$usu->email 	= $linha->email;
   			$usu->nomeusuario 	= $linha->nomeusuario;
   			$usu->senha 	= $linha->senha;
   			$usu->tipo 	= $linha->tipo;
   			

			return $usu;//objeto preenchido a ser retornado
		}

		public function Logar($nomeusuario, $senha)
		{
			$sql = $this->con->prepare("select * from usuario where nomeusuario = ? and senha = ?");
			          

			$sql->execute(array($nomeusuario, $senha));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$usu = new Usuario();

			if(isset($linha->codusuario))
			{
				$usu->codusuario 		= $linha->codusuario;
				$usu->nome 	= $linha->nome;
	   			$usu->email 	= $linha->email;
	   			$usu->nomeusuario 	= $linha->nomeusuario;
	   			$usu->senha 	= $linha->senha;
	   			$usu->tipo 	= $linha->tipo;
   			}
	   			

			return $usu;//objeto preenchido a ser retornado
		}

	}

	?>