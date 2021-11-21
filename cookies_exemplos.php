<?php

    setcookie("usuario","etecia");

?>

/*Com parâmetro vencimento*/

<?php

    setcookie("usuario","etecia",time()+86400);


?>

/*Recuperar Cookie*/

<?php

  echo $_COOKIE["usuario"];

?>


