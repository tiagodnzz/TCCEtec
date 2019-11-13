<!-- Aqi to chamando o cabecalho e o menu -->
<?php
  include_once("../controller/noticia.controller.php"); 
	include 'includes/cabecalho.php';
	include 'includes/menu.php';
?>

<!-- Terminando de chamar -->


<!--<body style=" background-color: #E9FEEC "> -->

<body>
<img src="img/banner.jpg" class="img-fluid" alt="Imagem responsiva">


<br>
<center><br><h2><font color=""> Destaques </font></h2></center>  

<!-- Carrossel -->
<div class="container">

    <div class="center-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

    <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="img/003/3.jpg" height="600" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Caieiras - SP</h5>
      <p>Vila Rosina</p>
      <a href="http://localhost/01/site/imovel.php?codimovel=23&acao=dados_not" class="btn btn-success btn-rounded">Mais Info</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/003/3.jpg" height="600" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Caieiras - SP</h5>
      <p>Jardim Europa</p>
      <a href="http://localhost/01/site/imovel.php?codimovel=23&acao=dados_not" class="btn btn-success btn-rounded">Mais Info</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/003/3.jpg" height="600" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Caieiras - SP</h5>
      <p>Laranjeiras</p>
      <a href="http://localhost/01/site/imovel.php?codimovel=23&acao=dados_not" class="btn btn-success btn-rounded">Mais Info</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
    
    </div>
</div>	
<!-- Fim do carrossel -->


<!-- Inicio dos imoveis -->
<div class="container" style="margin-top: 3%">
	<div class="row"></div>

	<div class="row">

    <div class="card-deck">

        <?php 

       $contador=0;

       foreach ($not->Consultar_Limit() as $linha): 


          if($contador<3){?>

          <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="../view/arquivos/<?php echo $linha->imagem;?>" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title"><?php echo $linha->titulo;?></h5>
                  <p class="card-text"><?php echo $linha->local;?></p>
                  <p class="card-text"><?php echo $linha->valor;?></p>
              </div>
              <div class="card-footer border-success">
                  <a href="imovel.php?codimovel=<?php echo $linha->codimovel;?>&acao=dados_not" class="btn btn-success btn-rounded" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>

        <?php 
        $contador++;


        }else{?>

               <?php if($contador==3){ ?>

                      </div>
                </div>
                <br><br><br>

                <div class="row">

                  <div class="card-deck">

              <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="../view/arquivos/<?php echo $linha->imagem;?>" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title"><?php echo $linha->titulo;?></h5>
                  <p class="card-text"><?php echo $linha->local;?></p>
                  <p class="card-text"><?php echo $linha->valor;?></p>
              </div>
              <div class="card-footer border-success">
                  <a href="imovel.php?codimovel=<?php echo $linha->codimovel;?>&acao=dados_not" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>
          

          <?php $contador1=1;}

          if ($contador1==1){
            $contador=$contador1;
          }else{
            $contador=0;

          }

          
         }

            endforeach;?> 
    </div>   
</div>

</body>
<!-- Fim dos imoveis -->

<!-- chamando rodape -->
<?php
  include'includes/rodape.php';
?>