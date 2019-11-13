<?php
// atribui a variável paginaLink apenas o nome da página
$paginaLink = basename($_SERVER['SCRIPT_NAME']);
?>
<nav>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li <?php if($paginaLink == 'index.php') {echo 'class="active"';}?>><a href="index.php">Home</a></li>
          <li <?php if($paginaLink == 'sobre.php') {echo 'class="active"';}?>><a href="sobre.php">Sobre</a></li>
          <li <?php if($paginaLink == 'contato.php') {echo 'class="active"';}?>><a href="contato.php">Contato</a></li>
          </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</nav>