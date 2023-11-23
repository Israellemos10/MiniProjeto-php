
<h2>MENU DO SITE</h2>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bem Estar e Saúde</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1> Bem Estar e Saúde</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
              <li><a
href="#">Quem Somos</a></li>  
              <li><a
href="#">Clientes</a></li>  
</a>   
<a href= "?pg=faleconosco">Fale Conosco </a> 
<li><a
  <a href= "logout.php">Sair</a>
<li><a
  <p>Você está logado <?= $_SESSION['user']['nome'];?> </p>
<?php }else{ ?>
  <a href= "?pg=pagina_login">Entrar</a>
  <li><a
  <a href= "?pg=pagina_cadastro">Cadastrar-se</a>
    <li><a
<?php } ?>

<br>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Bem-vindo ao nosso Site de Bem Estar e  Saúde</h2>
        <p>Oferecemos uma variedade de serviços para melhorar o seu bem-estar.</p>
    </section>

    <footer>
        <p>&copy; 2023 Bem Estar e Saúde. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

<?php if(isset($_SESSION['user'])){ ?>
  <a href= "logout.php">Sair</a>
  <p>Você está logado <?= $_SESSION['user']['nome'];?> </p>
<?php }else{ ?>
  <a href= "?pg=pagina_login">Entrar</a>
  <a href= "?pg=pagina_cadastro">Cadastrar-se</a>
<?php } ?>
</div>
