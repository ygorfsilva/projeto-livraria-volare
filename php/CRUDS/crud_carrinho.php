<?php
session_start();
require_once 'conexao.php';
# Inserir nos produtos reservados
function inserirCarrinho($user_id, $id, $quant){
	$conexao = getConnection();
  $sql = "INSERT INTO itens_reservados values ($user_id, $id, $quant)";
  $resultado = mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
# Aumentar o número de produtos reservados
function updateAdd($quant, $id){
  $conexao = getConnection();
  $sql = "update itens_reservados set quantidade = quantidade + $quant where produto_id = $id";
  $resultado = mysqli_query($conexao, $sql);
  $sql = "update produto set quantidade = quantidade - $quant where id = $id";
  $resultado = mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
# Deletar os produto reservados
function deleteCarrinho($quant_total, $id){
  $conexao = getConnection();
  $sql = "update produto set quantidade = quantidade + $quant_total where id = $id";
  $resultado = mysqli_query($conexao, $sql);
  $sql = "DELETE FROM itens_reservados where produto_id = $id";
  $resultado = mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
# Alterar o número de produto reservados
function updateAlt($qtd, $id){
	$conexao = getConnection();
  $sql = "update itens_reservados set quantidade = $qtd where produto_id = $id";
  $resultado = mysqli_query($conexao, $sql);
  $sql = 'update produto set quantidade = quantidade - $qtd where id = $id';
  $resultado = mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
function listarCarrinho($limit){
  $conexao = getConnection();
  $sql = "SELECT usu.nome, prod.titulo, itres.quantidade from usuarios usu
  inner join itens_reservados itres on itres.usuarios_id = usu.id
  inner join produto prod on prod.id = itres.produto_id;";
	if (isset($limit)) {
		$sql .= " LIMIT $limit";
	}
  $resultado = mysqli_query($conexao, $sql);
	$arr = NULL;
  if (mysqli_affected_rows($conexao) >= 1) {
		while ($linha = mysqli_fetch_assoc($resultado)){
			$arr[] = $linha;
		}
	} else {
		return false;
	}
}
