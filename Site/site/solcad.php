<?php
  include 'includes/cabecalho.php';
  include 'includes/menu.php';
?>

<body>


<main class="container">
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <center><h5>Cadastrando</h5></center>
                </div>
                 <div class="card-body">
                    <?php

					include_once('admin/conexao.php');
					// recuperando 
					$nome = $_POST['nome'];	
					$email = $_POST['email'];	
					$endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $celular = $_POST['celular'];
                    $bairro = $_POST['bairro'];
					$cidade = $_POST['cidade'];		
					$cep = $_POST['cep'];
                    $valor = $_POST['valor'];
		

	//$hash = password_hash($senha, PASSWORD_DEFAULT);

	// criando a linha de INSERT
	$sqlinsert =  "insert into cadimovel ( nome, email, endereco, telefone, celular, bairro, cidade, cep, valor) values ( '$nome', '$email', '$endereco', '$telefone', '$celular', '$bairro', '$cidade', '$cep', '$valor')";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		die('Query Inválida: ' . @mysqli_error($conexao));  
	} else {
		echo "Seu imovel sera analisado por nosso especialista se ouver interesse entraremos em contato.";
	} 
	mysqli_close($conexao);
?>
                    </div>
                    <div class="card-footer" >
                        <button class="btn btn-block btn-success" onclick="window.location='index.php';" type="button">Voltar
                        </button>
                    </div>
                        
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br>
</main>


<?php
  include'includes/rodape.php';
?>