<?php
 //Quase a mesma coisa que o unshift.\\

   $nomes = array("Maria","José","Pedro");
   array_push($nomes, "Ana");

   foreach ($nomes as $item) {
   	
     echo "<br/>".$item;  
}

?>