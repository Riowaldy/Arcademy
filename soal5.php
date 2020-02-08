<?php  
	function fibonanci($nilai){
		$nilai1 = 0;
		$nilai2 = 1;
		$i=$nilai1;
		while ($i<$nilai) {
			echo ' '.$nilai1;
			$nilai3 = $nilai1+$nilai2;
			$nilai1 = $nilai2;
			$nilai2 = $nilai3;
			$i++;
		}
	}
	echo fibonanci(10);
?>