<?php

	function getConnection() {
		$link = mysqli_connect("localhost","root","","livraria", 3306) or die("Erro ao abrir a conexão");
		mysqli_set_charset($link, "utf8");
		return $link;
	}