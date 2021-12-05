<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="headers" style="background-image: url(/mainpage/images/jumbotron-profil-ukm.jpg);">
	<div class="container">
		<div class="body__section text-center">
			<h2>PROFIL</h2>
			<p class="sub__title">Unit Kegiatan Mahasiswa</p>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->

<!-- Seni Section -->
<div class="seni__section">
	<!-- header -->
	<div class="container">
		<div class="title__section text-center">
			<h3>Bidang Seni</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ipsa earum deleniti veniam
				quibusdam odit accusamus inventore nulla, suscipit labore eaque quisquam maxime qui voluptas
				distinctio fugiat quae velit aut.</p>
		</div> <!-- end Seni header -->
	</div>
	<!-- Seni 1 -->
	<div class="seni">
		<div class="container">
			<div class="body__section">
				<div class="ukm__seni__content">
					<div class="row">
						<div class="col-12">
							<div class="pe-md-3">
								<h4>1. Saman</h4>
								<p class="text-just ">Merupakan salah satu Unit Kegiatan Mahasiswa di Teknik
									Lingkungan Undip dalam bidang kesenian yang berfokus pada tarian asal Aceh yaitu
									Tari Saman. UKM ini juga sering menjadi pengisi pada beberapa acara.</p>
								<!-- chief UKM -->
								<div class="chief__UKM">
									<h5 class="my__subttl text-center">Pengurus</h5>
									<!--Pengurus-->
									<div class="pengurus">
										<div class="row justify-content-evenly">
											<div class="col-sm-4 col-6 text-center">
												<!-- Ketua UKM -->
												<div class="ketua__ukm">
													<img src="/mainpage/images/ketua.png" class="chief__img img__sec mb-3 img-fluid" alt="ketua">
													<p class="fw-bold mb-2">Ketua</p>
													<p class="mb-0">Athaya Khairunnisa (2019)</p>
												</div>
											</div>
											<div class="col-sm-4 col-6 text-center">
												<!-- Penanggung UKM -->
												<div class="penanggung__ukm">
													<img src="/mainpage/images/penanggung.jpg" class="chief__img img__sec mb-3 img-fluid" alt="Penanggung Jawab">
													<p class="fw-bold mb-2">Penanggung Jawab</p>
													<p class="mb-0">Erisa Salsa (2020)</p>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- end chief UKM -->

								<!-- Foto UKM -->
								<div class="foto__ukm">
									<h5 class="my__subttl text-center">Foto UKM</h5>
									<div id="ukm__carousel" class="owl-carousel owl-theme">
										<!-- foto ukm 1 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-1.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 2 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-2.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 3 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-3.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 4 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-4.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 5 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-5.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
									</div>
								</div> <!-- end foto ukm -->
								<!-- Pencapaian -->

								<div class="pencapaian">
									<div class="row justify-content-center">
										<h5 class="my__subttl text-center">Pencapaian</h5>
										<div class="col-10 pencapaian__col">
											<!-- list pencapaian -->
											<ul class="list__pencapaian">
												<li>Vivas Day 2019</li>
												<li>Hari Bumi 2019</li>
												<li>Seminar Nasional TL Expo 2019</li>
												<li>Seminar Nasional Indonesia Power 2019</li>
												<li>Festival Tari Ratoh Jaroe Parafest 2019</li>
												<li>Kegiatan PLN Peduli “Pembinaan dan Pengembangan Bank Sampah
													gedawang Asri” 2019</li>
											</ul>
											<!--end list pencapaian-->
										</div>
									</div>
								</div>
								<!--end pencapaian-->
							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end seni content -->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div>
	<!--End Seni 1-->
	<!-- Seni 2 -->
	<div class="seni">
		<div class="container">
			<div class="body__section">
				<div class="ukm__seni__content">
					<div class="row">
						<div class="col-12">
							<div class="pe-md-3">
								<h4>2. Akustik</h4>
								<p class="text-just ">Merupakan sebuah komunitas sebagai salah satu wadah bagi
									mahasiswa Teknik Lingkungan untuk mengembangkan dan menyalurkan bakat serta
									kegemarannya dalam seni musik dan instrumen. Kegiatan yang dilakukan ialah
									latihan rutin bersama, kreasi konten, serta mengikuti kompetisi/lomba.</p>

								<!-- chief UKM -->
								<div class="chief__UKM">
									<h5 class="my__subttl text-center">Pengurus</h5>
									<!--Pengurus-->
									<div class="pengurus">
										<div class="row justify-content-evenly">
											<div class="col-sm-4 col-6 text-center">
												<!-- Ketua UKM -->
												<div class="ketua__ukm">
													<img src="/mainpage/images/ketua.png" class="chief__img img__sec mb-3 img-fluid" alt="ketua">
													<p class="fw-bold mb-2">Ketua</p>
													<p class="mb-0">Destian Dwi Ramdhani (2019)</p>
												</div>
											</div>
											<div class="col-sm-4 col-6 text-center">
												<!-- Penanggung UKM -->
												<div class="penanggung__ukm">
													<img src="/mainpage/images/penanggung.jpg" class="chief__img img__sec mb-3 img-fluid" alt="Penanggung Jawab">
													<p class="fw-bold mb-2">Penanggung Jawab</p>
													<p class="mb-0">Reyzza Anferditya (2019)</p>
												</div>
											</div>
										</div>
									</div>
									<!--end Pengurus-->
								</div> <!-- end chief UKM -->

								<!-- Foto UKM -->
								<div class="foto__ukm">
									<h5 class="my__subttl text-center">Foto UKM</h5>
									<div id="ukm__carousel" class="owl-carousel owl-theme">
										<!-- foto ukm 1 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-1.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 2 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-2.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 3 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-3.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 4 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-4.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 5 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-5.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
									</div>
								</div> <!-- end foto ukm -->

								<!-- Pencapaian -->
								<div class="pencapaian">
									<h5 class="my__subttl text-center">Pencapaian</h5>
									<div class="row  justify-content-center">
										<div class="col-10 pencapaian__col">
											<!-- List Pencapaian -->
											<ul class="list__pencapaian">
												<li>Juara 1 Akustik Canvas (Competition Art and Naval Sport 3.0</li>
											</ul>
											<!-- end pencapaian -->
										</div>
									</div>
								</div>
								<!--end pencapaian-->
							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end seni content -->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div>
	<!--End Seni 2-->
</div> <!-- end Seni section -->

<!-- Olahraga Section -->
<div class="olahraga__section">
	<div class="title__section text-center">
		<h3>Bidang olahraga</h3>
		<p>Temukan berbagai berita maupun artikel terbaik dan terkini</p>
	</div> <!-- end Seni header -->
	<!-- Olahraga 1 -->
	<div class="olahraga">
		<div class="container">
			<div class="body__section">
				<div class="ukm__olahraga__content">
					<div class="row">
						<div class="col-12">
							<div class="pe-md-3">
								<h4>1. Bulu Tangkis</h4>
								<p class="text-just">UKM (Unit Kegiatan Mahasiswa) badminton merupakan salah satu
									wadah bagi mahasiswa Teknik Lingkungan baik putra maupun putri dalam
									mengembankan dan menyalurkan bakat serta kegemarannya dalam olahraga badminton.
								</p>
								<!-- chief UKM -->

								<div class="chief__UKM">
									<h5 class="my__subttl text-center">Pengurus</h5>
									<!--Pengurus-->
									<div class="pengurus">
										<div class="row justify-content-evenly">
											<div class="col-sm-4 col-6 text-center">
												<!-- Ketua UKM -->
												<div class="ketua__ukm">
													<img src="/mainpage/images/ketua.png" class="chief__img img__sec mb-3 img-fluid" alt="ketua">
													<p class="fw-bold mb-2">Ketua</p>
													<p class="mb-0">Fathan Surya (2019)</p>
												</div>
											</div>
											<div class="col-sm-4 col-6 text-center">
												<!-- Penanggung UKM -->
												<div class="penanggung__ukm">
													<img src="/mainpage/images/penanggung.jpg" class="chief__img img__sec mb-3 img-fluid" alt="Penanggung Jawab">
													<p class="fw-bold mb-2">Penanggung Jawab</p>
													<p class="mb-0">Syalsabilla Anayantisya (2020)</p>
												</div>
											</div>
										</div>
									</div>
									<!--end Pengurus-->
								</div> <!-- end chief UKM -->

								<!-- Jadwal Latihan -->
								<div class="latihan">
									<h5 class="my__subttl text-center">Latihan</h5>
									<div class="row justify-content-evenly">
										<div class="col-7 col-sm-4 latihan__col">
											<div class="jadwal__latihan">
												<h6 class="fw-normal mb-2 text-center text-decoration-underline">
													Jadwal Latihan</h6>
												<ul class="list__latihan">
													<li>Sabtu, 16.00 - 18.00 WIB</li>
													<li>Minggu, 19.00 - 21.00 WIB</li>
												</ul>
											</div>
										</div>
										<div class="col-7 col-sm-4 latihan__col">
											<div class="tempat__latihan">
												<h6 class="fw-normal mb-2 text-center text-decoration-underline">
													Tempat Latihan</h6>
												<ul class="list__latihan">
													<li>GOR Pin</li>
													<li>GOR Bulusan</li>
													<li>GOR Graha Estetika</li>
													<li>GOR Waikiki</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--end Jadwal Latihan-->
								<!-- Foto UKM -->
								<div class="foto__ukm">
									<h5 class="my__subttl text-center">Foto UKM</h5>
									<div id="ukm__carousel" class="owl-carousel owl-theme">
										<!-- foto ukm 1 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-1.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 2 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-2.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 3 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-3.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 4 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-4.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 5 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-5.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
									</div>
								</div> <!-- end foto ukm -->

								<!-- Pencapaian -->
								<div class="pencapaian">
									<h5 class="my__subttl text-center">Pencapaian</h5>
									<div class="row  justify-content-center">
										<div class="col-10 pencapaian__col">
											<!-- list pencapaian -->
											<ul class="list__pencapaian">
												<li>4th place Hydra Cup Championship</li>
											</ul>
											<!-- end pencapaian -->
										</div>
									</div>
								</div>
								<!--end pencapaian-->
							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div>
				<!--end olahraga content-->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div>
	<!--end olahraga 1-->

	<!-- Olahraga 2 -->
	<div class="olahraga">
		<div class="container">
			<div class="body__section">
				<!-- olahraga 1 -->
				<div class="ukm__olahraga__content">
					<div class="row">
						<div class="col-12">
							<div class="pe-md-3">
								<h4>2. Basket</h4>
								<p class="text-just">Unit Kegiatan Mahasiswa basket ini merupakan wadah bagi
									mahasiswa Teknik Lingkungan untuk dapat menyalurkan serta mengembangkan potensi
									serta bakat olahraga khususnya basket.
								</p>

								<!-- chief UKM -->
								<div class="chief__UKM">
									<h5 class="my__subttl text-center">Pengurus</h5>
									<!--Pengurus-->
									<div class="pengurus">
										<div class="row justify-content-evenly">
											<div class="col-sm-4 col-6 text-center">
												<!-- Ketua UKM -->
												<div class="ketua__ukm">
													<img src="/mainpage/images/ketua.png" class="chief__img img__sec mb-3 img-fluid" alt="ketua">
													<p class="fw-bold mb-2">Ketua</p>
													<p class="mb-0">Hafizh Dewa (2019)</p>
												</div>
											</div>
											<div class="col-sm-4 col-6 text-center">
												<!-- Penanggung UKM -->
												<div class="penanggung__ukm">
													<img src="/mainpage/images/penanggung.jpg" class="chief__img img__sec mb-3 img-fluid" alt="Penanggung Jawab">
													<p class="fw-bold mb-2">Penanggung Jawab</p>
													<p class="mb-0">Aurellia Aysha K. (2020)</p>
												</div>
											</div>
										</div>
									</div>
									<!--end Pengurus-->
								</div> <!-- end chief UKM -->

								<!-- Jadwal Latihan -->
								<div class="latihan">
									<h5 class="my__subttl text-center">Latihan</h5>
									<div class="row justify-content-evenly">
										<div class="col-7 col-sm-4 latihan__col">
											<div class="jadwal__latihan">
												<h6 class="fw-normal mb-2 text-center text-decoration-underline">
													Jadwal Latihan</h6>
												<ul class="list__latihan ">
													<li>Kamis, 16.00 - 18.00 WIB</li>
													<li>jumat, 16.00 - 18.00 WIB</li>
												</ul>
											</div>
										</div>
										<div class="col-7 col-sm-4 latihan__col">
											<div class="tempat__latihan">
												<h6 class="fw-normal mb-2 text-center text-decoration-underline">
													Tempat Latihan</h6>
												<ul class="list__latihan ">
													<li>Lapangan GKB</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--end Jadwal Latihan-->

								<!-- Foto UKM -->
								<div class="foto__ukm">
									<h5 class="my__subttl text-center">Foto UKM</h5>
									<div id="ukm__carousel" class="owl-carousel owl-theme">
										<!-- foto ukm 1 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-1.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 2 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-2.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 3 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-3.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 4 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-4.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
										<!-- foto ukm 5 -->
										<div class="my-3">
											<div class="card__foto__ukm">
												<div class="ukm__card__img">
													<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/badminton-5.jpg);">
													</div> <!-- end img sec -->
												</div> <!-- end ukm card img -->
											</div> <!-- end card foto ukm -->
										</div>
									</div>
								</div> <!-- end foto ukm -->

								<!-- Pencapaian -->
								<div class="pencapaian">
									<h5 class="my__subttl text-center">Pencapaian</h5>
									<div class="row  justify-content-center">
										<div class="col-10 pencapaian__col">
											<!-- list pencapaian -->
											<ul class="list__pencapaian">
												<li>4th place Hydra Cup Championship</li>
												<li>Best Supporter Hydra Cup Championship</li>
											</ul>
											<!-- end list pencapaian -->
										</div>
									</div>
								</div>
								<!--end pencapaian-->
							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end olahraga 1 -->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div>
	<!-- End Olahraga 2 -->
	<!--end olahraga-->
</div> <!-- end olahraga section -->

<!-- socmed section -->
<!-- FINISH -->
<div class="socmed__section bg_dark">
	<div class="container">
		<div class="body__section">
			<div class="row">
				<!-- socmed head -->
				<div class="col-lg-4 col-md-5 d-flex flex-column align-self-center pe-lg-5 pe-md-5 socmed__head">
					<p class="title__socmed text_light">Get in touch with us</p>
					<p class="text_light">Tetap terhubung dengan akun sosial media kami.</p>
				</div> <!-- end socmed head -->

				<!-- socmed content -->
				<div class="col-lg-8 col-md-7 ps-lg-5 ps-md-3 d-flex align-items-center">
					<div id="socmed-content" class="owl-carousel owl-theme">
						<div class="item">
							<a class="owl__ilink" href="https://www.instagram.com/hmtlundip/" target="_blank"><img src="/mainpage/images/instagram-color2.svg" alt="alter-igcolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="https://bit.ly/LinkedinHMTLUNDIP"><img src="/mainpage/images/linkedin-color1.svg" alt="alter-linkedincolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="https://www.youtube.com/channel/UCTaPUsgMZ7zhE7ppnrI3iAA" target="_blank"><img src="/mainpage/images/youtube-color1.svg" alt="alter-youtubecolor1"></a>
						</div>
						<div class="item">
							<a class="owl__ilink" href="https://lin.ee/1I0669e"><img src="/mainpage/images/line-color.svg" alt="alter-linecolor"></a>
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