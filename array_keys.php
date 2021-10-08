<?php

    $nomes = array("MA"=>"Maria","ZE"=>"José","PE"=>"Pedro","AN"=>"Ana");

    $chaves = array_keys($nomes);

    foreach ($chaves as $item) {
    	
        echo "<br/>".$item;
    }

    	echo "<br/>";

    //função para exibir dados de um vetor
    
    print_r($chaves);	
  
?>  