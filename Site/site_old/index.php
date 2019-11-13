

<?php
include_once("../controller/noticia.controller.php"); 
include_once("cabecalho.php");
include_once("menu.php");
?>

<div class="container"> <!-- /Formatação inicial da página -->
	
<div class="hero-unit" >
	<h1>Olá, Mundo!</h1>
	<p> Site de Notícias usando área Administrativa com POO <span style="color: red;">*</span> front-end</p>
	<p><a class="btn btn-primary btn-lg" href="#" role="button">Leia Mais >></a></p>
</div>
		 
	<div class="row">			

	<?php foreach ($not->Consultar() as $linha): ?>
	
		<div class="span4">
			<h2><?php echo $linha->titulo;?></h2>
			<img align="center"src="../view/arquivos/<?php echo $linha->imagem;?>" width="250" height="200">
				<?php $texto = $linha->texto; ?>
				<p><?php echo substr($texto, 0, 50)."...";?></p>
				
				<p><a class='btn' href="noticias.php?codnoticia=<?php echo $linha->codnoticia;?>&acao=dados_not">Veja mais >>></a></p>

		</div>

	<?php endforeach;?>	

	</div>


		

   <?php 
   include 'rodape.php';
   ?> 