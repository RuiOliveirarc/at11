<?php
	$a=array('a'=>'macâ','b'=>'banana');
	$b=array('d'=>'kiwi','e'=>'ananás','c'=>'morango');
	$ab=array_merge($a,$b);
	echo "União de a + b";
	echo '<br>';
	foreach ($ab as $key => $bas) {
		echo $key. '-' .$bas;
		echo '<br>';
	}
	echo "<br>";
	$ba=array_merge($b,$a);
	echo "União de b + a";
	echo '<br>';
	foreach ($ba as $key => $bas) {
		echo $key. '-' .$bas;
		echo '<br>';
	}

?>