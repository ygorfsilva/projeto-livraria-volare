<?php
require_once 'serviceUsuario.php';
	if (isset($_POST['btn-enviar']) && $_POST['isenha'] === $_POST['isenha2']){
			if ($user = serviceRegistro($_POST['txtNome'], $_POST['txtSobrenome'], $_POST['txtEmail'],
				$_POST['txtCPF'], $_POST['txtDataNasc'], $_POST['txtGenero'], $_POST['isenha'],
				$_POST['txtCEP'], $_POST['txtEndCobr'], $_POST['txtNum'], $_POST['txtComplemento'],
				$_POST['txtBairro'], $_POST['txtCidade'], $_POST['txtEstado'])){

				echo 'funcionou';
			} else {
				echo "nao funcionou";
			}
		} else {
			echo 'Confirmação de senha diferente da senha original';
		}
