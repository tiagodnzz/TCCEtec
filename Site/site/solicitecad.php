<?php
  include 'includes/cabecalho.php';
  include 'includes/menu.php';
?>
<div class="container" style="margin-top: 3%">
  <h3>Solicite o Cadastro do seu imovel</h3><br>

<form action="solcad.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nome">Nome</label>
      <input type="nome" class="form-control" name="nome" id="nome" placeholder="nome">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Ex: 40028922">
    </div>
    <div class="form-group col-md-6">
      <label for="tel">Celular</label>
      <input type="text" class="form-control" name="celular" id="celular" placeholder="Ex: 5511900000000">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Rua dos bobos N°0">
    </div>
    <div class="form-group col-md-6">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Ex: Laranjeiras">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="Cidade">Cidade</label>
      <select id="cidade" name="cidade" class="form-control">
        <option selected>Escolher...</option>
        <option>Caieiras</option>
        <option>Franco da Rocha</option>
        <option>Cajamar</option>
        <option>Jundiai</option>
        <option>Perus</option>

      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="CEP">CEP</label>
      <input type="text" class="form-control" name="cep" class="cep" id="cep" placeholder="Ex: 00000-000">
    </div>
    <div class="form-group col-md-4">
      <label for="valor">Valor </label>
      <input type="text" class="form-control" name="valor" id="valor" placeholder="Ex: R$200.000,00">
    </div>
  </div><br><br>
  
  <center>
   <button type="submit" class="btn btn-success btn-lg">Solicitar</button>
  </center>
</form>
<br><br>

<!-- chamando rodape -->
<?php
  include'includes/rodape.php';
?>
