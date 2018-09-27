<?php 
	$s = [2, 1, 6, 9, 9, 4, 3];
	rsort ($s);
	$jumlah = count($s);
	for($i = 0; $i <= $jumlah; $i++){
		if($s[$i] != $s[$i+1]){
			echo $s[$i+1];
			break;
		}
	}
?>
