<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Website Himpunan Mahasiswa Teknik Lingkungan Fakultas Tenik Universitas Diponegoro. Menyajikan informasi seputar HMTL, berita aktual, organisasi, biro, kegiatan, maupun prestasi dari mahasiswa.">
	<meta name="author" content="hmtl undip">
	<meta name="keywords" content="hmtl,hmtlundip,HMTLundip,HMTLUNDIP,tekniklingkunganundip,himpunanmahasiswatekniklingkunganundip">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="HMTL UNDIP" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="Himpunan Mahasiwa Teknik Lingkungan UNDIP" /> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Website Himpunan Mahasiswa Teknik Lingkungan Fakultas Tenik Universitas Diponegoro. Menyajikan informasi seputar HMTL, berita aktual, organisasi, biro, kegiatan, maupun prestasi dari mahasiswa." /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

	<!-- Webpage Title -->
	<title>HMTL | Universitas Diponegoro</title>

	<!-- apple touch icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/mainpage/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/mainpage/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/mainpage/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/mainpage/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/mainpage/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/mainpage/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/mainpage/images/apple-touch-icon-180x180.png">

	<!-- Styles -->
	<link rel="stylesheet" href="/mainpage/css/bootstrap.css"> <!-- bootstrap styles -->
	<link rel="stylesheet" href="/mainpage/vendor/icofont/icofont.css"> <!-- icofont icon styles -->
	<link rel="stylesheet" href="/mainpage/vendor/fontawesome-free-5.15.3-web/css/all.css"> <!-- fontawesome icon styles -->
	<link rel="stylesheet" href="/mainpage/vendor/uicons-regular-straight/css/uicons-regular-straight.css"> <!-- flaticon regular straight icon styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> <!-- animate animation styles -->
	<link rel="stylesheet" href="/mainpage/css/owl.carousel.min.css"> <!-- owl carousel min -->
	<link rel="stylesheet" href="/mainpage/css/owl.theme.default.min.css"> <!-- owl carousel theme default min -->

	<link rel="stylesheet" href="/mainpage/css/styles.css"> <!-- custom styles -->

	<!-- Favicon  -->
	<link rel="icon" href="/mainpage/images/favicon-hmtl.ico">
</head>

<body>
	<!-- navigations -->
	<!-- FINISH -->
	<nav class="navbar nav__pt__pb navbar-expand-lg fixed-top navbar-light">
		<div class="container-fluid">
			<!-- logo navigation-->
			<a class="navbar-brand" href="index.html">
				<img src="/mainpage/images/logo-title-hmtl.svg" alt="alterlogo" height="36px">
			</a> <!-- end logo navigation -->

			<!-- right navigation mobile view -->
			<div class="right__navbar__toggler">
				<!-- button search mobile view-->
				<div class="btn__search mobile__view" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
					<i class="icofont-search-1"></i>
					<span class="btn__caption">Search</span>
				</div> <!-- end button search mobile view -->
				<!-- button menu -->
				<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fi-rs-menu-burger"></span>
				</button> <!-- end button menu -->
			</div> <!-- end right navigation mobile view -->

			<!-- navbar list -->
			<div class="collapse navbar-collapse" id="navbarWithDropdown">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link nav__font active" aria-current="page" href="index.html">
							<span>Beranda</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a href="profil.html" class="nav-link nav__font dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span>Profil</span>
							<i class="icofont-simple-down"></i>
						</a>
						<ul class="drop__menu dropdown-menu animate__animated animate__fadeIn animate__faster" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="drop__item dropdown-item" href="profil-hmtl.html">Himpunan Mahasiswa Teknik Lingkungan</a></li>
							<li><a class="drop__item dropdown-item" href="profil-biro.html">Biro Teknik Lingkungan</a></li>
							<li><a class="drop__item dropdown-item" href="profil-ukm.html">Unit Kegiatan Mahasiswa</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link nav__font" href="berita.html">
							<span>Berita</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav__font" href="kalender.html">
							<span>Kalender</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav__font" href="arsip.html">
							<span>Arsip</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav__font" href="kontak.html">
							<span>Kontak</span>
						</a>
					</li>
				</ul>
				<!-- button search -->
				<div class="btn__search" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
					<i class="icofont-search-1"></i>
					<span class="btn__caption">Search</span>
				</div> <!-- end button search -->
			</div> <!-- end navbar list -->
		</div> <!-- end container fluid -->
	</nav> <!-- end navigations -->


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
						<a href="berita.html" class="more__btn">Lebih Banyak</a>
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
						<a href="profil.html" class="more__btn">Lebih Banyak</a>
					</div> <!-- end button selengkapnya -->
				</div> <!-- proker body -->
			</div> <!-- end body section -->
		</div> <!-- end container -->
	</div> <!-- end proker section -->

	<?= $this->endSection(); ?>