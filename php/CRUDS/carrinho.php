<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST["quantity"]) && $_POST['quantity'] != 0){
    $quant = $_POST["quantity"];
}
else{
    $quant = 1;
}
# Verifica se existe a sessão de carrinho, caso não exista é criada
if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}
if(isset($_GET['id'])){
  $_POST['id_produto'] = $_GET['id'];
  $_POST['detalhes_produto'] = array($_POST['id_produto'] => (intval($_POST['quantity'])) !== NULL ? intval($_POST['quantity']) : '');
}
if(isset($_GET['acao'])) {
    # Adiciona o produto
    if($_GET['acao'] == 'add') {
        $id = intval($_POST['id_produto']);
        if(!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = $quant;
        } else {
            $_SESSION['carrinho'][$id] += $quant;
        }
        header("Location: index.php");
        die();
    }
    # Remove o produto
    if($_GET['acao'] == 'del') {
        $id = intval($_GET['id']);
        if(isset($_SESSION['carrinho'][$id])) {
            unset($_SESSION['carrinho'][$id]);
        }
        header("Location: index.php");
        die();
    }
    # Altera quantidade
    if($_GET['acao'] == 'atu') {
        if(is_array($_POST['detalhes_produto'])) {
            foreach ($_POST['detalhes_produto'] as $id => $qtd) {
                $id = intval($id);
                $qtd = intval($qtd);
                if(!empty($qtd) || $qtd != 0) {
                    $_SESSION['carrinho'][$id] = $qtd;
                } else {
                    unset($_SESSION['carrinho'][$id]);
                }
            }
        }
        header("Location: index.php");
        die();
    }
}