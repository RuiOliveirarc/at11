<?php
	$numeros = array(
		'n1' => rand(1,100),
		'n2' => rand(1,100),
		'n3' => rand(1,100),
		'n4' => rand(1,100),
		'n5' => rand(1,100),
		'n6' => rand(1,100),
		'n7' => rand(1,100),
		'n8' => rand(1,100),
		'n9' => rand(1,100),
		'n10' => rand(1,100),
	);
	$soma=0;
	$num=0;
	$maior=0;
	$maior2=0;
	echo "Numeros:";
	echo "<br>";
	foreach ($numeros as $numero) {
		
//determinar o maior
		if($maior<$numero){
			$maior=$numero;
		}
		
		echo $numero;
		echo "<br>";
		$soma=$num+$numero;
		$num=$soma;
	}
	echo '<br>';
	echo 'A soma de todos os numeros é '.$soma;
	
//determinar o 2 maior
	foreach ($numeros as $numero) {

		if($numero>$maior2 && $numero<$maior){
			$maior2=$numero;
		}


	}
	echo '<br>';
	echo 'O 2 numero maior é '.$maior2;
?>