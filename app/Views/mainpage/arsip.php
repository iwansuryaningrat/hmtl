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
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 1') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="/home/arsipmatkul/<?= $row['id'] ?>" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>
						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt2" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 2</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt2">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 2') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>
						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt3" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 3</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt3">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 3') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt4" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 4</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt4">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 4') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt5" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 5</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt5">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 5') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt6" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 6</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt6">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 6') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt7" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 7</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt7">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 7') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-smt8" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Semester 8</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-smt8">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Semester 8') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-odd" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pilihan Semester Ganjil</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-odd">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Pilihan Semester Ganjil') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-even" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pilihan Semester Genap</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-even">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Pilihan Semester Genap') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?> SKS</div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-umum" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">Pengetahuan Umum</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-umum">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Pengetahuan Umum') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?></div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

						</div> <!-- end elibrary cc -->
					</div> <!-- end elibrary content -->

					<div class="elibrary__content">
						<a class="elibrary__link" data-bs-toggle="collapse" href="#collapse-motivasi" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="smt__title">eBook</div>
							<i class="icofont-simple-down icon-down"></i>
						</a> <!-- end elibrary link -->

						<div class="elibrary__cc row collapse" id="collapse-motivasi">
							<?php foreach ($data as $row) :
								if ($row['kategori'] == 'Pengetahuan Umum') : ?>
									<div class="elibrary__course col-lg-4 col-md-6 mb-4">
										<div class="course__card">
											<a href="#" class="elibrary__card">
												<div class="course__photo img__sec" style="background-image: url(/mainpage/images/fisika_dasar.jpg);"></div>
												<!-- end course photo -->
												<div class="course__content">
													<div class="cc__left">
														<p><?= $row['kode_matkul'] ?></p>
														<h6><?= $row['matkul'] ?></h6>
													</div>
													<div class="cc__rigt">
														<div class="cc__sks"><?= $row['sks'] ?></div>
													</div>
												</div> <!-- end course content -->
											</a> <!-- end elibrary card -->
										</div> <!-- end course card -->
									</div> <!-- end elibrary course -->
							<?php endif;
							endforeach; ?>

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