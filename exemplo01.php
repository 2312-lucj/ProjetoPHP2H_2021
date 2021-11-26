<?php

$con = mysqli_connect("localhost", "root","","empresaabc");


if (mysqli_connect_errno($con)){

	echo "Erro ao conectar com a base de dados: ".

	mysqli_connect_error();

	}else{

		echo "Conexão Aberta";

		mysqli_close($con);

		echo "<br>A Conexão Fechou";
	}

?>