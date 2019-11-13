<?php
    include 'includes/cabecalho.php';
    include 'includes/menu.php';
?>

<main class="container"><br>
        <center>
            <h4>Informacões para contato</h4>
        </center>
    <br>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            slides ou carrosel das casas.
        </div>

        <div class="col-md-5 col-sm-12">
            <!-- Possivel lugar onde o mapa vai -->

            <div class="card">
                <div class="card-body">
                    <!-- Outro possivel lugar onde o mapa vai -->
                    <center>
                    <h5><img src="img/operadoras/tel.png" width="20" height="20">&nbsp;&nbsp;&nbsp;Telefones</h5><br>
                    <tr>
                    <td><img src="img/operadoras/oi.png" width="20" height="17"></td><td>&nbsp;&nbsp;(11) 98083-3950</td><br>
                    </tr><tr>
                    <td><img src="img/operadoras/vivo.png" width="18" height="18"></td><td>&nbsp;&nbsp;(11) 99675-7211</td><br>
                    </tr><tr>
                    <td><img src="img/operadoras/claro.png" width="50" height="30"></td><td>(11) 97686-3256</td><br>
                    </tr><tr>
                    <td><img src="img/operadoras/tim.png" width="30" height="13"></td><td>&nbsp;&nbsp;(11) 94848-3948</td><br>
                    </tr><tr>
                    <td><img src="img/operadoras/fixo.png" width="18" height="15"></td><td>&nbsp;&nbsp;(11) 4441-1820</td><br>
                    </tr>
                    <br>
                    <h5>e-mails:</h5><br>
                     
                    atendimento@saomarcosimoveis.com.br<br>
                    marcoscorretor10@gmail.com<br><br>

                    <h5>Horario de Atendimento:</h5>

                    segunda à sexta-feira<br>
                    das 9h às 18h
                    </center>
                </div>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2177.4348359995224!2d-46.71632533425695!3d-23.388423612658983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefb2c6ad15619%3A0xd999a38f53a6089f!2sR.+Pintassilgo%2C+670+-+Jardim+Helena%2C+Caieiras+-+SP%2C+07700-000!5e0!3m2!1spt-BR!2sbr!4v1560301913630!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-md-5 col-sm-12">
            <!-- Possivel lugar onde o mapa vai -->

            <div class="card">
                <div class="card-header">
                        <center>
                            <h4>Entre em contato</h4>
                        </center>
                    </div>

                    <div class="card-body">

                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">

                        <label for="email">E-mail</label>
                        <input type="E-mail" class="form-control" name="email" id="email" placeholder="email">

                        <label for="tel">Telefone</label>
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Ex: 1140028922">
 
                        <label for="cel">Celular</label>
                        <input type="cel" class="form-control" name="celular" id="celular" placeholder="Ex: 11999999999">

                        <label for="msg">Mensagem</label>
                        <textarea class="form-control" name="mensagem" rows='5' placeholder="Mensagem"></textarea>
                    </div>

                    <div class="card-footer" >
                        <button class="btn btn-block btn-success" type="submit">enviar
                        </button>
                    </div>
            </div>
        </div>
    </div>

    
</main>
<?php
  include'includes/rodape.php';
?>
