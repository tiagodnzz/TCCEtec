<?php
    include_once("../controller/noticia.controller.php"); 
    include 'includes/cabecalho.php';
    include 'includes/menu.php';
?>

<main class="container">
    <br>
    <div class="row">
        <div class="col-md-6 col-sm-12">

            
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
         <div class="carousel-item active">
          <img class="d-block w-100" src="../view/arquivos/<?php echo $not->imagem;?>" alt="First slide">
         </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../view/arquivos/<?php echo $not->imagem2;?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../view/arquivos/<?php echo $not->imagem3;?>" alt="Third slide">
        </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>

        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h5><?php echo $not->titulo;?></h5>
                    </center>
                </div>
                <div class="card-body">
                    <center>
                    <p>Codigo do Imóvel : <?php echo $not->codimovel;?></p>
                    <p><?php echo $not->local;?></p>
                    <p><?php echo $not->descricao;?></p>
                    <h5><font color="green"><?php echo $not->valor;?></font></h5>
                    </center>
                </div>
                <div class="card-footer" ><!-- Dai abri um form para preencher -->
                    <!--Botãoparaacionar modal -->
                    <center>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">
                        Tenho interesse
                    </button>
                    </center>
                    <!-- Modal -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $not->titulo;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <spanaria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="venda.php">

                    <label for="codimovel">Codigo do imóvel</label>
                    <input type="text" class="form-control" name="codimovel" id="codimovel" placeholder="<?php echo $not->codimovel;?>" readonly>

                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">

                    <label for="email">E-mail</label>
                    <input type="E-mail" class="form-control" name="email" id="email" placeholder="email">

                    <label for="tel">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Ex: 1140028922">

                    <label for="cel">Celular</label>
                    <input type="cel" class="form-control" name="celular" id="celular" placeholder="Ex: 11999999999">

                    <label for="msg">Comentario</label>
                    <textarea class="form-control" name="comentario" rows='5' placeholder="comentario"></textarea>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
               </form> 
            </div>
        </div>
    </div>



                    </div>   
                </div>

                <!-- enviando dados -->

                

            </form>
        </div>
    </div>
    <br>
    <div class="row">

        <iframe src="<?php echo $not->linkmap; ?>" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        
 



</main>
<?php
  include'includes/rodape.php';
?>