<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /*background-image: linear-gradient(45deg, cyan, yellow);   pra fazer degrade de cores */
            background-image: linear-gradient(45deg, #252525, #454545);
        }

        div {
            background-color: rgba(0, 0, 0, 0.8);
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
    <div>
        <form method="post" action="cadastrar.php"> 
        <h1>Cadastre-se Aqui</h1>
        <input type="text" placeholder="Nome" name="nome">
        <br> <br>
        <input type="email" placeholder="E-mail" name="email">
        <br> <br>
        <input type="password" placeholder="Senha" name="senha">
        <br> <br>
        <button type="submit">cadastrar-se</button>
        <br> <br>
        </form>
    </div>


</body>

</html>