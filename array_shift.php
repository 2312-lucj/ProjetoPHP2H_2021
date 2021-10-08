<?php
 // Quase a mesma coisa que o unshift e o push. \\

   $nomes = array("Maria","José","Pedro");
   $excluido = array_shift($nomes);

   foreach ($nomes as $item) {
   	
     echo "<br/>".$item;  
}

     echo "<br/><br/> Nome removido: ".$excluido;

?>