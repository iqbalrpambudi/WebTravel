<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img class="img-responsive" src="assets/image/logo.png" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"><i class="fas fa-box mr-2"></i>
						Paket
					</a>
					<div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo base_url()?>paket">Paket Wisata</a>
						<a class="dropdown-item" href="<?php echo base_url()?>rohani">Paket Wisata Rohani</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>rental"><i class="fas fa-car-side mr-2"></i>Rental Mobil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>wisata"><i class="fas fa-mountain mr-2"></i>

Tempat Wisata</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>sahabat"><i class="fas fa-users mr-2"></i>Sahabat</a>
				</li>
				<li class="nav-item">
					<a href="#"><button type="button" class="btn btn-info"><i class="fa fa-phone mr-2" aria-hidden="true"></i><b>Kontak Kami</b></button></a>
				</li>

			</ul>
		</div>
	</div>
</nav>
