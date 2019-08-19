<div id="wrapper">
	<ul class="sidebar navbar-nav toggled" style="overflow: visible;width: 90px !important;">
		<li class="nav-item active">
			<a class="nav-link" href="<?= base_url()?>admin">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-fw fa-folder"></i>
				<span>Data</span>
			</a>
			<div class="dropdown-menu" aria-labelledby="pagesDropdown">
				<a class="dropdown-item" href="<?= base_url()?>admin/mobil">Data Mobil</a>
				<a class="dropdown-item" href="<?= base_url()?>admin/paket">Data Paket Wisata</a>
				<a class="dropdown-item" href="<?= base_url()?>admin/rohani">Data Paket Wisata Rohani</a>
				<a class="dropdown-item" href="<?= base_url()?>admin/lokasi">Data Tempat Wisata</a>
				<a class="dropdown-item" href="<?= base_url()?>admin/testimoni">Data Testimoni</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?= base_url()?>admin/other">Lain-lain</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-chart-area"></i>
				<span>Gambar</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-table"></i>
				<span>Lain-lain</span></a>
		</li>
	</ul>

	<div id="content-wrapper">
		<div class="container-fluid">
