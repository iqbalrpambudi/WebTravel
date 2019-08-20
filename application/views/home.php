<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	</ol>
	<!-- Carousel Item -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/image/borobudur.jpg" alt="Third SLide">
			<div class="carousel-caption">
				<h3 class="txtshadow display-4">Borobudur</h3>
				<p>Wisata sejarah populer di Magelang</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="assets/image/prambanan.jpg" alt="Third SLide">
			<div class="carousel-caption">
				<h3 class="txtshadow display-4">Prambanan</h3>
				<p>Nikmati wisata pantai legendaris di jogja</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="assets/image/pantai.jpg" alt="Third SLide">
			<div class="carousel-caption">
				<h3 class="txtshadow display-4">Pantai</h3>
				<p>Wisata Populer dan ikonik di jogja yang berada di tengah kota</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="assets/image/bali.jpg" alt="Third SLide">
			<div class="carousel-caption">
				<h3 class="txtshadow display-4">Bali</h3>
				<p>Temukan paket wisata sesuai keinginanmu hanya di Sukses Travelindo</p>
			</div>
		</div>
	</div>


	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- Info Layanan -->
<div class="container-fluid">
	<div class="row justify-content-center py-3 bg-primary text-light">
		<div class="col-lg-9">
			<div class="row info-panel">
				<div class="col-lg">
					<i class="fas fa-car-alt fa-5x float-left fa-fw mb-2 mr-2"></i>
					<h4>Banyak Pilihan</h4>
					<p>Tersedia Berbagai macam paket wisata</p>
				</div>
				<div class="col-lg">
					<i class="fas fa-user-friends fa-5x float-left fa-fw mb-2 mr-2"></i>
					<h4>Sopir Terbaik</h4>
					<p>Sopir berpengalaman dan profesional</p>
				</div>
				<div class="col-lg">
					<i class="fas fa-clipboard-check fa-5x float-left fa-fw mb-2 mr-2"></i>
					<h4>Layanan Terbaik</h4>
					<p>Kami mengutamakan layanan yang prima dan kualitas terbaik</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Jumbotron  -->
<div class="jumbotron jumbotron-fluid bg-img">
	<div class="container">
		<h1 class="display-4 custom-display-4">Gausah Panik Kalo Mau Piknik</h1>
		<p class="custom-lead lead">Pesan sekarang dan nikmati liburanmu tanpa repot</p>
	</div>
</div>

<!-- Rental Mobil -->
<div class="container-fluid bg-light pb-5">
	<div class="row py-5 justify-content-center">
		<h2 style="font-family: 'Raleway', sans-serif;">PILIHAN MOBIL</h2>
	</div>
	<!-- Paket Mobil -->
	<div class="col-lg-9 mx-auto">
		<div class="row">
			<?php foreach($mobil as $mbl):?>
			<div class="col-lg">

				<!-- Card start -->
				<div class="card card-color my-3 mx-auto" style="width: 18rem;">
					<div class="card-header bg-primary text-light">
						<h4 class="mx-auto"><?= $mbl['nama']?></h4>
					</div>
					<img src="<?= base_url()?>assets/upload/<?= $mbl['gambar']?>" class="card-img-top">
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<h3 class="mx-auto bg-success text-light p-2 rounded">Rp.<?= number_format($mbl['harga'],0,'','.');?></h3>
							<li class="list-group-item bg-transparent"><i
									class="far fa-clock mr-2 fa-fw"></i><?= $mbl['durasi']?> Jam</li>
							<li class="list-group-item bg-transparent"><i
									class="fas fa-shopping-cart mr-2 fa-fw"></i><?= $mbl['penumpang']?> Orang</li>
							<li class="list-group-item bg-transparent"><i
									class="fas fa-clipboard-check mr-2 fa-fw"></i><?= $mbl['fasilitas']?></li>
							<li class="list-group-item bg-transparent"><i
									class="fas fa-plus-circle mr-2 fa-fw"></i><?= $mbl['bonus']?>
							</li>
						</ul>
					</div>
				</div>
				<!-- Card End -->
			</div>
			<?php endforeach?>
		</div>
	</div>
</div>
<!-- Paket Wisata -->
<div class="container-fluid bg-bgr pt-3">
	<ul class="nav nav-pills mb-3 zindex" id="pills-tab" role="tablist">
		<?php $j=0;foreach($distict as $lks):?>
		<?php $properti="active";$aria="true";if($j>=1) {$properti="";$aria="false";}?>
		<li class="nav-item">
			<a class="nav-link <?= $properti?>" id="pills-<?= $loc=str_replace(' ', '-', $lks['lokasi']);?>-tab" data-toggle="pill"
				href="#paket-<?= $loc=str_replace(' ', '-', $lks['lokasi']);?>" role="tab" aria-controls="pills-<?= $loc=str_replace(' ', '-', $lks['lokasi']);?>"
				aria-selected="<?= $aria?>">Paket <?= strtoupper($lks['lokasi'])?></a>
		</li>
		<?php $j++?>
		<?php endforeach?>
	</ul>
	<!-- Item Tab -->
	<div class="tab-content" id="pills-tabContent">
		<?php $i=0; foreach($lokasi as $lks):?>
			<?php $property="show active";if($i>=1) $property=""?>
				<div class="tab-pane fade <?= $property?>" id="paket-<?= $loc=str_replace(' ', '-', $lks['lokasi']);?>" role="tabpanel"
					aria-labelledby="pills-<?= $loc=str_replace(' ', '-', $lks['lokasi']);?>-tab">
					<div class="row justify-content-center">
						<div class="col-lg-9">
							<div class="row">
								<?php foreach($paket as $pkt):?>
								<?php if(strtolower($pkt['lokasi'])==strtolower($lks['lokasi'])):?>
								<div class="col-lg">
									<div class="card mx-auto mb-5 bg-light" style="width: 18rem;">
										<img src="<?= base_url()?>assets/upload/<?= $pkt['gambar']?>" class="card-img-top img-padding"
											alt="Paket Prambanan">
										<div class="card-body">
											<h5 class="card-title"><?= $pkt['paket']?></h5>
											<p class="card-text"><?= $pkt['deskripsi']?></p>
										</div>
										<ul class="list-group list-group-flush">
											<li class="list-group-item text-light bg-danger text-center">
												<h3>Rp.<?= number_format($pkt['harga'],0,'','.');?></h3>
											</li>
											<li class="list-group-item"><i class="fas fa-car-side mr-2 fa-fw"></i><?= $pkt['fasilitas']?>
											</li>
										</ul>
										<div class="card-footer border-top-0">
											<a href="#" class="btn btn-success mt-2 btn-block">Order</a>
										</div>
									</div>
								</div>
								<?php endif?>
								<?php endforeach?>
							</div>
						</div>
					</div>
				</div>
			<?php $i++?>
		<?php endforeach?>
	</div>
</div>

<!-- Testimoni -->
<div class="container-fluid bg-white">
	<div class="row pt-5 justify-content-center text-dark">
		<h2 style="font-family: 'Raleway', sans-serif;">TESTIMONI</h2>
	</div>
	<div class="row mx-auto justify-content-center">
		<div class="col-lg-9 my-4">
			<div class="row">
				<?php foreach($testimoni as $testi):?>
					<div class="col-lg">
						<div class="card mx-auto my-3 bg-light" style="width: 18rem;">
							<img class="card-img-top" src="<?= base_url()?>assets/upload/<?= $testi['gambar']?>" alt="Card image cap">
							<div class="card-body">
								<h6 class="font-weight-bold blue-text my-3"><?= $testi['nama']?></h6>
								<p class="card-text"><i class="fas fa-quote-left pr-2"></i> <?= $testi['testimoni']?></p>
							</div>
						</div>
					</div>
				<?php endforeach?>
			</div>
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
