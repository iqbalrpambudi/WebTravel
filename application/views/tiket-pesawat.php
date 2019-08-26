<div class="jumbotron" style="margin-top:50px;
    margin-bottom:0;
        height: 350px;
        background-image:url('assets/image/pesawat.jpeg');
        background-size: cover;
        background-position-y:center;">
	<div class="container">
		<h1 class="custom-display-4-2">Melayani Pemesanan Tiket Pesawat</h1>
		<p class="lead custom-lead">Pesan tiket pesawat dari berbagai macam maskapai penerbangan di Indonesia</p>
	</div>
</div>

<div class="container-fluid bg-white text-dark py-5 text-center">
	<h1 class="mx-auto display-4">Pilihan Maskapai</h1>
	<div class="row">
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/garuda-indonesia.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/lion-air.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/batik-air.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/citilink.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/air-asia.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/wings-air.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/merpati-air.png" alt="">
		</div>
		<div class="col-lg my-3">
			<img class="img-thumbnail" src="assets/image/sriwijaya-air.png" alt="">
		</div>
	</div>

</div>
<div class="container-fluid bg-info pb-5">
	<div class="row">
		<div class="col-lg-6 pt-5">
			<img src="assets/image/pesawat-garuda.png" class="img-fluid">
		</div>
		<div class="col-lg-6 text-light pt-5 text-center">
			<h2 class=display-4>
				Pesan Tiket Garuda Indonesia
			</h2>
			<h4 class="font-weight-light">
				Mulai dari <span class="bg-warning rounded text-dark px-2" style="font-size:2rem">Rp. 999.000</span>
			</h4>
			<button class="btn border-light text-light p-2 w-25 mx-auto my-4 ">Pesan </button>
		</div>
	</div>
</div>
<div class="container-fluid bg-danger pb-5">
	<div class="row">
		<div class="col-lg-6 pt-5">
			<img src="assets/image/airasia.png" class="img-fluid">
		</div>
		<div class="col-lg-6 text-light pt-5 text-center">
			<h2 class=display-4>
				Pesan Tiket Air Asia
			</h2>
			<h4 class="font-weight-light">
				Mulai dari <span class="bg-warning rounded text-dark px-2" style="font-size:2rem">Rp. 699.000</span>
			</h4>
			<button class="btn border-light text-light p-2 w-25 mx-auto my-4 ">Pesan </button>
		</div>
	</div>
</div>

<div class="container-fluid bg-success pb-5">
	<div class="row">
		<div class="col-lg-6 pt-5">
			<img src="assets/image/pesawat-citilink.png" class="img-fluid">
		</div>
		<div class="col-lg-6 text-light pt-5 text-center">
			<h2 class=display-4>
				Pesan Tiket Citilink
			</h2>
			<h4 class="font-weight-light">
				Mulai dari <span class="bg-warning rounded text-dark px-2" style="font-size:2rem">Rp. 599.000</span>
			</h4>
			<button class="btn border-light text-light p-2 w-25 mx-auto my-4 ">Pesan </button>
		</div>
	</div>
</div>
<div class="container-fluid mb-4">
	<div class="container bg-light"
		style="margin-top:-40px; border:1px solid green; border-radius:10px;box-shadow:0px 0px 7px rgba(0,0,0,0.5)">
		<!-- <h2 class="text-dark px-2 font-weight-normal text-center" style="margin-top:-40px;font-size:2.5rem">Tunggu apa lagi ?</h2> -->
		<div class="row p-3">
			<div class="col-lg-5 align-self-center text-center">
				<img class="img-fluid" src="assets/image/logo.png">
			</div>
			<div class="col-lg-7 text-dark pt-5 text-center">
				<h2 class=display-4>
					Pesan Sekarang Via WA
				</h2>
				<button class="btn bg-success text-light p-2 mx-auto my-4 "><i
						class="fab fa-2x fa-whatsapp mr-2 my-auto"></i><span
						style="font-size:1.5rem">Pesan</span></button>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-secondary">
	<div class="container text-light text-center pt-5">
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
<a href="https://api.whatsapp.com/send?phone=<?= $datas[0]['telp']?>&text=Halo%21%20saya%20mau%20order%20paket%20wisata."
	class="float" target="_blank">
	<i class="fab fa-whatsapp wa-float"></i>
</a>
