<?php
# Pega o Valor do token do facebook
session_start();
header("Content-Type: application/json; charset=UTF-8");
$dados = json_decode($_GET["x"], false);
$_SESSION['token_face'] = $dados;
?>
