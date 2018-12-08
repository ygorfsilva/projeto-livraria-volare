<?php
require_once 'crud_usuario.php';
	function serviceLogin($email, $senha){
		if ($user = logarUsuario($email, $senha)){
			$_SESSION['user'] = $user;
			$_SESSION['user_id'] = $_SESSION['user']['id'];
			echo "foi";
			return true;
		} else {
			return false;
		}
	}

	function serviceRegistro($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado){
		if ($user = registrarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado)){
			return $user;
		} else {
			return false;
		}
	}
	function serviceEditar($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado){
		if ($user = registrarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado, $id)){
			return $user;
		} else {
			return false;
		}
	}
	function serviceListarUsu($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $cep, $end, $num, $complemento, $bairro, $cidade, $estado){
		if ($user = listarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $cep, $end, $num, $complemento, $bairro, $cidade, $estado, $id)){
			$_SESSION['user'] = $user;
		} else {
			return false;
		}
	}
