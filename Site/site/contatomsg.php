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
                    <center><h5>enviando mensagem</h5></center>
                </div>
                 <div class="card-body">
                    <?php

					include_once('conexao.php');
					// recuperando 
					$nome = $_POST['nome'];	
					$email = $_POST['email'];	
					$telefone = $_POST['telefone'];
					$celular = $_POST['celular'];
					$mensagem = $_POST['mensagem'];
		

	//$hash = password_hash($senha, PASSWORD_DEFAULT);

	// criando a linha de INSERT
	$sqlinsert =  "insert into contato ( nome, email, telefone, celular, mensagem) values ( '$nome', '$email', '$telefone', '$celular', '$mensagem')";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		die('Query Inválida: ' . @mysqli_error($conexao));  
	} else {
		echo "Sua mensagem foi enviada com sucesso";
	} 
	mysqli_close($conexao);
?>
                    </div>
                    <div class="card-footer" >
                        <button class="btn btn-block btn-success" onclick="window.location='index.php';" type="button">Voltar
                        </button>
                    </div>
                        
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
</main>


<?php
  include'includes/rodape.php';
?>