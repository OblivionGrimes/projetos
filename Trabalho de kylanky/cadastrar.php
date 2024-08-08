<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nome"];
    
    $email = $_POST["email"];
    
    $senha = $_POST["senha"];
    
    


$sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES (?, ?, ?)";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $name, $email, $senha);


$stmt->execute();

$stmt->close();
}


$mysqli->close();

header("Location: Login.php");

?>