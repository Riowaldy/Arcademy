<?php
	$nama = $_POST['nama'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];

    include("koneksi.php");

    mysqli_query($con, "INSERT INTO kategori(salary) VALUES('$salary')");
	mysqli_query($con, "INSERT INTO work(nama_work,id_salary) VALUES('$work','2')");
	mysqli_query($con, "INSERT INTO nama(nama_nama,id_work,id_salary) VALUES('$work','2','2')");


   

    header("Location: index.php");
?>