<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>
<!-- header -->
<!-- FINISH -->
<header class="headers" style="background-image: url(/mainpage/images/jumbotron-arsip.jpg);">
	<div class="container">
		<div class="body__section text-center">
			<h2>ARSIP</h2>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->

<!-- elibrary section -->
<div class="elibrary__section">
	<div class="container">
		<div class="body__section">
			<!-- elibrary body -->
			<div class="row elibrary__body">
				<!-- elibrary main -->
				<div class="elibrary__main col-lg-9 col-md-9 ps-lg-0 pe-lg-5 pe-md-4">
					<!-- elibrary root -->
					<div class="elibrary__root">
						<a href="/home/arsip">eLibrary</a>
						<i class="icofont-simple-right"></i>
						<a href="/home/arsipmatkul">Mata Kuliah</a>
					</div> <!-- end elibrary root -->

					<!-- head book -->
					<div class="head__eBook">
						<h3>Pengantar Ilmu dan Rekayasa Lingkungan</h3>
						<img src="/mainpage/images/fisika_dasar.jpg" alt="buku fisika dasar" class="img__eBook">
					</div> <!-- end head book -->

					<!-- elibrary content -->
					<div class="elibrary__content">
						<p class="head__item__eBook">Database Soal dan Pembahasan</p>
						<hr>

						<!-- elibrary cc -->
						<div class="elibrary__cc row">
							<!-- mb-4 item -->
							<div class="mb-4">
								<div class="item__eBook">
									<img src="/mainpage/images/book-2.jpg" alt="fisika dasar image" class="img__item__eBook">
									<div class="item__eBook__content">
										<a href="#" class="item__meta__link">UTS Pengantar Ilmu dan Rekayasa
											Lingkungan</a>
										<p>
											<span class="meta__item">Semester 1</span>
											<span class="meta__item">May 18, 2021</span>
											<span class="meta__item">9721 Download</span>
										</p>
									</div>
								</div> <!-- end item book -->
							</div> <!-- end mb-4 item -->

							<!-- mb-4 item -->
							<div class="mb-4">
								<div class="item__eBook">
									<img src="/mainpage/images/book-2.jpg" alt="fisika dasar image" class="img__item__eBook">
									<div class="item__eBook__content">
										<a href="#" class="item__meta__link">UTS Pengantar Ilmu dan Rekayasa
											Lingkungan</a>
										<p>
											<span class="meta__item">Semester 1</span>
											<span class="meta__item">May 18, 2021</span>
											<span class="meta__item">9721 Download</span>
										</p>
									</div>
								</div> <!-- end item book -->
							</div> <!-- end mb-4 item -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<!-- elibrary content -->
					<div class="elibrary__content">
						<p class="head__item__eBook">eBook</p>
						<hr>

						<!-- elibrary cc -->
						<div class="elibrary__cc row">
							<!-- mb-4 item -->
							<div class="mb-4">
								<div class="item__eBook">
									<img src="/mainpage/images/book-1.png" alt="fisika dasar image" class="img__item__eBook">
									<div class="item__eBook__content">
										<a href="#" class="item__meta__link">Modul Pengantar Ilmu dan Rekayasa
											Lingkungan</a>
										<p>
											<span class="meta__item">Semester 1</span>
											<span class="meta__item">May 18, 2021</span>
											<span class="meta__item">9721 Download</span>
										</p>
									</div>
								</div> <!-- end item book -->
							</div> <!-- end mb-4 item -->

							<!-- mb-4 item -->
							<div class="mb-4">
								<div class="item__eBook">
									<img src="/mainpage/images/book-1.png" alt="fisika dasar image" class="img__item__eBook">
									<div class="item__eBook__content">
										<a href="#" class="item__meta__link">Materi Lengkap Pengantar Ilmu dan
											Rekayasa Lingkungan</a>
										<p>
											<span class="meta__item">Semester 1</span>
											<span class="meta__item">May 18, 2021</span>
											<span class="meta__item">9721 Download</span>
										</p>
									</div>
								</div> <!-- end item book -->
							</div> <!-- end mb-4 item -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

				</div> <!-- end elibrary main -->

				<!-- elibrary aside -->
				<div class="elibrary__aside col-lg-3 col-md-3 pe-lg-0 ps-lg-4">
					<div class="position-sticky aside__sticky">
						<div class="date__elibrary">
							<i class="fas fa-calendar-alt"></i>
							<p>18 Agustus 2021</p>
						</div>
						<div class="search__elibrary">
							<form action="" class="d-flex align-items-center from__elibrary">
								<input type="text" class="sb__elibrary" placeholder="Search eBook" required>
								<i class="icofont-simple-right"></i>
								<input type="submit" value class="submit__elibrary">
							</form>
						</div>
						<p>Mohon maaf jika ada keterlambatan atas ketersediaan beberapa database e-Library, baik
							berupa eBook dan Bank Soal</p>
						<hr>
						<p>Masukkan kritik dan saran tentang e-Library</p>
						<a href="/home/kontak" class="link__ks">Kritik &amp; saran</a>
					</div> <!-- end aside sticky -->
				</div> <!-- end elibrary aside -->
			</div> <!-- end row -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end elibrary section -->



<?= $this->endSection(); ?>