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
<!-- FINISH -->
<div class="elibrary__section">
	<div class="container">
		<div class="body__section">
			<!-- library header -->
			<div class="title__section text-center">
				<h3>eLibrary</h3>
				<p>Perpustakaan digital Departemen Teknik Lingkungan yang mempunyai koleksi eBook, soal-soal
					pembahasan maupun referensi buku dalam bentuk digital.</p>
			</div> <!-- end library header -->

			<!-- mobile search eLibrary -->
			<div class="msearch__elibrary d-sm-none">
				<form action="" class="d-flex align-items-center from__elibrary">
					<input type="text" class="sb__elibrary" placeholder="Search eBook" required>
					<i class="icofont-simple-right"></i>
					<input type="submit" value class="submit__elibrary">
				</form>
			</div> <!-- end mobile search eLibrary -->

			<!-- elibrary body -->
			<div class="row elibrary__body">
				<!-- elibrary main -->
				<div class="elibrary__main col-lg-9 col-md-9 ps-lg-0 pe-lg-5 pe-md-4">
					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt1" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 1</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt1">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
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

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00004</p>
												<h6>Bahasa Indonesia</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00005</p>
												<h6>Olah Raga</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">1 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00006</p>
												<h6>Bahasa Inggris</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21311</p>
												<h6>Matematika Rekayasa I</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00002</p>
												<h6>Pancasila</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21312</p>
												<h6>Fisika Dasar</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21313</p>
												<h6>Kimia Dasar</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00003</p>
												<h6>Kewarganegaraan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="/home/arsip-matkul" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21314</p>
												<h6>Pengantar Ilmu dan Rekayasa Lingkungan</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt2" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 2</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt2">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21321</p>
												<h6>Fisika Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21322</p>
												<h6>Kimia Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21323P</p>
												<h6>Menggambambar Teknik</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21324</p>
												<h6>Mekanika Rekayasa</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21325P</p>
												<h6>Mikrobiologi Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21326</p>
												<h6>Permodelan dan Pemrograman</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21327</p>
												<h6>Matematika Rekayasa II</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21328P</p>
												<h6>Mekanika Fluida</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt3" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 3</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt3">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21331</p>
												<h6>Mekanika Tanah dan Geoteknik</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21332</p>
												<h6>Pengetahuan Teknik Struktur</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21333</p>
												<h6>Statistika Teknik Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21334</p>
												<h6>Hidrologi dan Hidrogeologi</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21335P</p>
												<h6>Laboratorium Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21336</p>
												<h6>Satuan Operasi</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21337</p>
												<h6>Satuan Proses</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21338</p>
												<h6>Perpetaan</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt4" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 4</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt4">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21341</p>
												<h6>Pengelolaan Sumber Daya Air</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK2134P</p>
												<h6>Sistem Penyediaan Air Minum</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21343P</p>
												<h6>Plumbing</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21344</p>
												<h6>Pengendalian Pencemaran Udara</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21345</p>
												<h6>Manajemen Persampahan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21346</p>
												<h6>Ekonomi Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21347</p>
												<h6>Manajemen Proyek</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21348</p>
												<h6>Teknologi Bersih dan Minimasi Limbah</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt5" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 5</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt5">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21351</p>
												<h6>Pengolahan Sampah</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21352P</p>
												<h6>Penyaluran Air Buangan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21353P</p>
												<h6>Perencanaan Bangunan Pengolahan Air Minum</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21354</p>
												<h6>Pengelolaan Limbah Bahan Berbahaya dan Beracun</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21355P</p>
												<h6>Drainase Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21356</p>
												<h6>Pengelolaan Buangan Industri</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21357P</p>
												<h6>Kesehatan dan Keselamatan Kerja</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21358</p>
												<h6>Metodologi Riset</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt6" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 6</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt6">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21361P</p>
												<h6>Perencanaan Tempat Pengolahan Akhir Sampah</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21362P</p>
												<h6>Pemantauan dan Analisa Kualitas Udara</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21363P</p>
												<h6>Perencanaan Bangunan Pengolahan Air Buangan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21364P</p>
												<h6>Dokumen Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">3 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21365</p>
												<h6>Kapita Selekta</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21366</p>
												<h6>Pengembangan Masyarakat</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt7" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 7</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt7">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>UNW00007</p>
												<h6>Kewirausahaan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21371</p>
												<h6>Kebijakan dan Hukum Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21373P</p>
												<h6>Pengelolaan Kualitas Lingkungan</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>TLK21374</p>
												<h6>Sistem Manajemen Lingkungan</h6>
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

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-odd" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pilihan Semester Ganjil</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-odd">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>AAA00000</p>
												<h6>Mata Kuliah</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">9 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-even" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pilihan Semester Genap</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-even">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>AAA00000</p>
												<h6>Mata Kuliah</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">9 SKS</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-umum" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pengetahuan Umum</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-umum">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>AAA00000</p>
												<h6>Buku Pengetahuan Umum</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">1999</div>
											</div>
										</div> <!-- end course content -->
									</a> <!-- end elibrary card -->
								</div> <!-- end course card -->
							</div> <!-- end elibrary course -->

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-motivasi" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">eBook Motivasi</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-motivasi">
							<div class="elibrary__course col-lg-4 col-md-6 mb-4">
								<div class="course__card">
									<a href="#" class="elibrary__card">
										<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
										<!-- end course photo -->
										<div class="course__content">
											<div class="cc__left">
												<p>AAA00000</p>
												<h6>Buku Motivasi</h6>
											</div>
											<div class="cc__rigt">
												<div class="cc__sks">2021</div>
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