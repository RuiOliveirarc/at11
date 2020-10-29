<?php
	$a=array(
			'SLB' => $SLB = array(
				'nomecompleto' => 'Sport Lisboa e Benfica',
				'estadio' => 'Estádio da Luz',
				'localidade' => 'Lisboa',
				'pais' => 'Portugal',
				),
			'SCP' => $SCP = array(
				'nomecompleto' => 'Sporting Clube de Portugal',
				'estadio' => 'Estádio José de Alvalade',
				'localidade' => 'Lisboa',
				'pais' => 'Portugal',
				),
			'CDA' => $CDA = array(
				'nomecompleto' => 'Clube desportivo das Aves',
				'estadio' => 'Estádio das Aves',
				'localidade' => 'Vila Das Aves',
				'pais' => 'Portugal',
				),
			'FCP' => $FCP = array(
				'nomecompleto' => 'Futebol Clube do Porto',
				'estadio' => 'Estádio do Dragão',
				'localidade' => 'Porto',
				'pais' => 'Portugal',
				),
			);



	foreach ($a as $key => $as) {
		echo $key;
		echo '<br>';
		foreach ($as as $key2 => $ass) {
			
			echo $key2. '-' .$ass. ' ';
			echo '<br>';
		}
		echo '<br>';
	}


?>