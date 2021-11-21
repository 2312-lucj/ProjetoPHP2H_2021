<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testando se o cookie foi definido</title>
</head>
<body>
    <?php

      if (isset($_COOKIE['usuario'])) {
         echo "Bem vindo ".$_COOKIE['usuario'] . "! <br>";
      }
      else{
          echo "Usuário novo, seja bem vindo!<br>";     
      }
    ?>
</body>
</html>