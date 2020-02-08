<?php  
	function ganti_kata($kata,$kata_awal,$kata_ganti){
        $i =0; $hasil;
        $panjang = strlen($kata);
        while ($i < $panjang) {
        	if ($kata[$i] == $kata_awal) {
        		$hasil[$i] = $kata_ganti;
        		echo $hasil[$i];
        	}
        	else if ($kata[$i] !== $kata_awal){
        		$hasil[$i] = $kata[$i];
        		echo $hasil[$i];
        	}
        	$i++;
        }
    }
    echo ganti_kata('Riowaldy Indrawan','a','x');
?>