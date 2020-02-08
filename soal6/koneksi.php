<?php 
	try {
		$con = mysqli_connect("localhost", "root", "", "arcademy");
	} catch (Exception $e) {
		die("Terjadi Kesalahan: ".$e->getMessage());
	}
?>