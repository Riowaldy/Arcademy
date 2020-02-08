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
								<div class="col-xs-3 col-md-3 text-center">
									<b>Aksi</b>
								</div>
							</div>
								<?php
									$data = mysqli_query($con,"select nama.nama_nama as nama, work.nama_work as work, kategori.salary as salary, kategori.id_salary as id from nama join work on work.id_work = nama.id_work join kategori on kategori.id_salary = work.id_salary");
									if (mysqli_num_rows($data)>0) {
										while($rows = mysqli_fetch_array($data)){
								?>
							<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['nama']; ?>
								</div>
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['work']; ?>
								</div>
								<div class="col-xs-3 col-md-3">
									<?php echo $rows['salary']; ?>
								</div>
								<div class="col-xs-3 col-md-3 text-center">
									<button class="btn btn-sm btn-warning" data-id="<?php echo $rows['id']; ?>" data-nama="<?php echo $rows['nama']; ?>" data-work="<?php echo $rows['work']; ?>" data-salary="<?php echo $rows['salary']; ?>" data-toggle="modal" data-target="#modal-ubah">Ubah</button>
									<button class="btn btn-sm btn-danger" data-id="<?php echo $rows['id']; ?>" data-toggle="modal" data-target="#modal-hapus">Hapus</button>
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
											<button type="submit" name="tombol-simpan" class="btn btn-warning btn-block">Simpan</button>
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

	<!-- Modal Ubah-->
	<div class="modal fade" id="modal-ubah" role="dialog">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Ubah Data</h4>
				</div>
				<div class="modal-body">
					<div class="col-sm-12 col-md-12 text-center">
						<form action="ubah.php" method="post">
							<div class="panel panel-primary" style="margin-top: 10px; border: solid 0px;">
								<div class="panel-body">
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Nama</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="text" class="form-control" name="nama" id="nama" value="">
										</div>
									</div>
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Work</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="text" class="form-control" name="work" id="work" value="">
										</div>
									</div>
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-4 col-md-4">
											<h5>Salary</h5>
										</div>
										<div class="col-xs-8 col-md-8">
											<input type="text" class="form-control" name="salary" id="salary" value="">
											<input type="hidden" class="form-control" name="id" id="id" value="">
										</div>
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="col-xs-4 col-md-4">
											
										</div>
										<div class="col-xs-8 col-md-8" style="margin-top: 10px;">
											<button type="submit" name="tombol-simpan" class="btn btn-warning btn-block">Ubah</button>
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
	<!-- Akhir Modal Ubah-->

	<!-- Modal Hapus-->
	<div class="modal fade" id="modal-hapus" role="dialog">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Hapus Data</h4>
				</div>
				<div class="modal-body">
					<div class="col-sm-12 col-md-12 text-center">
						<form action="hapus.php" method="post">
							<div class="panel panel-primary" style="margin-top: 10px; border: solid 0px;">
								<div class="panel-body">
									<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
										<div class="col-xs-12 col-md-12">
											<h5>Yakin Menghapus Data?</h5>
										</div>
										<div class="col-xs-12 col-md12">
											<input type="hidden" class="form-control" name="id" id="id" value="">
										</div>
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="col-xs-12 col-md-12" style="margin-top: 10px;">
											<button type="submit" name="tombol-hapus" class="btn btn-danger btn-block">Hapus</button>
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
	<!-- Akhir Modal Hapus-->
	<script>
		$('#modal-ubah').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var id = button.data('id') 
          var nama = button.data('nama') 
          var work = button.data('work')
          var salary = button.data('salary')
          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #nama').val(nama);
          modal.find('.modal-body #work').val(work);
          modal.find('.modal-body #salary').val(salary);
        })

        $('#modal-hapus').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var modal = $(this)
          modal.find('.modal-body #id').val(id);
        })
	</script>
</body>
</html>