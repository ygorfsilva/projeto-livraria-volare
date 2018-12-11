<?php
require_once 'crud_carrinho.php';
# Inserir no carrinho
  function serviceInserir($user_id, $id, $quant){
    inserirCarrinho($user_id, $id, $quant);
  }
  # Aumentar o número de produtos reservados
  function serviceUpdateAdd($quant, $id){
    if ($carrinho = updateAdd($quant, $id)) {
      echo "foi";
		} else {
      echo "falhou";
		}
  }
  # Deletar os produto reservados
  function serviceDelete($quant_total, $id){
    if (deleteCarrinho($quant_total, $id)){

    }
  }
  # Alterar o número de produto reservados
  function serviceUpdateAlt($qtd, $id){
    if ($carrinho = updateAlt($qtd, $id)) {
      header('location: testeCarrinho.php');
    } else {
      echo "falhou";
    }
  }
  function serviceListarCarrinho($id){
    if ($carrinho = listarCarrinho($id)) {
      $_SESSION['lista_carrinho'] = $carrinho;
      header('location: testeCarrinho.php');
    } else {
      echo "falhou";
    }
  }
