<?php

	 $value = 'aluno';

	 setcookie ("Ocupacao", $value);
	 /*expira no final da sessão (Quando o browser fechar)*/

	 setcookie ("Ocupacao", $value,time()+60);

	 /* expira em 1 min */
?>	 