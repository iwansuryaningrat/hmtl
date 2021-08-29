<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="header__dashboard">
	<div class="container">
		<div class="body__section">
			<h1>Selamat Datang</h1>
			<h3>Di Website Resmi HMTL Undip</h3>
			<h6>Sekretariat: Gedung Kuliah Bersama Lantai 3<br>Jl. Prof Soedarto, S.H Tembalang Semarang 50275<br>Email: hmtlundip@student.undip.ac.id</h6>
			<!-- hero contact -->
			<div class="hero__contact">
				<i class="icofont-line"></i>
				<span>@sfv8734j</span>
				<i class="icofont-instagram"></i>
				<span>hmtlundip</span>
				<i class="icofont-spotify"></i>
				<i class="icofont-linkedin"></i>
				<i class="icofont-youtube-play"></i>
				<span>Hmtl Undip</span>
			</div> <!-- end hero contact -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->


<!-- quote section -->
<!-- FINISH -->
<div class="quote__section">
	<div class="container">
		<div class="body__section">
			<div class="quote__body">
				<h4>Kabinet Askara Cita - HMTL 2021</h4>
				<h4>“We have a powerful potential in our youth, and we must have the courage to change old ideas and practices so that we may direct their power toward good ends.”</h4>
			</div> <!-- end quote body -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end quote section -->


<!-- news section -->
<div class="news__section">
	<div class="container">
		<div class="body__section">
			<!-- news header -->
			<div class="title__section text-center">
				<h2>Berita Terkini</h2>
				<p>Temukan berbagai berita maupun artikel terbaik dan terkini</p>
			</div> <!-- end news header -->

			<!-- news body -->
			<div class="news__body">
				<!-- news content -->
				<div class="news__content">
					<!-- code -->
				</div> <!-- end news content -->

				<!-- button selengkapnya -->
				<div class="btn__section">
					<a href="/home/berita" class="more__btn">Lebih Banyak</a>
				</div> <!-- end button selengkapnya -->
			</div> <!-- end news body -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end news section -->


<!-- proker section -->
<div class="proker__section">
	<div class="container">
		<div class="body__section">
			<!-- proker header -->
			<div class="title__section text-center">
				<h2>Program Kerja</h2>
				<p>Rencana Kegiatan Himpunan Mahasiswa Teknik Lingkungan</p>
			</div> <!-- end proker header -->

			<!-- proker body -->
			<div class="proker__body">
				<!-- proker content -->
				<div class="proker__content">
					<!-- code -->
				</div> <!-- end proker content -->

				<!-- button selengkapnya -->
				<div class="btn__section">
					<a href="/home/hmtl" class="more__btn">Lebih Banyak</a>
				</div> <!-- end button selengkapnya -->
			</div> <!-- proker body -->
		</div> <!-- end body section -->
	</div> <!-- end container -->
</div> <!-- end proker section -->

<?= $this->endSection(); ?>