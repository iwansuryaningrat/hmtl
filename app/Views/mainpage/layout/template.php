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
    <meta property="og:title" content="Kontak Himpunan Mahasiswa Teknik Lingkungan UNDIP" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Website Himpunan Mahasiswa Teknik Lingkungan Fakultas Tenik Universitas Diponegoro. Menyajikan informasi seputar HMTL, berita aktual, organisasi, biro, kegiatan, maupun prestasi dari mahasiswa." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?= $title; ?></title>

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
    <link rel="stylesheet" href="/mainpage/vendor/fontawesome-free-5.15.3-web/css/all.css">
    <!-- fontawesome icon styles -->
    <link rel="stylesheet" href="/mainpage/vendor/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <!-- flaticon bold rounded icon styles -->
    <link rel="stylesheet" href="/mainpage/vendor/uicons-regular-straight/css/uicons-regular-straight.css">
    <!-- flaticon regular straight icon styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- animate animation styles -->
    <link rel="stylesheet" href="/mainpage/css/owl.carousel.min.css"> <!-- owl carousel min -->
    <link rel="stylesheet" href="/mainpage/css/owl.theme.default.min.css"> <!-- owl carousel theme default min -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css" integrity="sha256-zsz1FbyNCtIE2gIB+IyWV7GbCLyKJDTBRz0qQaBSLxM=" crossorigin="anonymous"> <!-- fullcalendar styles -->

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
            <a class="navbar-brand" href="/">
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
                        <a class="nav-link nav__font <?php if ($tab == 'index') echo 'active'; ?> " aria-current="page" href="/">
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="/home/profil" class="nav-link nav__font dropdown-toggle <?php if ($tab == 'profil') echo 'active'; ?> " id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Profil</span>
                            <i class="icofont-simple-down"></i>
                        </a>
                        <ul class="drop__menu dropdown-menu animate__animated animate__fadeIn animate__faster" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="drop__item dropdown-item" href="/home/hmtl">Himpunan Mahasiswa Teknik Lingkungan</a></li>
                            <li><a class="drop__item dropdown-item" href="/home/biro">Biro Teknik Lingkungan</a></li>
                            <li><a class="drop__item dropdown-item" href="/home/ukm">Unit Kegiatan Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__font <?php if ($tab == 'berita') echo 'active'; ?> " href="/home/berita">
                            <span>Berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__font <?php if ($tab == 'kalender') echo 'active'; ?> " href="/home/kalender">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__font <?php if ($tab == 'arsip') echo 'active'; ?> " href="/home/arsip">
                            <span>Arsip</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__font <?php if ($tab == 'kontak') echo 'active'; ?> " href="/home/kontak">
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


    <?= $this->renderSection('mainpage'); ?>


    <!-- footer -->
    <!-- FINISH -->
    <footer>
        <div class="container">
            <!-- left footer -->
            <div class="left__footer">
                <!-- lef footer image -->
                <div class="left__img">
                    <img src="/mainpage/images/Logo-hmtl-full.png" alt="alter-logo-hmtl-full">
                </div> <!-- end lef footer image -->
                <!-- left footer content -->
                <div class="left__content">
                    <a href="/">Himpunan Mahasiswa<br>Teknik Lingkungan UNDIP</a>
                    <p>Kabinet Askara Cita</p>
                    <p>Gedung Kuliah Bersama Lantai 3<br>Jl. Prof Soedarto, S.H Tembalang Semarang 50275</p>
                </div> <!-- end left footer content -->
            </div> <!-- end left footer -->

            <!-- right footer -->
            <div class="right__footer">
                <!-- quick link -->
                <div class="quick__links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/home/profil">Profil</a></li>
                        <li><a href="/home/berita">Berita</a></li>
                        <li><a href="/home/kalender">Kalender</a></li>
                        <li><a href="/home/arsip">Arsip</a></li>
                        <li><a href="/home/kontak">Kontak</a></li>
                    </ul>
                </div> <!-- end quick link -->
                <!-- contact us -->
                <div class="contact__us">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="https://api.whatsapp.com/send/?phone=6282314497878&text&app_absent=0" target="_blank">+62 823 1449
                                7878 (Humas)</a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=6282378781414&text&app_absent=0" target="_blank">+62 823 7878
                                1414 (Humas)</a></li>
                        <li><a href="mailto:info@hmtlundip.org" target="_blank">info@hmtlundip.org</a></li>
                        <li><a href="mailto:hmtlundip@student.undip.ac.id" target="_blank">hmtlundip@student.undip.ac.id</a></li>
                    </ul>
                </div> <!-- end contact us -->
                <!-- social connect -->
                <div class="social__connect">
                    <h5>Social Connect</h5>
                    <ul>
                        <li><a href="https://lin.ee/1I0669e" target="_blank"><i class="icofont-line"></i></a></li>
                        <li><a href="http://bit.ly/LinkedinHMTLUNDIP" target="_blank"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCTaPUsgMZ7zhE7ppnrI3iAA" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                        <li><a href="https://open.spotify.com/show/1QYjVqMmu31mIS2T2WY555?si=do6hUAx6RN6pVco9I69kZw" target="_blank"><i class="icofont-spotify"></i></a></li>
                        <li><a href="https://www.instagram.com/hmtlundip/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                    </ul>
                </div> <!-- end social connect -->
            </div> <!-- end right footer -->
        </div> <!-- end container -->

        <!-- bottom footer -->
        <div class="bottom__footer text-center">
            <p>Copyright &copy; 2021 | Himpunan Mahasiswa Teknik Lingkungan Universitas Diponegoro</p>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->


    <!-- search section offcanvas -->
    <!-- FINISH -->
    <div class="offcanvas search__section offcanvas-top" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <!-- offcanvas body -->
        <div class="search__body offcanvas-body">
            <div class="container">
                <p class="search__font">Search for something</p>
                <form action="" class="search__form">
                    <input type="search" class="search__field" placeholder="Keywords" required>
                    <input type="submit" class="search__submit" value="Search">
                </form>
            </div> <!-- end of container -->
        </div> <!-- end of offcanvas-body -->
    </div> <!-- end of search section offcanvas -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jquery 3.5.1 Gcdn scripts -->
    <script src="/mainpage/js/bootstrap.bundle.js"></script> <!-- bootstrap scripts -->
    <script src="/mainpage/js/owl.carousel.min.js"></script> <!-- owl carousel min scripts -->
    <script src="https://unpkg.com/akar-icons-fonts"></script> <!-- akar icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-zoom/1.0.6/medium-zoom.min.js" integrity="sha512-N9IJRoc3LaP3NDoiGkcPa4gG94kapGpaA5Zq9/Dr04uf5TbLFU5q0o8AbRhLKUUlp8QFS2u7S+Yti0U7QtuZvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- medium scripts -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js" integrity="sha256-XOMgUu4lWKSn8CFoJoBoGd9Q/OET+xrfGYSo+AKpFhE=" crossorigin="anonymous"></script> <!-- fullcalendar scripts -->

    <script src="/mainpage/js/scripts.js"></script> <!-- Custom scripts -->

    <!-- Custom Script at Page -->
    <?= $this->renderSection('script'); ?>
</body>

</html>