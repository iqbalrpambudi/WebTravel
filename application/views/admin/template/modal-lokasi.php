
<!-- Tambah Lokasi Modal -->
<div class="modal fade" id="TambahLokasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Lokasi</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambahlokasi" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $maxid['0']['id']+1?>"
							readonly>
					</div>
					<div class="form-group">
						<label for="spotwisata">Spot Wisata</label>
						<input type="text" class="form-control" id="spotwisata" name="spot">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<input type="text" class="form-control" id="deskripsi" name="deskripsi">
					</div>
					<div class="form-group">
						<label for="namalokasi">Lokasi</label>
						<input type="text" class="form-control" id="namalokasi" name="nama">
					</div>
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="file" name="gambar" id="gambar"/>
					</div>
					<button type="submit" class="btn btn-success btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Edit Lokasi Modal -->
<?php foreach($lokasi as $lks):?>
	<div class="modal fade" id="EditLokasiModal<?= $lks['id']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data Lokasi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="updatelokasi/<?= $lks['id']?>" method="post">
						<div class="form-group">
							<label for="id">ID Lokasi</label>
							<input type="text" class="form-control" id="id" name="id" value="<?= $lks['id']?>" readonly>
						</div>
						<div class="form-group">
							<label for="nama<?= $lks['id']?>">Nama Lokasi</label>
							<input type="text" class="form-control" id="nama<?= $lks['id']?>" name="nama"
								value="<?= $lks['lokasi']?>">
						</div>
						<div class="form-group">
							<label for="deskripsi<?= $lks['id']?>">Deskripsi</label>
							<input type="text" class="form-control" id="deskripsi<?= $lks['id']?>" name="deskripsi"
								value="<?= $lks['deskripsi']?>">
						</div>
						<button type="submit" class="btn btn-success btn-block">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach?>

<!-- Hapus Lokasi Modal -->
<?php foreach($lokasi as $lks):?>
	<div class="modal fade" id="HapusLokasiModal<?= $lks['id']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hapus Data Lokasi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Yakin ingin menghapus <?= $lks['lokasi']?> ?
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?= base_url()?>admin/hapuslokasi/<?= $lks['id']?>">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php endforeach?>