<div class="jumbotron bg-mobil mt-cus-rental" style="margin-top:50px">
	<div class="container">
		<h1 class="display-4 text-right" style="z-index:10;position:relative">Rental Mobil</h1>
		<p class="lead text-right" style="z-index:10;position:relative">Tersedia berbagai macam pilihan mobil</p>
	</div>
</div>

<div class="container mt--">
	<div class="jumbotron jumbotron-fluid bg-info jumbotron-paket rounded">
		<div class="col-lg-12 mx-auto">
			<div class="row info-panel text-light">
				<div class="col-lg">
					<i class="fas fa-car-alt fa-4x float-left fa-fw mb-5 mr-2"></i>
					<h4>Banyak Pilihan</h4>
					<p>Tersedia Berbagai macam paket wisata</p>
				</div>
				<div class="col-lg">
					<i class="fas fa-dollar-sign fa-4x float-left fa-fw mb-5 mr-2"></i>
					<h4>Harga Bersahabat</h4>
					<p>Harga bersahabat dan dengan pelayanan terbaik</p>
				</div>
				<div class="col-lg">
					<i class="fas fa-clipboard-check fa-4x float-left fa-fw mb-5 mr-2"></i>
					<h4>Layanan Terbaik</h4>
					<p>Kami mengutamakan layanan yang prima dan kualitas terbaik</p>
				</div>
			</div>
		</div>
	</div>


	<!-- Paket Mobil -->
	<div class="col-lg-12 mx-auto">
		<div class="row">
			<?php foreach($mobil as $mbl):?>
			<div class="col-lg">
				<div class="card card-color my-3 mx-auto" style="width: 18rem;">
					<div class="card-header bg-primary text-light">
						<h4 class="mx-auto"><?= $mbl['nama']?></h4>
					</div>
					<img src="<?= base_url()?>assets/upload/<?= $mbl['gambar']?>" class="card-img-top">
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<h3 class="mx-auto bg-success text-light p-2 rounded">Rp.<?= number_format($mbl['harga'],0,'','.');?></h3>
							<li class="list-group-item bg-transparent"><i class="far fa-clock mr-2 fa-fw"></i><?= $mbl['durasi']?> Jam</li>
							<li class="list-group-item bg-transparent"><i class="fas fa-shopping-cart mr-2 fa-fw"></i><?= $mbl['penumpang']?> Orang</li>
							<li class="list-group-item bg-transparent"><i class="fas fa-clipboard-check mr-2 fa-fw"></i><?= $mbl['fasilitas']?></li>
							<li class="list-group-item bg-transparent"><i class="fas fa-plus-circle mr-2 fa-fw"></i><?= $mbl['bonus']?></li>
						</ul>
					</div>
				</div>
			</div>
			<?php endforeach?>
		</div>
	</div>

</div>
<!-- Kontak -->
<div class="container-fluid bg-secondary">
	<div class="container text-light text-center pt-5">
		<h4 style="font-family: 'Raleway', sans-serif;">Hubungi kami</h4>
		<div class="row">
			<div class="col-sm-3 my-4">
				<i class="fab fa-whatsapp fa-3x"></i>
				<h5>Whatsapp</h5>
				<p><?= $datas[0]['telp']?></p>
			</div>
			<div class="col-sm-3 my-4">
				<i class="fas fa-home fa-3x"></i>
				<h5>Alamat</h5>
				<p><?= $datas[0]['alamat']?></p>
			</div>
			<div class="col-sm-3 my-4">
				<i class="far fa-envelope fa-3x"></i>
				<h5>Email</h5>
				<p><?= $datas[0]['email']?></p>
			</div>
			<div class="col-sm-3 my-4">
				<i class="fas fa-globe fa-3x"></i>
				<h5>Website</h5>
				<p><?= $datas[0]['website']?></p>
			</div>
		</div>
	</div>
</div>

<!-- Whatsapp Floating Icon -->
<a href="https://api.whatsapp.com/send?phone=<?= $datas[0]['telp']?>&text=Halo%21%20saya%20mau%20order%20paket%20wisata." class="float"
	target="_blank">
	<i class="fab fa-whatsapp wa-float"></i>
</a>
