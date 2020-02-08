<?php
	$nama = $_POST['nama'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];

    include("koneksi.php");

    mysqli_query($con, "INSERT INTO kategori(salary) VALUES('$salary')");
    $data1 = mysqli_query($con,"select id_salary from kategori order by id_salary desc limit 1");
    $rows1 = mysqli_fetch_array($data1)[0];
    $datasalary = $rows1;

	mysqli_query($con, "INSERT INTO work(nama_work,id_salary) VALUES('$work','$datasalary')");
	$data2 = mysqli_query($con,"select id_work from work order by id_work desc limit 1");
    $rows2 = mysqli_fetch_array($data2)[0];
    $datawork = $rows2;

	mysqli_query($con, "INSERT INTO nama(nama_nama,id_work,id_salary) VALUES('$nama','$datawork','$datasalary')");

    header("Location: index.php");
?>