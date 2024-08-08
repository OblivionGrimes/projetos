<?php
session_start();

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "SELECT * FROM usuario WHERE email_usuario = ? AND senha_usuario = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();

    $result = $stmt->get_result();


    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome_usuario'];

        header("Location: index.php");
    }
} else {

    $error = "usuario ou senha incorretos";
}


?>

<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /* background-image: linear-gradient(45deg, cyan, yellow);   pra fazer degrade de cores */
            background-image: linear-gradient(45deg, #252525, #454545);
        }

        form {
            background-color: rgba(0, 0, 0, 0.9);
            /*0,9 é pra opacidade*/
            position: absolute;
            /*pra que fique centralizado no que escrevo*/
            top: 30%;
            /*top e left são para mexer na centralização do que voce ta escrevendo ou fazendo (onde voce quer deixar basicamente)*/
            left: 40%;
            padding: 80px;
            /*proporção do fundo preto*/
            border-radius: 15px;
            color: aliceblue;
        }

        input {
            padding: 15px;
            border: none;
            /*reitra as bordas*/
            outline: none;
            /*quando clica na caixinha pra digitar, retira a linha de borda*/
            border-radius: 7px;
        }

        button {
            background-color: dodgerblue;
            border: none;
            border-radius: 7px;
            /* arredonda as bordar*/
            padding: 13px;
            width: 100%;
            color: aliceblue;
            cursor: pointer;
            /* muda o formato do mouse pra maozinha */
        }

        button:hover {
            /*faz mudar a cor do botão quando passa o mouse por cima*/
            background-color: darkblue;
        }
    </style>
</head>

<body>

    <form action="login.php" method="post">
        <h1>Login</h1>
        <input type="text" placeholder="Email" name="email" required>
        <br> <br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br> <br>
        <button type="submit">Entrar</button>
        <br> <br>
        <a href="../Trabalho de kylanky/cadastro.php" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Cadastre-se Aqui</a>
    </form>
    </div>


</body>

</html>