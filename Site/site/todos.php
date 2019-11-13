<?php
  include_once("../controller/noticia.controller.php");
	include 'includes/cabecalho.php';
	include 'includes/menu.php';
?>


<body>
<div class="container" style="margin-top: 3%">
    <div class="row">

      <center><h3>Todos Imóveis</h3></center>

    <div class="card-deck">

      <!-- apartir daqui só tristeza -->

       <?php 

       $contador=0;

       foreach ($not->Consultar() as $linha): 


          if($contador<3){?>

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



<!-- chamando rodape -->
<?php
  include'includes/rodape.php';
?>