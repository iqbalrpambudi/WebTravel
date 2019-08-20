<!-- Section heading -->
<div class="container-fluid bg-info text-light p-5 text-center">
	<h1 class="h1-responsive mx-auto display-4">Sahabat Kami</h1>
	<!-- Section description -->
	<p class="dark-grey-text w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
		eum porro a pariatur veniam.</p>

</div>

<div class="container" style="margin-top:70px">
	<section class="team-section text-center my-5">

		<div class="row text-center">
      <?php foreach($testimoni as $testi):?>
        <div class="col-md-3 mb-md-0 mb-5">

          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto">
              <img src="<?= base_url()?>assets/upload/<?= $testi['gambar']?>" class="rounded-circle z-depth-1 img-fluid">
            </div>
            <!--Content-->
            <h4 class="font-weight-bold dark-grey-text mt-4"><?= $testi['nama']?></h4>
            <p class="font-weight-normal dark-grey-text">
              <i class="fas fa-quote-left pr-2"></i><?= $testi['testimoni']?></p>
          </div>

        </div>
      <?php endforeach?>

		</div>
		<!--Grid row-->

	</section>
	<!-- Section: Testimonials v.3 -->
</div>
