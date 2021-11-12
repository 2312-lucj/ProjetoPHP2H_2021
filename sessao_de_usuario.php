<!DOCTYPE html>
<html>
<head>
	<title>Página WEB - Sessão de Usuário</title>
</head>
<body>
   <?php

   session_start();

   $_SESSION['nome'] = "Administrador";

   ?>
   <h3>Sessão de Usuário</h3>
   Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>  

<h2>Página WEB - Sessão de Usuário 2</h2>

<?php
   
   session_start();

   $_SESSION['nome'] = "Administrador";

   session_unset();


   ?>
   <h3>Sessão de Usuário</h3>
   Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>