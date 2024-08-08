<?php
// Iniciar sessão no início do arquivo
session_start();
// Verifica se a variável de sessão 'nome' está definida
if(isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} 
?>