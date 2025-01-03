<?php

session_start();
require_once "conexao.php";



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Steamo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./style/style.css" rel="stylesheet">
</head>

<body class="body">
  <header class="header">
    <div class="title">
      <h1>Steamo</h1>
    </div>

    <ul>

      <a href="./index.php" class="color-title">
        <li class="li">Inicio</li>
      </a>
      <a href="./quemsomos.php" class="color-title">
        <li class="li">Quem somos?</li>
      </a>
      <a href="#" class="color-title">
        <li class="li">Carrinho</li>
      </a>
      <a href="./Login.php" class="color-title" id="inscreva-se-bnt">
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

            <form action="logout.php" method="post">
              <button type="submit">Sair</button>
            </form>
          <?php endif; ?>
        </li>

      </a>
    </ul>



  </header>


  <main class="main">
    <section id="carrossel-principal">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" id="img-carrossel">
          <div class="carousel-item active">
            <img src="./imagens/teste.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Madrugada Dos Mortos</h5>
              <p>Filme boladooo (nunca vi)</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagens/teste1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Berserk</h5>
              <p>Rip Kentaru Miura</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagens/teste2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Need For Speed</h5>
              <p>For The Family</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </section>

  </main>

  <div>
    <p>
    <h1 class="txt-center">Os melhores jogos aqui!!!</h1>
    </p>
  </div>

  <section class="cardin">

    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/shad.png" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Shadow Of The Colossos</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10 (64bit)
          Processador: Intel Core i5
          Memória: 8 GB de RAM
          Placa de vídeo: GeForce GTX 560
          DirectX: Versão 11
          Armazenamento: 9 GB de espaço disponível
          Outras observações: 1080p, 16:9 recommended.</p>
        <span class="spano">
          <h4>R$ 149,90</h4>
        </span>
        <a class="card-button" href="./telas/shadowofthecolossos.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/metal g.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Metal Gear V: The Phanton Pain</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10
          Processador: Ryzen 5 5600X / Intel Core i9-9900k
          Memória: 10 GB de RAM
          Placa de vídeo: Radeon RX 6800 XT (16384 VRAM) / GeForce RTX 2070 Super (8192 MB)
          DirectX: Versão 12
          Armazenamento: 70 GB GB de espaço disponível</p>
        <span class="spano">
          <h4>R$ 249,90</h4>
        </span>
        <a class="card-button" href="./telas/metalgear.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/DOOM-Eternal_XBW_Hero_1920x1080.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>DOOM ETERNAL</h3>
        </span>
        <p class="card-text" id="txt-visual">Supported OS:Windows XP/Vista/7
          Processor:Pentium 4 @ 3 GHz/AMD 64 3200+
          Memory:512 MB (1 GB for Vista)
          Hard Drive:8 GB Free
          DirectX version:DirectX 9.0c
          Sound:on-board or better
          Graphics Card:256 MB (nVidia GeForce 6600/ATI Radeon X1600)</p>
        <span class="spano">
          <h4>R$ 54,90</h4>
        </span>
        <a class="card-button" href="./telas/Doom.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/resident evil.webp" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Resident Evil 4 Remake</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: WINDOWS® 10
          Processador: Intel® Core™ i7 3770 3.4GHz or AMD equivalent or better
          Memória: 8 GB de RAM
          Placa de vídeo: NVIDIA® GeForce® GTX 1060 with 3GB VRAM
          DirectX: Versão 12
          Armazenamento: 24 GB de espaço disponível.
        </p>
        <span class="spano">
          <h4>R$ 249,90</h4>
        </span>
        <a class="card-button" href="./telas/resident4.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/dragons dogma.avif" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Dragon's Dogma Dark Arisen </h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10 (64 bit)/Windows 11 (64 bit)
          Processador: AMD Ryzen 5 3600 / Intel Core i7 8700
          Memória: 16 GB de RAM
          Placa de vídeo: AMD Radeon RX 5700 / NVIDIA GeForce GTX 1070
          DirectX: Versão 12
          Rede: Conexão de internet banda larga</p>
        <span class="spano">
          <h4>R$ 49,90</h4>
        </span>
        <a class="card-button" href="./telas/dragons.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/Sekiro-cover.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Sekiro: Shadows Die Twice</h3>
        </span>
        <p class="card-text" id="txt-visual">SO *: Windows 7
          Processador: Quad Core Processor
          Memória: 4 GB de RAM
          Placa de vídeo: NVIDIA GeForce GTX 560 AMD Radeon RX 5700 AMD Radeon RX 5700
          DirectX: Versão 9.0
          Armazenamento: 5 GB de espaço disponível
          Placa de som: DirectX®-compatible DirectX®-compatible
        </p>
        <span class="spano">
          <h4>R$ 129,90</h4>
        </span>
        <a class="card-button" href="./telas/sekiro.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/red dead.avif" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Red Dead Redemption 2</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10 64-bits
          Processador: Intel Core i7-4770K@3.5GHz or Ryzen 5 1500X@3.5GHz
          Memória: 16 GB de RAM
          Placa de vídeo: Nvidia GeForce GTX 1060 (6 GB) or AMD Radeon RX 580 (8 GB)
          DirectX: Versão 11
          Armazenamento: 70 GB de espaço disponível
        </p>
        <span class="spano">
          <h4>R$ 149,90</h4>
        </span>
        <a class="card-button" href="./telas/reddead.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/dark souls.avif" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Dark Souls Remastered</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10 64-bit
          Processador: Intel Core i5-8600 or AMD Ryzen 5 3600
          Memória: 16 GB de RAM
          Placa de vídeo: NVIDIA GeForce RTX 2060 or AMD Radeon RX 5600 XT
          Armazenamento: 75 GB de espaço disponível
          Outras observações: SSD Required 75 GB de espaço disponível</p>
        <span class="spano">
          <h4>R$ 149,90</h4>
        </span>
        <a class="card-button" href="./telas/darksouls.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/thelast.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>The Last Of Us Part I</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10
          Processador: Intel Core i7-9700K or AMD Ryzen 7 3700X
          Memória: 16 GB de RAM
          Placa de vídeo: NVIDIA GeForce RTX 2060 or AMD Radeon RX 6600XT
          Armazenamento: 100 GB de espaço disponível
          Outras observações: SSD Recommended</p>
        <span class="spano">
          <h4>R$ 249,90</h4>
        </span>
        <a class="card-button" href="./telas/thelast.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/batman.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Batman Arkhan Knight</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: Windows 10 64-bit (version 1909 or higher)
          Processador: Intel Core i5-8600 or AMD Ryzen 5 3600 AMD Ryzen 5 3600
          Memória: 16 GB de RAM
          Placa de vídeo: NVIDIA GeForce RTX 3060 or AMD Radeon RX 5700
          Armazenamento: 150 GB de espaço disponível
        </p>
        <span class="spano">
          <h4>R$ 24,90</h4>
        </span>
        <a class="card-button" href="./telas/batman.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/hollow.avif" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Hollow Knight</h3>
        </span>
        <p class="card-text" id="txt-visual">SO: 64-bit Windows 10
          Processador: Intel Core i7-8700 (3.2Ghz) or AMD Ryzen 5 3600 (3.6 Ghz) AMD Ryzen 5 3600
          Memória: 16 GB de RAM
          Placa de vídeo: NVIDIA GeForce 1080 Ti or AMD Radeon RX 5700 XT or INTEL Arc A770
          DirectX: Versão 12
          Armazenamento: 85 GB de espaço disponível</p>
        <span class="spano">
          <h4>R$ 69,90</h4>
        </span>
        <a class="card-button" href="./telas/hollow.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>
    <div class="card" id="cardun">
      <img class="card-img-top" src="./imagens/Agostinho-.jpg" alt="Imagem de capa do card" id="img-border">
      <div class="card-body">
        <span class="spani">
          <h3>Grand Theft Auto VI</h3>
        </span>
        <p class="card-text" id="txt-visual">SO *: Windows 7/8/10 (64-bit OS required)
          Processador: Intel Core i7 4790 3.6 GHz/AMD FX-9590 4.7 GHz or equivalent
          Memória: 8 GB de RAM
          Placa de vídeo: NVIDIA GTX 780 3GB/AMD Radeon R9 290X 4GB or equivalent
          Armazenamento: 30 GB de espaço disponível</p>
        <span class="spano">
          <h4>R$ 349,90</h4>
        </span>
        <a class="card-button" href="./telas/gta.php">
          <button type="button" class="btn btn-outline-primary" id="t-button">Comprar</button>
        </a>
      </div>
    </div>


  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer class="text-center" id="sola">
  <i class="bi bi-c-circle"></i> 2024 Oblivion Grimes - Trabalho de kovalsky
</footer>

</html>