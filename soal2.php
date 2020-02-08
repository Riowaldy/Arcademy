<?php
	function username($input_username){
		$lowercase_username = preg_match('/^[a-z]{5,9}$/i',$input_username);
		$uppercase_username = preg_match('@[A-Z]@',$input_username);
		if($uppercase_username){
			echo $input_username.' adalah data username harus hanya huruf kecil';
	    }else if($lowercase_username){
	        echo $input_username.' adalah data username Sesuai';
	    }else{
	    	echo $input_username.' adalah data username harus hanya huruf kecil';
	    }
	}
	echo username('riowaldy');
	
?>
<br>
<?php
	function password ($input_password){
		$uppercase_password = preg_match('@[A-Z]@', $input_password);
		$lowercase_password = preg_match('@[a-z]@', $input_password);
		$character_password    = preg_match('/[+#!\?~`@#$%^&*=-]/', $input_password);
		$number_password    = preg_match('@[0-9]@', $input_password);
		if(!$uppercase_password || !$lowercase_password || !$number_password || !$character_password ||strlen($input_password)<=8){
		    echo $input_password." = password harus merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter. Panjang password minimal 8 karakter.";
		}else{
		    echo $input_password." = password memenuhi kriteria";
		}
	}
	echo password('Riowaldy78%');
?>