<?php
$hostname = "localhost";
$bancodedados = "trabalho kylansky";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli ->connect_errno) {
    echo "falha na conexão: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;

}
else
echo "conectado ao banco de dados"



?>