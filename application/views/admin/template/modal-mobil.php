<!-- Tambah Mobil Modal -->
<div class="modal fade" id="TambahMobilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambahmobil" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $maxid['0']['id']+1?>"
							readonly>
					</div>
					<div class="form-group">
						<label for="namamobil">Nama Mobil</label>
						<input type="text" class="form-control" id="namamobil" name="nama">
					</div>
					<div class="form-group">
						<label for="hargamobil">Harga Sewa</label>
						<input type="text" class="form-control" id="hargamobil" name="harga">
					</div>
					<div class="form-group">
						<label for="durasisewa">Durasi Sewa</label>
						<input type="text" class="form-control" id="durasisewa" name="durasi">
					</div>
					<div class="form-group">
						<label for="jumlahpenumpang">Jumlah Penumpang</label>
						<input type="text" class="form-control" id="jumlahpenumpang" name="penumpang">
					</div>
					<div class="form-group">
						<label for="fasilitas">Fasilitas</label>
						<input type="text" class="form-control" id="fasilitas" name="fasilitas">
					</div>
					<div class="form-group">
						<label for="bonus">Bonus</label>
						<input type="text" class="form-control" id="bonus" name="bonus">
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

<!-- Edit Mobil Modal -->
<?php foreach($mobil as $mbl):?>
	<div class="modal fade" id="EditMobilModal<?= $mbl['id']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data Mobil</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="updatemobil/<?= $mbl['id']?>" method="post">
						<div class="form-group">
							<label for="id">ID Mobil</label>
							<input type="text" class="form-control" id="id" name="id" value="<?= $mbl['id']?>" readonly>
						</div>
						<div class="form-group">
							<label for="nama<?= $mbl['id']?>">Nama Mobil</label>
							<input type="text" class="form-control" id="nama<?= $mbl['id']?>" name="nama"
								value="<?= $mbl['nama']?>">
						</div>
						<div class="form-group">
							<label for="harga<?= $mbl['id']?>">Harga Sewa</label>
							<input type="text" class="form-control" id="harga<?= $mbl['id']?>" name="harga"
								value="<?= $mbl['harga']?>">
						</div>
						<div class="form-group">
							<label for="durasi<?= $mbl['id']?>">Durasi Sewa</label>
							<input type="text" class="form-control" id="durasi<?= $mbl['id']?>" name="durasi"
								value="<?= $mbl['durasi']?>">
						</div>
						<div class="form-group">
							<label for="penumpang<?= $mbl['id']?>">Jumlah Penumpang</label>
							<input type="text" class="form-control" id="penumpang<?= $mbl['id']?>" name="penumpang"
								value="<?= $mbl['penumpang']?>">
						</div>
						<div class="form-group">
							<label for="fasilitas<?= $mbl['id']?>">Fasilitas</label>
							<input type="text" class="form-control" id="fasilitas<?= $mbl['id']?>" name="fasilitas"
								value="<?= $mbl['fasilitas']?>">
						</div>
						<div class="form-group">
							<label for="bonus<?= $mbl['id']?>">Bonus</label>
							<input type="text" class="form-control" id="bonus<?= $mbl['id']?>" name="bonus"
								value="<?= $mbl['bonus']?>">
						</div>
						<button type="submit" class="btn btn-success btn-block">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach?>

<!-- Hapus Mobil Modal -->
<?php foreach($mobil as $mbl):?>
	<div class="modal fade" id="HapusMobilModal<?= $mbl['id']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hapus Data Mobil</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Yakin ingin menghapus <?= $mbl['nama']?> ?
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?= base_url()?>admin/hapusmobil/<?= $mbl['id']?>">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php endforeach?>