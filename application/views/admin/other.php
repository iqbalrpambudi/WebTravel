<div class="row mt-3 ml-3">
	<div class="col-md-6">
		<?php foreach($datas as $item):?>
		<form action="ubahdata" method="post">
			<div class="form-group">
				<label for="telp">Telp/Whatsapp</label>
				<input type="text" class="form-control" id="telp" name="telp" value="<?= $item['telp']?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $item['alamat']?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" value="<?= $item['email']?>">
			</div>
			<div class="form-group">
				<label for="Website">Website</label>
				<input type="text" class="form-control" id="Website" name="website" value="<?= $item['website']?>">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php endforeach?>
	</div>
</div>
