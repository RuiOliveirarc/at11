<?php 
	$pais='Portugal';
	$a=substr($pais, 3,2);
	$b=strlen($pais);
	$c=strtoupper($pais);
	echo '4 e 5 caracter da string '.$pais. ' - ' .$a;
	echo "<br>";
	echo 'A string '.$pais. ' tem ' .$b. ' caracteres';
	echo "<br>";
	echo 'String original= '.$pais. '  /-/-/-/-/ String toda em maiusculas= ' .$c;
?>