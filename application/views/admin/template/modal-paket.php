<!-- Tambah Paket Modal -->
<div class="modal fade" id="TambahPaketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Paket</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambahpaket" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $maxid['0']['id']+1?>"
							readonly>
					</div>
					<div class="form-group">
						<label for="paket">Nama Paket</label>
						<input type="text" class="form-control" id="paket" name="paket">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<input type="text" class="form-control" id="deskripsi" name="deskripsi">
					</div>
					<div class="form-group">
						<label for="lokasi">Lokasi</label>
						<input type="text" class="form-control" id="lokasi" name="lokasi">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="se" class="form-control" id="harga" name="harga">
					</div>
					<div class="form-group">
						<label for="fasilitas">Fasilitas</label>
						<input type="text" class="form-control" id="fasilitas" name="fasilitas">
					</div>
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="file" name="gambar" id="gambar" />
					</div>
					<button type="submit" class="btn btn-success btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Edit paket Modal -->
<?php foreach($paket as $pkt):?>
<div class="modal fade" id="EditPaketModal<?= $pkt['id']?>" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data paket</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="updatepaket/<?= $pkt['id']?>" method="post">
					<div class="form-group">
						<label for="id">ID paket</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $pkt['id']?>" readonly>
					</div>
					<div class="form-group">
						<label for="paket">Nama Paket</label>
						<input type="text" class="form-control" id="paket" name="paket" value="<?= $pkt['paket']?>">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $pkt['deskripsi']?>">
					</div>
					<div class="form-group">
						<label for="lokasi">Lokasi</label>
						<input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $pkt['lokasi']?>">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="se" class="form-control" id="harga" name="harga" value="<?= $pkt['harga']?>">
					</div>
					<div class="form-group">
						<label for="fasilitas">Fasilitas</label>
						<input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?= $pkt['fasilitas']?>">
					</div>
					<button type="submit" class="btn btn-success btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php endforeach?>

<!-- Hapus paket Modal -->
<?php foreach($paket as $pkt):?>
<div class="modal fade" id="HapusPaketModal<?= $pkt['id']?>" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hapus Data paket</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				Yakin ingin menghapus <?= $pkt['paket']?> ?
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?= base_url()?>admin/hapuspaket/<?= $pkt['id']?>">Hapus</a>
			</div>
		</div>
	</div>
</div>
<?php endforeach?>
