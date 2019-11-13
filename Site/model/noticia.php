<?php
	class Noticia
	{
		public $codimovel;
		public $titulo;
   		public $local;
   		public $descricao;
   		public $valor;
   		public $imagem;
   		public $imagem2;
   		public $imagem3;
   		public $linkmap;
	   		

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
			$sql = "insert into imoveis (titulo,local,descricao,valor,imagem,imagem2,imagem3,linkmap) values (?,?,?,?,?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->titulo,
			$this->local,
			$this->descricao,
			$this->valor,
			$this->imagem,
			$this->imagem2,
			$this->imagem3,
			$this->linkmap));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update imoveis set
					titulo = ?,local = ?,descricao = ?,valor = ?,imagem = ?,imagem2 = ?,imagem3 = ?,linkmap = ?
					where codimovel = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->titulo,
			$this->local,
			$this->descricao,
			$this->valor,
			$this->imagem,
			$this->imagem2,
			$this->imagem3,
			$this->linkmap,
			$this->codimovel));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from imoveis	
					where codimovel = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codimovel));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from imoveis");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$not = new Noticia();
				$not->codimovel 		= $linha->codimovel;
				$not->titulo 	= $linha->titulo;
	   			$not->local 	= $linha->local;
	   			$not->descricao 	= $linha->descricao;
	   			$not->valor 	= $linha->valor;
	   			$not->imagem 	= $linha->imagem;
	   			$not->imagem2 	= $linha->imagem2;
	   			$not->imagem3 	= $linha->imagem3;
	   			$not->linkmap 	= $linha->linkmap;
	   			
				
				$dados[] = $not;
			}
			return $dados;

		}

		function Consultar_Limit()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from imoveis limit 6");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$not = new Noticia();
				$not->codimovel 		= $linha->codimovel;
				$not->titulo 	= $linha->titulo;
	   			$not->local 	= $linha->local;
	   			$not->descricao 	= $linha->descricao;
	   			$not->valor 	= $linha->valor;
	   			$not->imagem 	= $linha->imagem;
	   			$not->imagem2 	= $linha->imagem2;
	   			$not->imagem3 	= $linha->imagem3;
	   			$not->linkmap 	= $linha->linkmap;
	   			
				
				$dados[] = $not;
			}
			return $dados;

		}



		public function RetornarDados($codimovel)
		{
			$sql = $this->con->prepare("select * from imoveis where codimovel = ?");
			          

			$sql->execute(array($codimovel));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$not = new Noticia();
			$not->codimovel 		= $linha->codimovel;
			$not->titulo 	= $linha->titulo;
	   		$not->local 	= $linha->local;
	  		$not->descricao 	= $linha->descricao;
	  		$not->valor 	= $linha->valor;
	  		$not->imagem 	= $linha->imagem;
	  		$not->imagem2 	= $linha->imagem2;
	  		$not->imagem3 	= $linha->imagem3;
	   		$not->linkmap 	= $linha->linkmap;

	   			

			return $not;//objeto preenchido a ser retornado
		}

	}

	?>