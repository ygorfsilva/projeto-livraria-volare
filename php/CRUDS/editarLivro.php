<?php
require_once 'serviceBook.php';
	if (isset($_POST['livro-editar'])){
			if ($livro = serviceEditar($_POST['categoria'], $_POST['titulo'], $_POST['autor'], $_POST['editora'], 
				$_POST['ISBN'], $_POST['numeropaginas'], $_POST['sinopse'], $_POST['peso'], 
				$_POST['fornecedor'], $_POST['preco'], $_POST['subcategorias'], 
				$_POST['capa'], $_POST['id'])){
					echo "funcionou";
			} else {
				echo 'não funcionou';
			}
		}