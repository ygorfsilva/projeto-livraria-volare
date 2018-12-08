<?php
require_once 'serviceUsuario.php';
	if (isset($_POST['btn-enviar'])){
			if ($user = serviceLogin($_POST['txtEmail'], $_POST['isenha'])){
				header('location: ../../index.php');
			} else {
				$_SESSION['erro'] = 'Usuário e/ou senha inválidos';
				header('location: ../../entrar.php');
			}
		}
