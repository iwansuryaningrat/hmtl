<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="header__dashboard" style="background-image: url(/mainpage/images/hero-index.png);">
	<div class="container justify-content-center">
		<div class="body__section text-center">
			<h1>Selamat Datang di<br>Website Resmi HMTL Undip</h1>
			<h6>Sekretariat: Gedung Kuliah Bersama Lantai 3 Jl. Prof Soedarto, S.H<br>Tembalang Semarang
				50275<br>Email: <a href="mailto:info@hmtlundip.org" target="_blank">info@hmtlundip.org</a></h6>
			<!-- hero contact -->
			<div class="hero__contact">
				<a href="https://lin.ee/1I0669e"><i class="icofont-line"></i>
					<span>@sfv8734j</span></a>
				<a href="https://www.instagram.com/hmtlundip/"><img src="/mainpage/images/instagram-icon.svg" alt="ins-icon"><span>hmtlundip</span></a>
				<a href="https://open.spotify.com/show/1QYjVqMmu31mIS2T2WY555?si=do6hUAx6RN6pVco9I69kZw"><i class="icofont-spotify"></i></a>
				<a href="https://bit.ly/LinkedinHMTLUNDIP"><i class="icofont-linkedin"></i></a>
				<a href="https://www.youtube.com/channel/UCTaPUsgMZ7zhE7ppnrI3iAA"><i class="icofont-youtube-play"></i></a>
				<a href="/"><span>Hmtl Undip</span></a>
			</div> <!-- end hero contact -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->


<!-- kabinet section -->
<!-- FINISH -->
<div class="kabinet__section pb-lg-5 pb-sm-4">
	<div class="container">
		<div class="body__section">
			<div class="kabinet__body">
				<div class="left__kabinet">
					<img class="kabinet__img" src="/mainpage/images/kabinet-logo-AC.svg" alt="kabinet-askara-cita-logo">
				</div>
				<div class="right__kabinet">
					<h4>Kabinet Askara Cita</h4>
					<p class="mb-0">Simbol harapan dan resiliensi yang berupaya terus hadir dan mempertahankan esensi. Berkembang dan berotasi dengan semangat pembelajar.</p>
				</div>
			</div> <!-- end kabinet body -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end kabinet section -->


<!-- about section -->
<!-- FINISH -->
<div class="about__section">
	<div class="container">
		<div class="body__section">
			<div class="about__body">
				<div class="left__about">
					<div class="row">
						<div class="col-12 col-md-6 mb-md-3 mb-4">
							<div class="about__card">
								<div class="about__count text-dark2"><?= $bidang; ?></div>
								<div class="about__subtitle text-dark2">Badan Pengurus</div>
								<p style="font-size: 14px;">Terdiri dari BPH, 2 Unit dan 8 Bidang yang bersinergi untuk HMTL yang lebih baik.</p>
							</div> <!-- end about card -->
						</div> <!-- end col -->

						<div class="col-12 col-md-6 mb-md-3 mb-4">
							<div class="about__card">
								<div class="about__count text-dark2"><?= $pengurus; ?></div>
								<div class="about__subtitle text-dark2">Pengurus</div>
								<p style="font-size: 14px;">Terdapat <?= $pengurus; ?> pengurus yang melayani warga Teknik Lingkungan dan mewarnai perjalanan Askara Cita dalam semangat pembelajar.</p>
							</div> <!-- end about card -->
						</div> <!-- end col -->

						<div class="col-12 col-md-6 mb-md-3 mb-4">
							<div class="about__card">
								<div class="about__count text-dark2"><?= $proker; ?></div>
								<div class="about__subtitle text-dark2">Program Kerja</div>
								<p style="font-size: 14px;">Askara Cita menuangkan karya-karyanya dalam 15 Jobdesc, <?= $proker; ?> Program Kerja, dan 29 kegiatan non Program Kerja.</p>
							</div> <!-- end about card -->
						</div> <!-- end col -->

						<div class="col-12 col-md-6 mb-md-3 mb-4">
							<div class="about__card">
								<div class="about__count text-dark2"><?= $birounit; ?></div>
								<div class="about__subtitle text-dark2">Biro</div>
								<p style="font-size: 14px;">Dalam keberjalanannya, HMTL dibersamai oleh 3 Biro: Ikatan Pecinta Alam Lingkungan (IPAL), Hayatun Nufus, serta Kelompok Studi Lingkungan (KSL).</p>
							</div> <!-- end about card -->
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end left body -->

				<div class="right__about">
					<div class="about__img img__sec lg-rad" style="background-image: url(/mainpage/images/hm-tl-dkk.jpg);"></div> <!-- end about img -->
				</div> <!-- end right body -->
			</div> <!-- end about body -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end about section -->


<?php if ($news != null) : ?>
	<!-- news section -->
	<!-- FINISH -->
	<div class="news__section">
		<div class="container">
			<div class="body__section">
				<!-- news header -->
				<div class="title__section text-center">
					<h3>Berita Terkini</h3>
					<p>Temukan berbagai berita maupun artikel terbaik dan terkini</p>
				</div> <!-- end news header -->

				<!-- news body -->
				<div class="news__body">
					<!-- news content -->
					<div class="news__content">
						<div id="news-content" class="owl-carousel owl-theme">
							<?php foreach ($news as $berita) : ?>
								<div class="mt-2 mb-4">
									<div class="news__card mx-2 mx-md-3">
										<div class="news__card__img">
											<div class="img__sec" style="background-image: url(/img/berita/<?= $berita['foto']; ?>);">
											</div> <!-- end img sec -->
										</div> <!-- end news card img -->
										<div class="news__card__body">
											<div class="news__date">
												<i class="far fa-calendar-alt"></i><?= $berita['tanggal']; ?>
											</div> <!-- end news date -->
											<div class="news__title">
												<?= $berita['judul']; ?>
											</div> <!-- end news title -->
											<div class="news__desc">
												<?= $berita['preview']; ?>
											</div> <!-- news desc -->
											<a href="#" class="news__link">
												<i class="ai-circle-chevron-right"></i>Selengkapnya
											</a> <!-- end news link -->
										</div> <!-- end news card body -->
									</div> <!-- end news card -->
								</div> <!-- end m -->
							<?php endforeach; ?>

						</div> <!-- end news content owl carousel -->
					</div> <!-- end news content -->

					<!-- button selengkapnya -->
					<div class="btn__section">
						<a href="/home/berita" class="next__btn d-flex align-items-center">Lebih Banyak<i class="fi fi-rs-angle-small-right" style="top: 2.8px;"></i></a>
					</div> <!-- end button selengkapnya -->
				</div> <!-- end news body -->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div> <!-- end news section -->
<?php endif; ?>

<!-- hr -->
<div class="container-fluid">
	<div class="body__section">
		<hr>
	</div> <!-- end body section -->
</div> <!-- end container fluid -->

<!-- star proker section -->
<div class="star__proker__section">
	<div class="container">
		<div class="body__section">
			<div id="star-proker-content" class="owl-carousel owl-theme">
				<div class="item">
					<div class="star__proker__body d-flex">
						<div class="left__star__proker">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/team-2.jpg);">
							</div>
						</div> <!-- end left proker -->
						<div class="right__star__proker">
							<div class="right__proker__title">PROGAM KERJA</div>
							<a class="right__star__title text-dark2" href="#">Roadshow Eksternal</a>
							<div class="star__proker__desc">Roadshow Eksternal adalah program kerja Humas yang
								berisi kegiatan studi banding antar himpunan di luar Undip. Roadshow eksternal
								diikuti oleh seluruh pengurus HMTL Undip 2021.</div>
							<div class="star__proker__pj d-flex">
								<div class="img__sec" style="background-image: url(/mainpage/images/ava-1.jpg);"></div>
								<div>
									<div class="name__pj text-dark2">Joko Susilo Susanto</div>
									<div class="desc__pj">Penanggung Jawab<br>Teknik Lingkungan - 2019</div>
								</div> <!-- end div -->
							</div> <!-- end star proker pj -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->

				<div class="item">
					<div class="star__proker__body d-flex">
						<div class="left__star__proker">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/team-1.jpg);">
							</div>
						</div> <!-- end left proker -->
						<div class="right__star__proker">
							<div class="right__proker__title">PROGAM KERJA</div>
							<a class="right__star__title text-dark2" href="#">Company Profil</a>
							<div class="star__proker__desc">Mengemas informasi lengkap mengenai HMTL Undip untuk
								diperkenalkan kepada masyarakat umum. Lorem ipsum dolor sit amet consectetur
								adipisicing, elit. Nesciunt ut saepe ipsam consequatur ratione.</div>
							<div class="star__proker__pj d-flex">
								<div class="img__sec" style="background-image: url(/mainpage/images/ava-1.jpg);"></div>
								<div>
									<div class="name__pj text-dark2">Joko Susilo Susanto</div>
									<div class="desc__pj">Penanggung Jawab<br>Teknik Lingkungan - 2019</div>
								</div> <!-- end div -->
							</div> <!-- end star proker pj -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->

				<div class="item">
					<div class="star__proker__body d-flex">
						<div class="left__star__proker">
							<div class="img__sec lg-rad" style="background-image: url(/mainpage/images/team-3.jpg);">
							</div>
						</div> <!-- end left proker -->
						<div class="right__star__proker">
							<div class="right__proker__title">PROGAM KERJA</div>
							<a class="right__star__title text-dark2" href="#">Media Sosial</a>
							<div class="star__proker__desc">Lorem ipsum dolor sit amet consectetur, adipisicing
								elit. Magni fuga, pariatur, sit beatae voluptatibus nostrum ullam aliquam numquam
								tempore laudantium, rem deserunt saepe. Voluptas non fuga saepe corporis soluta,
								placeat.</div>
							<div class="star__proker__pj d-flex">
								<div class="img__sec" style="background-image: url(/mainpage/images/ava-1.jpg);"></div>
								<div>
									<div class="name__pj text-dark2">Joko Susilo Susanto</div>
									<div class="desc__pj">Penanggung Jawab<br>Teknik Lingkungan - 2019</div>
								</div> <!-- end div -->
							</div> <!-- end star proker pj -->
						</div> <!-- end right star proker -->
					</div> <!-- end star proker body -->
				</div> <!-- end item -->
			</div> <!-- end carousel -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end proker section -->

<!-- contact section -->
<!-- FINISH -->
<div class="contact__section">
	<div class="container">
		<div class="body__section">
			<!-- contact header -->
			<div class="contact__header">
				<h1>Kontak Kami</h1>
				<p>Jangan ragu untuk menghubungi kami kapanpun. Kami akan menghubungi anda kembali sesegera mungkin.
				</p>
			</div> <!-- end contact header -->
			<!-- contact form -->
			<div class="contact__form">
				<form action="/home/pesan">
					<!-- name & email -->
					<div class="row">
						<div class="col">
							<label for="name" name="nama" id="nama" class="form-label">Name</label>
							<input type="text" class="form-control form__control shadow-none" placeholder="Muhammad Ikhsan" name="nama" id="nama" required>
						</div>
						<div class="col">
							<label for="email" name="email" id="email" class="form-label">Email</label>
							<input type="text" class="form-control form__control shadow-none" placeholder="ikhsanmuhammad@mail.com" name="email" id="email" required>
						</div>
					</div> <!-- end name & email -->
					<!-- phone & subject -->
					<div class="row">
						<div class="col">
							<label for="phone" name="telp" id="telp" class="form-label">Phone</label>
							<input type="text" class="form-control form__control shadow-none" placeholder="+62 823 8823 8223" name="telp" id="telp" required>
						</div>
						<div class="col">
							<label for="subject" name="subject" id="subject" class="form-label">Subject</label>
							<select id="input-subject" class="form-select form__select shadow-none" name="subject" id="subject">
								<option selected value="saran">Saran untuk Website HMTL</option>
								<option value="pertanyaan">Pertanyaan</option>
								<option value="partnership">Partnership</option>
								<option value="lainnya">Lainnya</option>
							</select>
						</div>
					</div> <!-- end phone & subject -->
					<!-- textarea -->
					<label for="message" name="pesan" id="pesan" class="form-label">Message</label>
					<textarea class="form-control form__control shadow-none" placeholder="I have a great idea..." style="height: 100px" name="pesan" id="pesan" required></textarea> <!-- end textarea -->
					<!-- submit message -->
					<div class="send__input">
						<input type="submit" value="Send Message" class="submit__message">
					</div> <!-- end submit message -->
				</form> <!-- end form -->
			</div> <!-- end contact form -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end contact section -->

<?= $this->endSection(); ?>