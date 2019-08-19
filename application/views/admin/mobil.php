<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url()?>admin">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Data Mobil</li>
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
	<?php foreach($mobil as $mbl):?>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card bg-light">
			<img src="<?= base_url()?>assets/upload/<?= $mbl['gambar']?>" class="card-img-top">
			<div class="card-body">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-transparent">Nama : <span
							class=" bg-info rounded text-light p-1"><?= $mbl['nama']?></span></li>
					<li class="list-group-item bg-transparent">Harga Sewa : Rp. <span
							class="text-info"><?= $mbl['harga']?></span></li>
					<li class="list-group-item bg-transparent">Durasi : <span
							class="text-info"><?= $mbl['durasi']?></span> Jam</li>
					<li class="list-group-item bg-transparent">Penumpang : <span
							class="text-info"><?= $mbl['penumpang']?></span> Orang</li>
					<li class="list-group-item bg-transparent">Fasilitas : <span
							class="text-info"><?= $mbl['fasilitas']?></span></li>
					<li class="list-group-item bg-transparent">Bonus : <span
							class="text-info"><?= $mbl['bonus']?></span></li>
				</ul>
			</div>
			<div class="card-footer text-right">
				<a class="float-right ml-2" href="" data-toggle="modal" data-target="#HapusMobilModal<?= $mbl['id']?>">
					<button class="btn btn-danger">Hapus</button>
				</a>
				<a class="float-right ml-2" href="" data-toggle="modal" data-target="#EditMobilModal<?= $mbl['id']?>">
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
				<i class="fas fa-fw fa-car"></i>
			</div>
			<div class="card-footer text-right">
				<button data-toggle="modal" data-target="#TambahMobilModal" class="btn btn-success btn-block">Tambah
					Mobil</button>
			</div>
		</div>
	</div>
</div>
