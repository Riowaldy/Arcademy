<!DOCTYPE html>
<html>
<head>
	<title>Arkademy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		try {
			$con = mysqli_connect("localhost", "root", "", "arcademy");
		} catch (Exception $e) {
			die("Terjadi Kesalahan: ".$e->getMessage());
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="col-xs-12 col-md-12">
					<div class="panel panel-primary" style="margin-top: 20px;">
						<div class="panel-heading text-center">
							<h3 style="padding-bottom: 10px;">Arkademy</h3>
							<div class="pull-right" style="margin-top: -45px;"><button class="btn btn-warning" data-toggle="modal" data-target="#modal-simpan">Tambah Data</button></div>
						</div>
						<div class="panel-body">
							<div class="col-xs-12 col-md-12" style="margin-bottom: 20px;">
								<div class="col-xs-3 col-md-3 text-center">
									<b>Name</b>
								</div>
								<div class="col-xs-3 col-md-3 text-center">
									<b>Work</b>
								</div>
								<div class="col-xs-3 col-md-3 text-center">
									<b>Salary</b>
								</div>
							</div>
							<form action="" method="post">
								<?php
									$data = mysqli_query($con,"select nama.nama_nama as nama, work.nama_work as work, kategori.salary as salary from nama join work on work.id_work = nama.id_work join kategori on kategori.id_salary = work.id_salary");
									if (mysqli_num_rows($data)>0) {
										while($rows = mysqli_fetch_array($data)){
								?>
							<div class="col-xs-12 col-md-12">
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['nama']; ?>
								</div>
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['work']; ?>
								</div>
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['salary']; ?>
								</div>
							</div>
								<?php
										}
									}else{
								?>
							<div class="col-xs-12 col-md-12 text-center">
								Data Kosong
							</div>
								<?php
									}
								?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tambah-->
	<div class="modal fade" id="modal-simpan" role="dialog">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Tambah Data</h4>
				</div>
				<div class="modal-body">
					<div class="col-sm-12 col-md-12 text-center">
						<form action="tambah.php" method="post">
							<div class="panel panel-primary" style="margin-top: 10px; border: solid 0px;">
								<div class="panel-body">
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Nama</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="" class="form-control" name="nama">
										</div>
									</div>
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Work</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="" class="form-control" name="work">
										</div>
									</div>
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Salary</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="" class="form-control" name="salary">
										</div>
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="col-xs-4 col-md-4">
											
										</div>
										<div class="col-xs-8 col-md-8" style="margin-top: 10px;">
											<button type="submit" name="tombol-simpan" class="btn btn-primary btn-block">Tambah</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<!-- Akhir Modal Tambah-->
</body>
</html>