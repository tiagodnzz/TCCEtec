<?php
  include_once("../controller/noticia.controller.php");
	include 'includes/cabecalho.php';
	include 'includes/menu.php';
?>


<body>
<div class="container" style="margin-top: 3%">
    <div class="row">

    <div class="card-deck">

      <!-- apartir daqui só tristeza -->

       <?php foreach ($not->Consultar_Limit() as $linha):?>



          <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="../view/arquivos/<?php echo $linha->imagem;?>" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title"><?php echo $linha->titulo;?></h5>
                  <p class="card-text"><?php echo $linha->local;?></p>
                  <p class="card-text"><?php echo $linha->valor;?></p>
              </div>
              <div class="card-footer border-success">
                  <a href="exemplo.php" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>
        <?php endforeach;?> 


      </div>
</div>



<!-- chamando rodape -->
<?php
  include'includes/rodape.php';
?>