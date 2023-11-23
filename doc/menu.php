<?php session_start(); ?>
<div style= "background-color : #00FF00s">
<style>
  
  a {
    display: inline;
    margin-right: 20px;
  }
</style>
<style>
 .large-text {     
  font-size: 11px;
 }
        </style>
    <div class="large-text">
<h2>MENU DO SITE</h2>
</div>

<div class="left">
<a href= "index.php"> inicio </a> 
<a href= "?pg=quemsomos">Quem Somos  </a>   
<a href= "?pg=clientes"> Clintes </a>   
<a href= "?pg=faleconosco">Fale Conosco </a> 

<br>


<?php if(isset($_SESSION['user'])){ ?>
  <a href= "logout.php">Sair</a>
  <p>Você está logado <?= $_SESSION['user']['nome'];?> </p>
<?php }else{ ?>
  <a href= "?pg=pagina_login">Entrar</a>
  <a href= "?pg=pagina_cadastro">Cadastrar-se</a>
<?php } ?>
</div>
