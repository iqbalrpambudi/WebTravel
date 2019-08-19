<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/template/header');?>
</head>

<body id="page-top">
	<?= var_dump($maxid)?>
	<?php $this->load->view('admin/template/navbar.php');?>
	<div id="wrapper">
		<!-- Sidebar -->
		<?php $this->load->view('admin/template/sidebar.php');?>

		<!-- Breadcrumbs-->
		<?php $this->load->view('admin/template/breadcrumbs.php');?>

		<!-- Slider -->
		<div class="card mb-3" style="background-color: #4ca2fd">
			<div class="card-header text-light bg-primary">
				<i class="fas fa-table"></i>
				Slider</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<div class="card card-color my-3 mx-auto w-auto" style="width: 18rem;">
							<div class="card-header text-center ">
								Slider 1
							</div>
							<img src="assets/image/borobudur.jpg" class="card-img-top">
							<div class="card-body">
								<form action="">
									<div class="form-group">
										<label for="judulslider1">Judul</label>
										<input type="text" class="form-control" id="judulslider1"
											placeholder="Judul Slider">
									</div>
									<div class="form-group">
										<label for="deskripsislider1">Deskripsi</label>
										<input type="text" class="form-control" id="deskripsislider1"
											placeholder="Deskripsi Slider">
									</div>
									<button type="submit" class="btn btn-success btn-block">Simpan</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-color my-3 mx-auto w-auto" style="width: 18rem;">
							<div class="card-header text-center">
								Slider 2
							</div>
							<img src="assets/image/borobudur.jpg" class="card-img-top">
							<div class="card-body">
								<form action="">
									<div class="form-group">
										<label for="judulslider2">Judul</label>
										<input type="text" class="form-control" id="judulslider2"
											placeholder="Judul Slider">
									</div>
									<div class="form-group">
										<label for="deskripsislider2">Deskripsi</label>
										<input type="text" class="form-control" id="deskripsislider2"
											placeholder="Deskripsi Slider">
									</div>
									<button type="submit" class="btn btn-success btn-block">Simpan</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-color my-3 mx-auto w-auto" style="width: 18rem;">
							<div class="card-header text-center">
								Slider 3
							</div>
							<img src="assets/image/borobudur.jpg" class="card-img-top">
							<div class="card-body">
								<form action="">
									<div class="form-group">
										<label for="judulslider3">Judul</label>
										<input type="text" class="form-control" id="judulslider3"
											placeholder="Judul Slider">
									</div>
									<div class="form-group">
										<label for="deskripsislider3">Deskripsi</label>
										<input type="text" class="form-control" id="deskripsislider3"
											placeholder="Deskripsi Slider">
									</div>
									<button type="submit" class="btn btn-success btn-block">Simpan</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-color my-3 mx-auto w-auto" style="width: 18rem;">
							<div class="card-header text-center">
								Slider 4
							</div>
							<img src="assets/image/borobudur.jpg" class="card-img-top">
							<div class="card-body">
								<form action="">
									<div class="form-group">
										<label for="judulslider4">Judul</label>
										<input type="text" class="form-control" id="judulslider4"
											placeholder="Judul Slider">
									</div>
									<div class="form-group">
										<label for="deskripsislider4">Deskripsi</label>
										<input type="text" class="form-control" id="deskripsislider4"
											placeholder="Deskripsi Slider">
									</div>
									<button type="submit" class="btn btn-success btn-block">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobil -->
		<div class="card mb-3" style="background-color: #ffd982">
			<div class="card-header text-dark bg-warning">
				<i class="fas fa-table"></i>Rental Mobil
				<a class="float-right ml-2" href="#" data-toggle="modal" data-target="#HapusMobilModal">
					<button class="btn btn-danger btn-responsive">Hapus Mobil</button>
				</a>
				<a class="float-right" href="#" data-toggle="modal" data-target="#TambahMobilModal">
					<button class="btn btn-success btn-responsive">Tambah Mobil</button>
				</a>
			</div>
			<div class="card-body">
				<div class="row">
					<?php foreach($mobil as $mbl):?>
					<div class="col-sm-4">
						<!-- Card start -->
						<div class="card card-color my-3 mx-auto">
							<img src="assets/image/mobil/avanza-hitam.png" class="card-img-top">
							<div class="card-body">
								<form action="">
									<div class="form-group">
										<label for="namamobil1">Nama Mobil</label>
										<input type="text" class="form-control" id="namamobil1"
											value="<?= $mbl['nama'] ?>">
									</div>
									<div class="form-group">
										<label for="hargamobil1">Harga Sewa</label>
										<input type="text" class="form-control" id="hargamobil1"
											value="<?= $mbl['harga'] ?>">
									</div>
									<div class="form-group">
										<label for="durasisewa1">Durasi Sewa</label>
										<input type="text" class="form-control" id="durasisewa1"
											value="<?= $mbl['durasi'] ?>">
									</div>
									<div class="form-group">
										<label for="jumlahpenumpang1">Jumlah Penumpang</label>
										<input type="text" class="form-control" id="jumlahpenumpang1"
											value="<?= $mbl['penumpang'] ?>">
									</div>
									<div class="form-group">
										<label for="fasilitas1">Fasilitas</label>
										<input type="text" class="form-control" id="fasilitas1"
											value="<?= $mbl['fasilitas'] ?>">
									</div>
									<div class="form-group">
										<label for="bonus1">Bonus</label>
										<input type="text" class="form-control" id="bonus1"
											value="<?= $mbl['bonus'] ?>">
									</div>
									<button type="submit" class="btn btn-success btn-block">Simpan</button>
								</form>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<?php endforeach?>
				</div>
			</div>
		</div>

	</div>

	<!-- Sticky Footer -->
	<footer class="sticky-footer">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Sukses Travelindo | Designed & Developed by Iqbal Pambudi (085655638843)</span>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Tambah Mobil Modal -->
	<div class="modal fade" id="TambahMobilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="admin/tambahmobil" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="id">ID</label>
							<input type="text" class="form-control" id="id" name="id" value="<?= $maxid['0']['id']+1?>"
								readonly>
						</div>
						<div class="form-group">
							<label for="namamobil">Nama Mobil</label>
							<input type="text" class="form-control" id="namamobil" name="nama">
						</div>
						<div class="form-group">
							<label for="hargamobil">Harga Sewa</label>
							<input type="text" class="form-control" id="hargamobil" name="harga">
						</div>
						<div class="form-group">
							<label for="durasisewa">Durasi Sewa</label>
							<input type="text" class="form-control" id="durasisewa" name="durasi">
						</div>
						<div class="form-group">
							<label for="jumlahpenumpang">Jumlah Penumpang</label>
							<input type="text" class="form-control" id="jumlahpenumpang" name="penumpang">
						</div>
						<div class="form-group">
							<label for="fasilitas">Fasilitas</label>
							<input type="text" class="form-control" id="fasilitas" name="fasilitas">
						</div>
						<div class="form-group">
							<label for="bonus">Bonus</label>
							<input type="text" class="form-control" id="bonus" name="bonus">
						</div>
						<button type="submit" class="btn btn-success btn-block">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view('admin/template/script');?>
	<?php $this->load->view('admin/template/footer');?>
