<!-- Aqi to chamando o cabecalho e o menu -->
<?php
	include 'includes/cabecalho.php';
	include 'includes/menu.php';
?>

<!-- Terminando de chamar -->

<body>
<img src="img/banner.jpg" height="450px" width="1583px">
<br>
<center><br><h2> Destaques </h2></center><hr>

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
      <img class="d-block w-100" src="img/001/001.jpg" height="600" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Casa boa</h5>
      <p>Laranjeiras</p>
      <a href="#!" class="btn btn-success btn-rounded">Mais Info</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/002/002.jpg" height="600" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>...</h5>
      <p>...</p>
      <a href="#!" class="btn btn-success btn-rounded">Mais Info</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/003/003.jpg" height="600" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>...</h5>
      <p>...</p>
      <a href="#!" class="btn btn-success btn-rounded">Mais Info</a>
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

          <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="img/001/001.jpg" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title">Portal das Alamedas </h5>
                  <p class="card-text">Franco da Rocha - SP </p>
              </div>
              <div class="card-footer border-success">
                  <a href="exemplo.php" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>

          <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="img/002/002.jpg" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title">Vila Rosina</h5>
                  <p class="card-text">Caieiras - SP</p>
              </div>
              <div class="card-footer border-success">
                  <a href="#!" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>


          <div class="card border-success text-center">
              <a href=""><img class="card-img-top" src="img/003/003.jpg" alt="Imagem de capa do card"></a>
              <div class="card-body">
                  <h5 class="card-title">Jardim Europa </h5>
                  <p class="card-text">Caieiras - SP </p>
              </div>
              <div class="card-footer border-success">
                  <a href="#!" class="btn btn-success btn-rounded">Mais Info</a>
              </div>
          </div>
          
    </div> 

    </div>
    <br>
    
</div>

<!-- Fim dos imoveis -->

<!-- chamando rodape -->
<?php
  include'includes/rodape.php';
?>