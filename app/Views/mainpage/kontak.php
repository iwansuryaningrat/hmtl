<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="headers">
	<div class="container">
		<div class="body__section text-center">
			<h2>KONTAK</h2>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->


<!-- help section -->
<!-- FINISH -->
<div class="help__section">
	<div class="container">
		<div class="body__section">
			<!-- head card -->
			<div class="head__card text-center">
				<p class="title__card">How can we help you?</p>
				<p>Pilih cara di bawah ini untuk menghubungi kami dan dapatkan apa yang anda butuhkan</p>
			</div> <!-- end head card -->

			<!-- content card -->
			<div class="content__card">
				<!-- body card -->
				<div class="body__card">
					<span class="fi-br-marker"></span>
					<h5>Visit Our Location</h5>
					<p>Gedung Kuliah Bersama (GKB) Lantai 3, Fakultas Teknik - Universitas Diponegoro</p>
				</div> <!-- end body card -->
				<!-- body card -->
				<div class="body__card">
					<span class="fi-br-microphone"></span>
					<h5>Call Us</h5>
					<p>+62 812-2918-4480 (Faiza)<br>+62 823-1497-2274 (Humas)</p>
				</div> <!-- end body card -->
				<!-- body card -->
				<div class="body__card">
					<span class="fi-br-envelope"></span>
					<h5>Email Us</h5>
					<p>hmtlundip@student.undip.ac.id<br>himpunanundip@gmail.com</p>
				</div> <!-- end body card -->
			</div> <!-- end content card -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end help section -->


<!-- map section -->
<!-- FINISH -->
<div class="map__section">
	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.648678608155!2d110.43812051450128!3d-7.050504471046384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c1b635ab097%3A0xb37e54359fac9317!2sDepartemen%20Teknik%20Lingkungan%20Universitas%20Diponegoro!5e0!3m2!1sid!2sid!4v1628341019027!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


<!-- socmed section -->
<!-- FINISH -->
<div class="socmed__section">
	<div class="container">
		<div class="body__section">
			<div class="row">
				<!-- socmed head -->
				<div class="col-lg-4 col-md-5 d-flex flex-column align-self-center pe-lg-5 pe-md-5 socmed__head">
					<p class="title__socmed">Get in touch with us</p>
					<p>Tetap terhubung dengan akun sosial media kami.</p>
				</div> <!-- end socmed head -->

				<!-- socmed content -->
				<div class="col-lg-8 col-md-7 ps-lg-5 ps-md-3 d-flex align-items-center">
					<div id="socmed__content" class="owl-carousel owl-theme">
						<div class="item">
							<a class="owl__ilink" href="https://www.instagram.com/hmtlundip/" target="_blank"><img src="/mainpage/images/instagram-color2.svg" alt="alter-igcolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="#linkedin"><img src="/mainpage/images/linkedin-color1.svg" alt="alter-linkedincolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="https://www.youtube.com/channel/UCTaPUsgMZ7zhE7ppnrI3iAA" target="_blank"><img src="/mainpage/images/youtube-color1.svg" alt="alter-youtubecolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="#line"><img src="/mainpage/images/line-color.svg" alt="alter-linecolor"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="https://open.spotify.com/show/1QYjVqMmu31mIS2T2WY555?si=do6hUAx6RN6pVco9I69kZw" target="_blank"><img src="/mainpage/images/spotify-color.svg" alt="alter-spotifycolor"></a>
						</div>
					</div>
				</div> <!-- end socmed content -->
			</div> <!-- end row -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end socmed section -->

<?= $this->endSection(); ?>