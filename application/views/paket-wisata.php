<!-- Paket Wisata -->
<div class="jumbotron jumbotron-fluid custom-jumbotron-paket">
	<div class="container">
		<h1 style="z-index:10;position:relative" class="display-4 text-light custom-display-4-paket text-center">Paket
			Wisata</h1>
		<p style="z-index:10;position:relative" class="lead text-light custom-lead-4-paket text-center">Temukan paket
			sesuai
			kebutuhanmu dan nikmati liburan tanpa panik, mulai dari paket wisata dalam negeri sampai paket wisata luar
			negeri</p>
	</div>
</div>

<!-- Paket Wisata -->
<div class="container">
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

<!-- Kontak -->
<div class="container-fluid bg-light">
	<div class="container text-dark text-center pt-5">
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
