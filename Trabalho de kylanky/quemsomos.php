<?php
include('sessao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Steamo</title>
  <link href="../Trabalho de kylanky/style/style.css" rel="stylesheet">
  <link href="../Trabalho de kylanky/style/stylequemsomos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">
  <header class="header">
    <div class="title">
      <h1>Steamo</h1>
    </div>

    <ul>

    <a href="../Trabalho de kylanky/index.php" class="color-title">
        <li class="li">Inicio</li>
      </a>
      <a href="../Trabalho de kylanky/quemsomos.php" class="color-title">
        <li class="li">Quem somos?</li>
      </a>
      <a href="#" class="color-title">
        <li class="li">Carrinho</li>
      </a>
      <a href="../Trabalho de kylanky/Login.php" class="color-title" id="inscreva-se-bnt">
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

  <main class="manco ">
    <article class="artico">
      <h3 class="hh3">Quem sou?</h3>
      <p class="puto">Bom...sou somente um adolecente bem juvenil de certa forma, querendo fazer um bom trabalho visual
        para ganhar pontos e passar nessa materia assim como em todas. Temho certeza que esse não vai ser o melhor
        trabalho e tudo bem, mas para mim é um avanço para meu futuro quem sabe, nunca se sabe o que pode acontecer e eu
        so espero conseguir, "o que?" talvez voce se pergunte, bom...eu tambem me faço ela. </p>

    </article>
    <div>
      <img class="img-div" src="../Trabalho de kylanky/imagens/bruce.jpg" alt="">

    </div>

  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
<footer class="text-center" id="sola">
  <i class="bi bi-c-circle"></i> 2024 Oblivion Grimes - Trabalho de kovalsky
</footer>

</html>