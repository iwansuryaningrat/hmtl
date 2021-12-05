<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>


<!-- header -->
<!-- FINISH -->
<header class="headers" style="background-image: url(/mainpage/images/jumbotron-profil.jpg);">
	<div class="container">
		<div class="body__section text-center">
			<h2>PROFIL</h2>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->

<!-- link profil section -->
<div class="linkfil__section">
	<div class="container">
		<div class="body__section">
			<div class="title__section text-center">
				<h3>Lorem, ipsum dolor, sit amet consectetur adipisicing elit.</h3>
			</div>

			<div class="row">
				<div class="col-12 col-sm-4">
					<a href="profil-hmtl.html" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Himpunan Mahasiswa Teknik Lingkungan</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Lorem ipsum dolor sit amet
							consectetur, adipisicing elit. Sit corporis quaerat perferendis.</p>
					</a>
				</div> <!-- end col -->
				<div class="col-12 col-sm-4">
					<a href="profil-biro.html" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil-biro.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Biro Teknik Lingkungan</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Lorem ipsum dolor sit amet
							consectetur, adipisicing elit. Sit corporis quaerat perferendis.</p>
					</a>
				</div> <!-- end col -->
				<div class="col-12 col-sm-4">
					<a href="profil-ukm.html" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil-ukm.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Unit Kegiatan Mahasiswa</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Lorem ipsum dolor sit amet
							consectetur, adipisicing elit. Sit corporis quaerat perferendis.</p>
					</a>
				</div> <!-- end col -->
			</div> <!-- end rows -->
		</div> <!-- end bodyy section -->
	</div> <!-- end container -->
</div> <!-- end linkfil section -->

<?= $this->endSection(); ?>