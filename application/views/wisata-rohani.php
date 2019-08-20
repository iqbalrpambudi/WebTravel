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
				<img src="assets/image/gereja.jpg" alt="First Slide">
			</div>
			<div class="carousel-item">
				<img src="assets/image/wisata-religi-1.jpg" alt="Second Slide">
			</div>
			<div class="carousel-item">
				<img src="assets/image/taman-wisata-iman.jpg" alt="Third Slide">
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
	<div class="jumbotron jumbotron-fluid bg-info">
		<div class="container text-light">
			<h1 class="display-4">Paket Wisata Rohani Umat Katolik</h1>
			<p class="lead">Pesan paket wisata rohani umat katolik disini. Selain dapat merefresh otak dan pikiran anda,
				juga bisa memenuhi kebutuhan rohani Anda. Batin menjadi tenang, kadar keimanan pun makin bertambah.</p>
		</div>
	</div>
</div>

<div class="container">
	<!-- Wisata -->
	<div class="card w-100 my-3">
		<h5 class="card-header bg-success text-white">Pilihan Paket Wisata Rohani</h5>
		<div class="card-body bg-light">
			<div class="row text-dark">
				<?php foreach($rohani as $rhn):?>
					<div class="col-lg-4 text-center mb-4">
					<div class="card bg-light text-dark w-auto" style="width: 18rem;">
						<img src="assets/image/gereja.jpg" class="card-img-top img-padding" alt="Paket Wisata Religi">
						<div class="card-body">
							<h5 class="card-title"><?= $rhn['nama']?></h5>
							<p class="card-text"><?= $rhn['deskripsi']?></p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-light bg-primary text-center">
								<h3>Rp.<?= number_format($rhn['harga'],0,'','.');?></h3>
							</li>
							<li class="list-group-item text-dark"><i class="fas fa-plus-circle mr-2 fa-fw"></i><?= $rhn['fasilitas']?></li>
						</ul>
						<div class="card-footer border-top-0">
							<a href="#" class="btn btn-success mt-2 btn-block">Order</a>
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