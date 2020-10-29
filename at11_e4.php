<?php
	$a=array('a'=>'macâ','b'=>'banana');
	$b=array('d'=>'kiwi','e'=>'ananás','c'=>'morango');
	$ab=array_merge($a,$b);
	var_dump($ab);
	echo "<br>";
	$ba=array_merge($b,$a);
	var_dump($ba);

?>