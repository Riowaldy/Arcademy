<?php
	$nama = $_POST['nama'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];
    $id = $_POST['id'];

    include("koneksi.php");

    mysqli_query($con, "UPDATE kategori SET salary = '$salary' where id_salary = '$id'");

	mysqli_query($con, "UPDATE work SET nama_work = '$work' where id_salary = '$id'");

	mysqli_query($con, "UPDATE nama SET nama_nama = '$nama' where id_salary = '$id'");

    header("Location: index.php");
?>