<?php

require_once('../conexao.php');
include ('../sessao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Steamo</title>
  <link href="../style/style.css" rel="stylesheet">
  <link href="../style/produtos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">
  <header class="header">
    <div class="title">    
      <h1>Steamo</h1>
    </div>

    <ul>
      
    <a href="../index.php" class="color-title">
        <li class="li">Inicio</li>
      </a>
      <a href="../quemsomos.php" class="color-title">
        <li class="li">Quem somos?</li>
      </a>
      <a href="#" class="color-title">
        <li class="li">Carrinho</li>
      </a>
      <a href="../Login.php" class="color-title" id="inscreva-se-bnt">
        <li class="li">
          <?php
          if (isset($_SESSION['nome'])) {
            echo $_SESSION['nome'];
          } else {
            echo 'Já tem uma conta?';
          }
          ?>
        </li>
        <!-- Se o usuário estiver logado, exibe o nome e um botão para sair -->
        <li class="li">
          <?php if (isset($_SESSION['nome'])) : ?>

            <form action="../logout.php" method="post">
              <button type="submit">Sair</button>
            </form>
          <?php endif; ?>
        </li>

      </a>
    </ul>
    
  </header>

  <main class="bambam  ">
    <section id="carrossel-principal" class="tamanho col-8" >
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" id="img-carroça" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../imagens/h.d96146d7-d00a-4db9-ad68-197b2f962a17" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagens/hh.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagens/hhh.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
      </div>
    </section>
    <article class="corroça col-3">
      <br>
      <h3 class="h-title">Hollow Knight</h3>
      <br>
      <p class="para">Hollow Knight é uma aventura de ação clássica em estilo 2D por um vasto mundo interligado. Explore cavernas serpenteantes, cidades antigas e ermos mortais; lute contra criaturas malignas e alie-se a insetos bizarros, e solucione mistérios antigos no centro do reino.    </p>
      
      <?php


      $ID_produto = 11; // ID do produto desejado

      $sql = "SELECT valor_produtos FROM produtos WHERE ID_produtos = $ID_produto";

      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
        // Exibe o valor do produto
        $row = $result->fetch_assoc();
        $preco = $row["valor_produtos"];
        echo $preco;
      }

      ?>
      <a class="btn btn-primary" id="button-tamanho" href="#" role="button">Comprar</a>
      <br>
    </article>
  
   
     </main>

     
  

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
<footer class="text-center" id="sola">
  <i class="bi bi-c-circle"></i> 2024 Oblivion Grimes - Trabalho de kovalsky
</footer>

</html>