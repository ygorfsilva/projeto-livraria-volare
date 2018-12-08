<?php
require_once 'crud_carrinho.php';
# Inserir no carrinho
  function serviceInserir($user_id, $id, $quant){
    if ($carrinho = inserirCarrinho($user_id, $id, $quant){
			header('location: testeCarrinho.php');
		} else {
      echo "falhou";
		}
  }
  # Aumentar o número de produtos reservados
  function serviceUpdateAdd($quant, $id){
    if ($carrinho = updateAdd($quant, $id)) {
      header('location: testeCarrinho.php');
		} else {
      echo "falhou";
		}
  }
  # Deletar os produto reservados
  function serviceDelete($quant_total, $id){
    if ($carrinho = deleteCarrinho($quant_total, $id)) {
      header('location: testeCarrinho.php');
    } else {
      echo "falhou";
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
