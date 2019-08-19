<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url()?>admin">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Data Paket</li>
</ol>

<!-- Error Message -->
	<?php if($error===4):?>
	<div class="alert alert-danger" role="alert">
		Gambar Belum diupload!
	</div>
	<?php endif?>
	<?php if($error===5):?>
	<div class="alert alert-danger" role="alert">
		Yang anda upload bukan gambar!
	</div>
	<?php endif?>
	<?php if($error===6):?>
	<div class="alert alert-danger" role="alert">
		Ukuran gambar terlalu besar! Max 2MB
	</div>
	<?php endif?>

<div class="row">
	<?php foreach($paket as $pkt):?>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card bg-light">
			<img src="<?= base_url()?>assets/upload/<?= $pkt['gambar']?>" class="card-img-top">
			<div class="card-body">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-transparent">Nama :       <span
							class=" bg-info rounded text-light p-1"><?= $pkt['paket']?></span></li>
					<li class="list-group-item bg-transparent">Harga : Rp.  <span
							class="text-info"><?= $pkt['harga']?></span></li>
					<li class="list-group-item bg-transparent">Deskripsi : <span
							class="text-info"><?= $pkt['deskripsi']?></span></li>
					<li class="list-group-item bg-transparent">Lokasi : <span
							class="text-info"><?= $pkt['lokasi']?></span></li>
					<li class="list-group-item bg-transparent">Fasilitas : <span
							class="text-info"><?= $pkt['fasilitas']?></span></li>
				</ul>
			</div>
			<div class="card-footer text-right">
				<a class="float-right ml-2" href="" data-toggle="modal" data-target="#HapusPaketModal<?= $pkt['id']?>">
					<button class="btn btn-danger">Hapus</button>
				</a>
				<a class="float-right ml-2" href="" data-toggle="modal" data-target="#EditPaketModal<?= $pkt['id']?>">
					<button class="btn btn-success">Edit</button>
				</a>
			</div>
		</div>
	</div>
	<?php endforeach?>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card bg-light text-dark o-hidden">
			<i class="fas fa-fw fa-plus fa-5x mx-auto my-3"></i>
			<div class="card-body-icon">
				<i class="fas fa-fw fa-box"></i>
			</div>
			<div class="card-footer text-right">
				<button data-toggle="modal" data-target="#TambahPaketModal" class="btn btn-success btn-block">Tambah
					Paket</button>
			</div>
		</div>
	</div>
</div>
