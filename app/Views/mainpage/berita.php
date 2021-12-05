<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="headers" style="background-image: url(/mainpage/images/jumbotron-berita.jpg);">
	<div class="container">
		<div class="body__section text-center">
			<h2>BERITA</h2>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->

<!-- berita section -->
<div class="berita__terkini__section">
	<div class="container">
		<div class="body__section">
			<!-- berita terkini title -->
			<div class="title__section text-center">
				<h3>Berita Terkini</h3>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ipsa earum deleniti veniam
					quibusdam odit accusamus inventore nulla, suscipit labore eaque quisquam maxime qui voluptas
					distinctio fugiat quae velit aut.</p>
			</div> <!-- end berita terkini title-->
			<!-- Berita terkini carousel -->
			<div id="berita-terkini-content" class="owl-carousel owl-theme">
				<div class="item item__berita__terkini">
					<div class="berita__terkini__body d-flex">
						<div class="left__berita__terkini">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/team-2.jpg);">
							</div>
						</div> <!-- end berita terkini -->
						<div class="right__berita__terkini">
							.<div class="news__date">
								<i class="far fa-calendar-alt"></i>15/07/2021
							</div> <!-- end news date -->
							<a class="right__berita__terkini__title text-dark2" href="#">Rekor Positif Covid-19
								Meroket, Tembus 54.517 Kasus</a>
							<div class="star__proker__desc">Positif Covid-19 kembali memecahkan rekor dengan
								tambahan sebesar 54.517 kasus.
							</div>
							<a href="#" class="news__link">
								<i class="ai-circle-chevron-right"></i>Selengkapnya
							</a> <!-- end news link -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->

				<div class="item item__berita__terkini">
					<div class="berita__terkini__body d-flex">
						<div class="left__berita__terkini">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/news-2.jpg);">
							</div>
						</div> <!-- end berita terkini -->
						<div class="right__berita__terkini">
							.<div class="news__date">
								<i class="far fa-calendar-alt"></i>20/07/2021
							</div> <!-- end news date -->
							<a class="right__berita__terkini__title text-dark2" href="#">Fitur Pengukur Suhu Tubuh
								iPhone Terbaru Bakal Hadir</a>
							<div class="star__proker__desc">Bahkan Apple telah membuat paten kamera serta pemrosesan
								data citra. Hal ini demi pengukuran suhu.
							</div>
							<a href="#" class="news__link">
								<i class="ai-circle-chevron-right"></i>Selengkapnya
							</a> <!-- end news link -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->

				<div class="item">
					<div class="berita__terkini__body d-flex">
						<div class="left__berita__terkini">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/news-3.jpg);">
							</div>
						</div> <!-- end berita terkini -->
						<div class="right__berita__terkini">
							.<div class="news__date">
								<i class="far fa-calendar-alt"></i>01/08/2021
							</div> <!-- end news date -->
							<a class="right__berita__terkini__title text-dark2" href="#">Prediksi Terbaru Menkes
								Kapan RI Capai Puncak Corona</a>
							<div class="star__proker__desc">Menteri Kesehatan Budi Gunadi Sadikin menyebut
								kemungkinan puncak lonjakan kasus COVID-19.
							</div>
							<a href="#" class="news__link">
								<i class="ai-circle-chevron-right"></i>Selengkapnya
							</a> <!-- end news link -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->
			</div> <!-- end carousel -->

		</div>
	</div>
</div>
<!-- end berita section -->

<!-- hr -->
<div class="container-fluid">
	<div class="body__section">
		<hr>
	</div> <!-- end body section -->
</div> <!-- end container fluid -->
<div class="info__section">
	<div class="info__body row">
		<div class="info__akademik__section">
			<div class="container">
				<div class="body__section">
					<div class="info__akademik__body">
						<!-- info akademik main -->
						<div class="info__akademik__main  col-lg-9 col-md-9 ps-lg-0 pe-lg-4 pe-md-4">
							<div class="title__section title__info__akademik text-left">
								<h3>Info Akademik</h3>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ipsa
									earum deleniti
									veniam
									quibusdam odit accusamus inventore nulla, suscipit labore eaque quisquam
									maxime qui
									voluptas
									distinctio fugiat quae velit aut.</p>
							</div> <!-- end Info akademik title-->
							<div class="info__akademik__content row">
								<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__akademik__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Prediksi Terbaru Menkes
														Kapan RI Capai Puncak Corona</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__akademik__photo img__sec" style="background-image: url(/mainpage/images/news-2.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Rekor Positif Covid-19
														Meroket, Tembus 54.517 Kasus</h6>
												</div>
												<p class="card-text">Positif Covid-19 kembali memecahkan rekor
													dengan
													tambahan sebesar 54.517 kasus</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__akademik__photo img__sec" style="background-image: url(/mainpage/images/news-1.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>01/08/2021</p>
													<h6>Prediksi Terbaru Menkes Kapan RI Capai Puncak Corona
													</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__akademik__photo img__sec" style="background-image: url(/mainpage/images/team-1.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>01/08/2021</p>
													<h6>Prediksi Terbaru Menkes Kapan RI Capai Puncak Corona
													</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
							</div>
						</div>
						<!-- end info akademik main -->
					</div>
					<!-- end indo akademik -->
				</div>
			</div>
		</div>
		<!-- end Info akademik section -->
		<div class="info__beasiswa__section">
			<div class="container ">
				<div class="body__section">
					<div class="info__beasiswa__body">
						<!-- info Beasiswa main -->
						<div class="info__beasiswa__main col-lg-9 col-md-9 ps-lg-0 pe-lg-4 pe-md-4">
							<div class="title__section title__info__beasiswa text-left">
								<h3>Info Beasiswa</h3>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ipsa
									earum deleniti
									veniam
									quibusdam odit accusamus inventore nulla, suscipit labore eaque quisquam
									maxime qui
									voluptas
									distinctio fugiat quae velit aut.</p>
							</div> <!-- end Info akademik title-->
							<div class="info__beasiswa__content row">
								<div class="berita__info__beasiswa col-lg-6 col-md-6 mb-5">
									<div class="info__beasiswa__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__beasiswa__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Prediksi Terbaru Menkes
														Kapan RI Capai Puncak Corona</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__beasiswa col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Prediksi Terbaru Menkes
														Kapan RI Capai Puncak Corona</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__beasiswa col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Prediksi Terbaru Menkes
														Kapan RI Capai Puncak Corona</h6>
												</div>
												<p class="card-text">Lorem ipsum dolor sit, amet consectetur
													adipisicing elit. Voluptatem ipsa earum deleniti veniam
													quibusdam odit accusamus inventore nulla, suscipit labore eaque
													quisquam maxime qui voluptas
													distinctio fugiat quae velit aut.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
								<div class="berita__info__beasiswa col-lg-6 col-md-6 mb-5">
									<div class="info__akademik__card">
										<a href="berita.html" class="akademik__card">
											<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
											<!-- end info akademik photo -->
											<div class="info__akademik__card__content">
												<div class="akademik__card__title">
													<p>15/07/2021</p>
													<h6>Prediksi Terbaru Menkes
														Kapan RI Capai Puncak Corona</h6>
												</div>
												<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
													menyebut
													kemungkinan puncak lonjakan kasus COVID-19.</p>
											</div> <!-- end info akademik content -->
										</a> <!-- end info akademik card -->
									</div> <!-- end info akademik card -->
								</div> <!-- end berita info akademik -->
							</div>
						</div>
						<!-- end info akademik main -->
					</div>
					<!-- end indo akademik -->
				</div>
			</div>
		</div>
		<!-- end Info akademik section -->
		<!-- end info main -->
		<!-- info akademik aside -->
		<div class="info__aside">
			<div class="container">
				<div class="body__section">
					<div class="info__aside__body row justify-content-end">
						<div class="info__aside__content  col-lg-3 col-md-3 pe-lg-0 ps-lg-3">
							<div class="position-sticky aside__sticky">
								<h5>Ikuti akun sosial media kami</h5>
								<div class="icon__berita my-3">
									<a href="#"><i class="fab fa-instagram-square"></i></a>
									<a href="#"><i class="fab fa-youtube-square"></i></a>
									<a href="#"><i class="fab fa-line"></i></a>
									<a href="#"><i class="fab fa-twitter-square"></i></a>
									<a href="#"><i class="fab fa-facebook-square"></i></a>
								</div>
								<h5>Berita dan informasi lainnya</h5>
								<div class="akademik__aside__content">
									<a class="info__akademik__link" data-bs-toggle="collapse" href="#collapse-2022" role="button" aria-expanded="false" aria-controls="collapseExample">
										<div class="thn__title">2022</div>
										<i class="icofont-simple-down icon-down"></i>
									</a> <!-- end info akademik link -->
									<div class="tahun__cc row collapse" id="collapse-2022">
										<div class="bulan__cc">
											<a href="#">
												<p>Januari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Februari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Maret</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>April</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Mei</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juni</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juli</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Agustus</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>September</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Oktober</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>November</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Desember</p>
											</a>
										</div>
									</div>
								</div>
								<!-- end akademik__aside__content -->
								<div class="akademik__aside__content">
									<a class="info__akademik__link" data-bs-toggle="collapse" href="#collapse-2021" role="button" aria-expanded="false" aria-controls="collapseExample">
										<div class="thn__title">2021</div>
										<i class="icofont-simple-down icon-down"></i>
									</a> <!-- end info akademik link -->
									<div class="tahun__cc row collapse" id="collapse-2021">
										<div class="bulan__cc">
											<a href="#">
												<p>Januari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Februari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Maret</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>April</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Mei</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juni</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juli</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Agustus</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>September</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Oktober</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>November</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Desember</p>
											</a>
										</div>
									</div>
								</div>
								<!-- end akademik__aside__content -->
								<div class="akademik__aside__content">
									<a class="info__akademik__link" data-bs-toggle="collapse" href="#collapse-2020" role="button" aria-expanded="false" aria-controls="collapseExample">
										<div class="thn__title">2020</div>
										<i class="icofont-simple-down icon-down"></i>
									</a> <!-- end info akademik link -->
									<div class="tahun__cc row collapse" id="collapse-2020">
										<div class="bulan__cc">
											<a href="#">
												<p>Januari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Februari</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Maret</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>April</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Mei</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juni</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Juli</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Agustus</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>September</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Oktober</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>November</p>
											</a>
										</div>
										<div class="bulan__cc">
											<a href="#">
												<p>Desember</p>
											</a>
										</div>
									</div>
								</div>
								<!-- end akademik__aside__content -->
							</div> <!-- end aside sticky -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end info akademik aside -->
	</div>
</div>
<!-- Info section -->

<?= $this->endSection(); ?>