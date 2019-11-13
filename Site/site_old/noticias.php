<?php
 include 'cabecalho.php';
 include 'menu.php';
 include_once("../controller/noticia.controller.php"); 
?>


<div class="container" style="margin-top:5%;"> <!-- /Formatação inicial da página -->	 
	 <div class="mx-auto" style="width: 100%; height: 300px; background-color: #F2F2F2; padding: 10px;">


			<div>
				<h1><?php echo $not->titulo;?></h1>

				<p><img style="padding-right: 10px;" src="../view/arquivos/<?php echo $not->imagem;?>" width="250" height="150" align="left"> </p><?php echo $not->texto;?>
			</div>

		<p><a class="btn btn-primary btn-lg" href="index.php" role="button"> <<  Voltar </a></p>

	</div>
	<br><br><br><br><br><br><br><br><br>
</div>
 <?php 
   include 'rodape.php';
 ?> 