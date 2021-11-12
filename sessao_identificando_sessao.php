<!DOCTYPE html>
<html>
<head>
	<title>Sessão de usuário - identificando uma sessão</title>
</head>
<body>
  <?php

  session_start();

  $_SESSION["nome"] = "usuário";

  ?>



</body>
</html>