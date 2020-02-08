<?php  
	function hitung_vokal($kata)
	{
	    $i=0;
	    $hasil = $i;
	    $panjang = strlen($kata);
	    while ($i<$panjang) {
	    	if ($kata[$i]=='a' || $kata[$i]=='i' || $kata[$i]=='u' || $kata[$i]=='e' || $kata[$i]=='o' ||
	    		$kata[$i]=='A' || $kata[$i]=='I' || $kata[$i]=='U' || $kata[$i]=='E' || $kata[$i]=='O') {
	    		$hasil++;
	    	}else{
	    		$hasil==$hasil;
	    	}
	    	$i++;
	    }
	    return $hasil;
	}
	echo(hitung_vokal('Riowaldy Indrawan'));
?>