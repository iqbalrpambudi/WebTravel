<div class="container-fluid p-0">
	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<!-- Carousel Item -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/image/borobudur.jpg" alt="First Slide">
			</div>
			<div class="carousel-item">
				<img src="assets/image/prambanan.jpg" alt="Second Slide">
			</div>
			<div class="carousel-item">
				<img src="assets/image/pantai.jpg" alt="Third Slide">
			</div>
			<div class="carousel-item">
				<img src="assets/image/traveller.jpg" alt="Fourth Slide">
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
	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid bg-success jumbotron-paket">
		<div class="col-lg-12 mx-auto">
			<div class="row info-panel text-light">
				<div class="col-lg text-center">
					<i class="fas fa-location-arrow fa-3x fa-fw mb-2 mr-2"></i>
					<h5>Jelajahi Banyak Tempat</h5>
					<p>Banyak tempat yang bisa kamu kunjungi</p>
				</div>
				<div class="col-lg text-center">
					<i class="fas fa-binoculars fa-3x fa-fw mb-2 mr-2"></i>
					<h5>Temukan Hal Baru</h5>
					<p>Tempat yang belum pernah kamu kunjungi</p>
				</div>
				<div class="col-lg text-center">
					<i class="far fa-smile-beam fa-3x fa-fw mb-2 mr-2"></i>
					<h5>Pengalaman Terbaik</h5>
					<p>Nikmati pengalaman yang tak terlupakan</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php foreach($distict as $lks):?>
		<div class="card w-100 my-3">
			<h5 class="card-header bg-primary text-white"><?= strtoupper($lks['lokasi'])?></h5>
			<div class="card-body bg-light">
				<div class="col-lg-12 mx-auto">
					<div class="row info-panel text-dark">
						<?php foreach($lokasi as $item):?>
							<?php if(strtolower($item['lokasi'])==strtolower($lks['lokasi'])):?>
								<div class="col-lg-4 text-center mb-4">
									<!-- Card Start -->
									<div class="card">
										<img class="card-img" src="<?= base_url()?>assets/upload/<?= $item['gambar']?>">
										<div class="card-body">
											<h4><?= $item['spot']?></h4>
											<p><?= $item['deskripsi']?></p>
										</div>
									</div>
									<!-- Card End -->
								</div>
							<?php endif?>
						<?php endforeach?>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach?>
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
