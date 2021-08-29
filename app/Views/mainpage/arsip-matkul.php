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
					<div class="elibrary__root">
						<a href="/home/arsip">eLibrary</a>
						<i class="icofont-simple-right"></i>
						<a href="/home/arsipmatkul">Mata Kuliah</a>
					</div>

					<div class="head__eBook">
						<h3>Pengantar Ilmu dan Rekayasa Lingkungan</h3>
					</div>

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt1" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 1</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt1">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div> <!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00001</p>
												<h6>Pendidikan Agama</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

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
						<p>Mohon maaf jika ada keterlambatan atas ketersediaan beberapa database e-Library, baik berupa eBook dan Bank Soal</p>
						<hr>
						<p>Masukkan kritik dan saran tentang e-Library</p>
						<a href="kontak.html#contact-section" class="link__ks">Kritik &amp; saran</a>
					</div> <!-- end aside sticky -->
				</div> <!-- end elibrary aside -->
			</div> <!-- end row -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end elibrary section -->



<?= $this->endSection(); ?>