<?php
    $id = $_POST['id'];

    include("koneksi.php");

    mysqli_query($con, "DELETE FROM kategori where id_salary = '$id'");

	mysqli_query($con, "DELETE FROM work where id_salary = '$id'");

	mysqli_query($con, "DELETE FROM nama where id_salary = '$id'");

    header("Location: index.php");
?>