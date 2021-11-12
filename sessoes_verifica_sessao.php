<!DOCTYPE html>
<html>
<head>
	<title>Verifica sessões</title>
	<?php
	session_start();

	if($_SESSION["nome"] != "master"){

		session_destroy();

		header("location:sessao_bloqueando_paginas.php");

	}
	?>
</head>
<body>
 
 <b>Página autorizada</b>

</body>
</html>