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
				<h3>Himpunan Mahasiswa Teknik Lingkungan Universitas Diponegoro</h3>
			</div>

			<div class="row">
				<div class="col-12 col-sm-4">
					<a href="/home/hmtl" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Himpunan Mahasiswa Teknik Lingkungan</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Himpunan Mahasiswa Teknik Lingkungan Universitas Diponegoro yang disingkat HMTL Undip merupakan organisasi mahasiswa yang dibentuk dan bernaung di Program Studi Teknik Lingkungan, Fakultas Teknik Universitas Diponegoro.</p>
					</a>
				</div> <!-- end col -->
				<div class="col-12 col-sm-4">
					<a href="/home/biro" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil-biro.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Biro Teknik Lingkungan</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Unit kerja yang mewadahi kegiatan mahasiswa di bidang minat (Ikatan Pecinta Alam), keilmuan (Kelompok Studi Lingkungan), dan keagamaan (Hayatun Nufus).</p>
					</a>
				</div> <!-- end col -->
				<div class="col-12 col-sm-4">
					<a href="/home/ukm" class="linkfil__card">
						<div class="img__linkfil">
							<div class="img__sec" style="background-image: url(/mainpage/images/jumbotron-profil-ukm.jpg);"></div>
						</div>
						<p class="mt-3 mb-2 title__linkfil">Unit Kegiatan Mahasiswa</p>
						<p style="font-size: 14px; color: rgba(0, 0, 0, .8);">Wadah penyaluran minat, bakat, dan kegemaran mahasiswa Teknik Lingkungan dalam bidang olahraga (futsal, voli, badminton, basket, dan e-sport) dan seni (saman, envoice, dan akustik).</p>
					</a>
				</div> <!-- end col -->
			</div> <!-- end rows -->
		</div> <!-- end bodyy section -->
	</div> <!-- end container -->
</div> <!-- end linkfil section -->

<?= $this->endSection(); ?>