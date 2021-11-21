<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fopen</title>
</head>
<body>
<?php
     
		$file=fopen("arquivo.txt","r");
		$file2=fopen("http://www.teste.com.br","r");

	?>
</body>
</html>

<html>
<body>
	<?php
	 $file=fopen("arquivo.txt","r")
	 or exit("Não foi possívelabrir o arquivo!");

	?>
</body>
</html>

<html>
<body>
	<?php
	$file = fopen("c:\\pasta\\arquivo.txt","r");

	?>
</body>
</html>

<?php

   $file = fopen("arquivo.txt","r");
   while(!feof($file)) {
   	$linha = fgets($file);
   	echo $linha . “<br>”;
   }
   fclose($file);
?>

<?php
    $file = fopen("arquivo.txt","r");
    while(!feof($file)) {
    	echofgetc($file);
    }
    fclose($file);
?>

<?php
    $file = fopen("arquivo2.txt","w");
    $conteudo= ‘conteudo’;
    fwrite($file, $conteudo);
    fwrite($file, ' Guarulhos');
    fclose($file);
?>

<?php

  $arquivo = "contador.txt";
  if(file_exists($arquivo)) {
  	$file = fopen($arquivo,"r");
  	/*funcaochopremove os espaços e quebrade linha existentes no fim de uma string*/
  	$cont= chop(fgets($file));
  	fclose($file);
  	$cont++;
  }
  //...
?>

<?php
//...
else{
	$cont= 1;
}
$file2 = fopen($arquivo,"w");
fwrite($file2,$cont);
fclose($file);
?>
