<!-- Tambah Paket Modal -->
<div class="modal fade" id="TambahTestimoniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Testimoni</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambahtestimoni" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $maxid['0']['id']+1?>"
							readonly>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="testimoni">Testimoni</label>
						<input type="text" class="form-control" id="testimoni" name="testimoni">
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


<!-- Edit Testimoni Modal -->
<?php foreach($testimoni as $pkt):?>
<div class="modal fade" id="EditTestimoniModal<?= $pkt['id']?>" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Testimoni</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="updatetestimoni/<?= $pkt['id']?>" method="post">
					<div class="form-group">
						<label for="id">ID Testimoni</label>
						<input type="text" class="form-control" id="id" name="id" value="<?= $pkt['id']?>" readonly>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="paket" name="nama" value="<?= $pkt['nama']?>">
					</div>
					<div class="form-group">
						<label for="testimoni">Testimoni</label>
						<input type="text" class="form-control" id="testimoni" name="testimoni" value="<?= $pkt['testimoni']?>">
					</div>
					<button type="submit" class="btn btn-success btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php endforeach?>

<!-- Hapus Testimoni Modal -->
<?php foreach($testimoni as $pkt):?>
<div class="modal fade" id="HapusTestimoniModal<?= $pkt['id']?>" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hapus Testimoni</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				Yakin ingin menghapus <?= $pkt['nama']?> ?
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?= base_url()?>admin/hapustestimoni/<?= $pkt['id']?>">Hapus</a>
			</div>
		</div>
	</div>
</div>
<?php endforeach?>
