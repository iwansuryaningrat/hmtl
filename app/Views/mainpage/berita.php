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
				<p>Abad 21 diasosiasikan dengan penyebaran informasi yang luas, beragam, dan serba cepat. Berita terkini hadir untuk mensuplai pengetahuanmu akan isu yang sedang berkembang di tengah masyarakat.</p>
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

<div class="info__akademik__section">
	<div class="container">
		<div class="body__section">
			<div class="info__akademik__body row">
				<!-- info akademik main -->
				<div class="info__akademik__main col-lg-9 col-md-8 ps-lg-0">
					<div class="title__section title__info__akademik text-left">
						<h3>Info Akademik</h3>
						<p>Informasi akademik yang silih berganti terkadang bisa membuatmu hilang fokus dalam belajar. Info Akademik hadir untuk mempermudahmu dalam menemukan informasi seputar perkuliahan.</p>
					</div> <!-- end Info akademik title-->
					<div class="info__akademik__content row">
						<!-- berita info 1-->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 1-->
						<!-- berita info 2 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 2-->
						<!-- berita info 3 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 3-->
						<!-- berita info 4 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 4-->
					</div>
				</div>
				<div class="info__aside__content col-lg-3 col-md-4 pe-lg-0">
					<div class="position-sticky akademik__aside__body">
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
			<div class="info__beasiswa__body row">
				<!-- info akademik main -->
				<div class="info__beasiswa__main col-lg-12 col-md-12 ps-lg-0 pe-lg-4 pe-md-4">
					<div class="title__section title__info__beasiswa text-left">
						<h3>Info Beasiswa</h3>
						<p>Temukan info beasiswa yang sesuai dengan kebutuhanmu di sini!</p>
					</div> <!-- end Info akademik title-->
					<div class="info__beasiswa__content row">
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
											menyebut
											kemungkinan puncak lonjakan kasus COVID-19.</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
											menyebut
											kemungkinan puncak lonjakan kasus COVID-19.</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Lorem ipsum dolor sit, amet consectetur
											adipisicing elit. Voluptatem ipsa earum deleniti veniam
											quibusdam odit accusamus inventore nulla</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
											menyebut
											kemungkinan puncak lonjakan kasus COVID-19.</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
											menyebut
											kemungkinan puncak lonjakan kasus COVID-19.</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
						<div class="berita__info__beasiswa col-lg-4 col-md-4 mb-5">
							<div class="info__beasiswa__card">
								<a href="view-berita.html" class="beasiswa__card">
									<div class="info__beasiswa__photo img__sec" style="background-image: url(/mainpage/images/news-3.jpg);"></div>
									<!-- end info beasiswa photo -->
									<div class="info__beasiswa__card__content">
										<div class="beasiswa__card__title">
											<p>15/07/2021</p>
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
										<p class="card-text">Menteri Kesehatan Budi Gunadi Sadikin
											menyebut
											kemungkinan puncak lonjakan kasus COVID-19.</p>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div> <!-- end berita info beasiswa -->
					</div>
				</div>
				<!-- end info beasiswa main -->
			</div>
			<!-- end indo beasiswa -->
		</div>
	</div>
</div>
<!-- end Info beasiswa section -->

<div class="press__release__section">
	<div class="container">
		<div class="body__section">
			<div class="info__akademik__body row">
				<!-- info akademik main -->
				<div class="info__akademik__main col-lg-9 col-md-8 ps-lg-0">
					<div class="title__section title__info__akademik text-left">
						<h3>PRESS RELEASE</h3>
						<p>Dokumentasi keseruan event dan program kerja HMTL.</p>
					</div> <!-- end Info akademik title-->
					<div class="info__akademik__content row">
						<!-- berita info 1-->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 1-->
						<!-- berita info 2 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 2-->
						<!-- berita info 3 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 3-->
						<!-- berita info 4 -->
						<div class="berita__info__akademik col-lg-6 col-md-6 mb-5">
							<div class="info__akademik__card">
								<a href="view-berita.html" class="akademik__card">
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
						</div> <!-- end berita info akademik 4-->
					</div>
				</div>
				<div class="populer__aside__content col-lg-3 col-md-4 pe-lg-0 pt-2">
					<div class="position-sticky isi__berita__aside__sticky">
						<h5>Berita dan informasi Populer</h5>
						<div class="isi__berita__populer__aside">
							<div class="berita__populer__card p-1 row justify-content-center">
								<a href="berita.html" class="populer__card p-0 row">
									<div class="populer__photo col-3 col-md-5 p-0 my-auto">
										<img class="img-fluid p-1 populer__photo__sec" src="/mainpage/images/news-3.jpg" alt="">
										<!-- <div class="populer__img__sec"
													style="background-image: url(/mainpage/images/news-3.jpg);"></div> -->
									</div>
									<!-- end info beasiswa photo -->
									<div class="berita__populer__card__content col-8 col-md-7 p-1 my-auto">
										<div class="populer__card__title py-auto">
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div>
						<!-- end isi berita populer 1-->
						<div class="isi__berita__populer__aside">
							<div class="berita__populer__card p-1 row justify-content-center">
								<a href="berita.html" class="populer__card p-0 row">
									<div class="populer__photo col-3 col-md-5 p-0 my-auto">
										<img class="img-fluid p-1 populer__photo__sec" src="/mainpage/images/news-1.jpg" alt="">
										<!-- <div class="populer__img__sec"
													style="background-image: url(/mainpage/images/news-3.jpg);"></div> -->
									</div>
									<!-- end info beasiswa photo -->
									<div class="berita__populer__card__content col-8 col-md-7 p-1 my-auto">
										<div class="populer__card__title py-auto">
											<h6>Prediksi Terbaru Menkes
												Kapan RI Capai Puncak Corona</h6>
										</div>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div>
						<!-- end isi berita populer 2-->
						<div class="isi__berita__populer__aside">
							<div class="berita__populer__card p-1 row justify-content-center">
								<a href="berita.html" class="populer__card p-0 row">
									<div class="populer__photo col-3 col-md-5 p-0 my-auto">
										<img class="img-fluid p-1 populer__photo__sec" src="/mainpage/images/news-2.jpg" alt="">
										<!-- <div class="populer__img__sec"
													style="background-image: url(/mainpage/images/news-3.jpg);"></div> -->
									</div>
									<!-- end info beasiswa photo -->
									<div class="berita__populer__card__content col-8 col-md-7 p-1 my-auto">
										<div class="populer__card__title py-auto">
											<h6> Rekor Positif Covid-19 Meroket, Tembus 54.517 Kasus
											</h6>
										</div>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div>
						<!-- end isi berita populer 3-->
						<div class="isi__berita__populer__aside">
							<div class="berita__populer__card p-1 row justify-content-center">
								<a href="berita.html" class="populer__card p-0 row">
									<div class="populer__photo col-3 col-md-5 p-0 my-auto">
										<img class="img-fluid p-1 populer__photo__sec" src="/mainpage/images/news-3.jpg" alt="">
										<!-- <div class="populer__img__sec"
													style="background-image: url(/mainpage/images/news-3.jpg);"></div> -->
									</div>
									<!-- end info beasiswa photo -->
									<div class="berita__populer__card__content col-8 col-md-7 p-1 my-auto">
										<div class="populer__card__title py-auto">
											<h6> Fitur Pengukur Suhu Tubuh iPhone Terbaru Bakal Hadir
											</h6>
										</div>
									</div> <!-- end info beasiswa content -->
								</a> <!-- end info beasiswa card -->
							</div> <!-- end info beasiswa card -->
						</div>
						<!-- end isi berita populer 4-->
					</div> <!-- end isi berita aside -->
				</div>
				<!-- end isi__berita__aside__content -->
			</div>
			<!-- end indo akademik -->
		</div>
	</div>
</div>
<!-- end press__release__section -->

<?= $this->endSection(); ?>