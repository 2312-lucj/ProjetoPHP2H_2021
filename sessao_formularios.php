<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessão - Implementando os formulários</title>
	<?php
	      session_start();
	?>
</head>
<body>
     <b>Funcionário: </b><?php echo $_SESSION["nome"]; ?>, logado com sucesso. <br>
     <b>Data de conexão: </b><?php echo date("d/m/Y"); ?><br>
     <b>Hora de conexão: </b><?php echo date("h:i:s"); ?><br>
     <br>
     <a href="sessao_formularios_valida.php"> Área de admnistrador </a><b>

</body>
</html>