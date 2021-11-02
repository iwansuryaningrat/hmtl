<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/admin/assets/img/hmtl.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="/admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['/admin/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/assets/css/atlantis.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/admin/assets/css/demo.css">


</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <a href="/admin/index" class="logo">
                    <img src="/admin/assets/img/hmtl.ico" alt="navbar brand" class="navbar-brand" />
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more">
                    <i class="icon-options-vertical"></i>
                </button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header (Done) -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">

                    <!-- Search -->
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                        <!-- Messages -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <!-- <a href="#" class="small">Mark all as read</a> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="/admin/assets/img/jm_denis.jpg" alt="Img Profile" />
                                                </div>
                                                <div class="notif-content">
                                                    <!-- Nama -->
                                                    <span class="subject">Jimmy Denis</span>
                                                    <!-- Subjek -->
                                                    <span class="block"> How are you ? </span>
                                                    <!-- Waktu Tutorial : https://www.dumetschool.com/blog/cara-menghitung-selisih-waktu-dengan-fungsi-date-diff-php -->
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="/admin/assets/img/chadengle.jpg" alt="Img Profile" />
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block"> Ok, Thanks ! </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="/admin/assets/img/mlane.jpg" alt="Img Profile" />
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="/admin/assets/img/talha.jpg" alt="Img Profile" />
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block"> Hi, Apa Kabar ? </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="/admin/pesan">See all messages<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Notification -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">
                                        You have 4 new notification
                                    </div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary">
                                                    <i class="fa fa-user-plus"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block"> New user registered </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success">
                                                    <i class="fa fa-comment"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="/admin/assets/img/profile2.jpg" alt="Img Profile" />
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block"> Farrah liked Admin </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Quick Actions -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-danger rounded-circle">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <span class="text">Calendar</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-warning rounded-circle">
                                                        <i class="fas fa-map"></i>
                                                    </div>
                                                    <span class="text">Maps</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-info rounded-circle">
                                                        <i class="fas fa-file-excel"></i>
                                                    </div>
                                                    <span class="text">Reports</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-success rounded-circle">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <span class="text">Emails</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-primary rounded-circle">
                                                        <i class="fas fa-file-invoice-dollar"></i>
                                                    </div>
                                                    <span class="text">Invoice</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-secondary rounded-circle">
                                                        <i class="fas fa-credit-card"></i>
                                                    </div>
                                                    <span class="text">Payments</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Profile -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img src="/admin/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded" />
                                            </div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p>
                                                <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">Edit Profile</a>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Profile Done -->
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">

                    <!-- User -->
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard -->
                    <ul class="nav nav-primary">

                        <!-- Dashboard -->
                        <li class="nav-item <?php if ($tab == 'dashboard') : echo 'active';
                                            endif; ?>">
                            <a data-toggle="collapse" href="/admin/index" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <!-- Dashboard Done -->

                        <!-- Profile HMTL -->
                        <li class="nav-item <?php if ($tab == 'hmtl') : echo 'active';
                                            endif; ?>">
                            <a data-toggle="collapse" href="#profile">
                                <i class="fas fa-id-card-alt"></i>
                                <p>Profile HMTL</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="profile">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/admin/kabinet">
                                            <span class="sub-item">Kabinet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/bidang">
                                            <span class="sub-item">Bidang</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/pengurus">
                                            <span class="sub-item">Pengurus</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/proker">
                                            <span class="sub-item">Proker</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Profile Done -->

                        <!-- Biro -->
                        <li class="nav-item <?php if ($tab == 'biro') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/biro">
                                <i class="fas fa-users"></i>
                                <p>Biro</p>
                            </a>
                        </li>
                        <!-- Biro Done -->

                        <!-- UKM -->
                        <li class="nav-item <?php if ($tab == 'ukm') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/ukm">
                                <i class="fas fa-users"></i>
                                <p>UKM</p>
                            </a>
                        </li>
                        <!-- UKM Done -->

                        <!-- News -->
                        <li class="nav-item <?php if ($tab == 'news') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/news">
                                <i class="fas fa-newspaper"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <!-- News Done -->

                        <!-- Kalender -->
                        <li class="nav-item <?php if ($tab == 'kalender') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/kalender">
                                <i class="far fa-calendar-alt"></i>
                                <p>Kalendar</p>
                            </a>
                        </li>
                        <!-- Kalender Done -->

                        <!-- Arsip -->
                        <li class="nav-item <?php if ($tab == 'arsip') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/arsip">
                                <i class="fas fa-book"></i>
                                <p>Arsip</p>
                            </a>
                        </li>
                        <!-- Arsip Done -->

                        <!-- Pesan -->
                        <li class="nav-item <?php if ($tab == 'pesan') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/pesan">
                                <i class="fas fa-envelope"></i>
                                <p>Pesan</p>
                                <span class="badge badge-info">4</span>
                            </a>
                        </li>
                        <!-- Pesan Done -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar (Done) -->

        <!-- Main Panel -->
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Daftar Berita</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="/admin/index">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/news">Berita</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Preview -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">News Preview</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-berita-tab-nobd" data-toggle="pill" href="#pills-berita-nobd" role="tab" aria-controls="pills-berita-nobd" aria-selected="true">Berita Terkini</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-akademik-tab-nobd" data-toggle="pill" href="#pills-akademik-nobd" role="tab" aria-controls="pills-akademik-nobd" aria-selected="false">Info Akademik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-beasiswa-tab-nobd" data-toggle="pill" href="#pills-beasiswa-nobd" role="tab" aria-controls="pills-beasiswa-nobd" aria-selected="false">Info Beasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-pressrelease-tab-nobd" data-toggle="pill" href="#pills-pressrelease-nobd" role="tab" aria-controls="pills-pressrelease-nobd" aria-selected="false">Press Release</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                                        <div class="tab-pane fade show active" id="pills-berita-nobd" role="tabpanel" aria-labelledby="pills-berita-tab-nobd">
                                            <div class="news__body">
                                                <!-- news content -->
                                                <div class="news__content">
                                                    <div id="news-content" class="owl-carousel owl-theme">
                                                        <div class="mt-2 mb-4">
                                                            <div class="news__card mx-2 mx-md-3">
                                                                <div class="news__card__img">
                                                                    <div class="img__sec" style="background-image: url(/admin/assets/img/news-1.jpg);"></div> <!-- end img sec -->
                                                                </div> <!-- end news card img -->
                                                                <div class="news__card__body">
                                                                    <div class="news__date">
                                                                        <i class="far fa-calendar-alt"></i>15/07/2021
                                                                    </div> <!-- end news date -->
                                                                    <div class="news__title">
                                                                        Rekor Positif Covid-19 Meroket, Tembus 54.517 Kasus
                                                                    </div> <!-- end news title -->
                                                                    <div class="news__desc">
                                                                        Positif Covid-19 kembali memecahkan rekor dengan tambahan sebesar 54.517 kasus.
                                                                    </div> <!-- news desc -->
                                                                    <a href="#" class="news__link">
                                                                        <i class="ai-circle-chevron-right"></i>Selengkapnya
                                                                    </a> <!-- end news link -->
                                                                </div> <!-- end news card body -->
                                                            </div> <!-- end news card -->
                                                        </div> <!-- end m -->

                                                        <div class="mt-2 mb-4">
                                                            <div class="news__card mx-2 mx-md-3">
                                                                <div class="news__card__img">
                                                                    <div class="img__sec" style="background-image: url(/admin/assets/img/news-2.jpg);"></div> <!-- end img sec -->
                                                                </div> <!-- end news card img -->
                                                                <div class="news__card__body">
                                                                    <div class="news__date">
                                                                        <i class="far fa-calendar-alt"></i>20/07/2021
                                                                    </div> <!-- end news date -->
                                                                    <div class="news__title">
                                                                        Fitur Pengukur Suhu Tubuh iPhone Terbaru Bakal Hadir
                                                                    </div> <!-- end news title -->
                                                                    <div class="news__desc">
                                                                        Bahkan Apple telah membuat paten kamera serta pemrosesan data citra. Hal ini demi pengukuran suhu.
                                                                    </div> <!-- news desc -->
                                                                    <a href="#" class="news__link">
                                                                        <i class="ai-circle-chevron-right"></i>Selengkapnya
                                                                    </a> <!-- end news link -->
                                                                </div> <!-- end news card body -->
                                                            </div> <!-- end news card -->
                                                        </div> <!-- end m -->

                                                        <div class="mt-2 mb-4">
                                                            <div class="news__card mx-2 mx-md-3">
                                                                <div class="news__card__img">
                                                                    <div class="img__sec" style="background-image: url(/admin/assets/img/news-3.jpg);"></div> <!-- end img sec -->
                                                                </div> <!-- end news card img -->
                                                                <div class="news__card__body">
                                                                    <div class="news__date">
                                                                        <i class="far fa-calendar-alt"></i>01/08/2021
                                                                    </div> <!-- end news date -->
                                                                    <div class="news__title">
                                                                        Prediksi Terbaru Menkes Kapan RI Capai Puncak Corona
                                                                    </div> <!-- end news title -->
                                                                    <div class="news__desc">
                                                                        Menteri Kesehatan Budi Gunadi Sadikin menyebut kemungkinan puncak lonjakan kasus COVID-19.
                                                                    </div> <!-- news desc -->
                                                                    <a href="#" class="news__link">
                                                                        <i class="ai-circle-chevron-right"></i>Selengkapnya
                                                                    </a> <!-- end news link -->
                                                                </div> <!-- end news card body -->
                                                            </div> <!-- end news card -->
                                                        </div> <!-- end m -->
                                                    </div> <!-- end news content owl carousel -->
                                                </div> <!-- end news content -->
                                            </div> <!-- end news body -->
                                        </div>
                                        <div class="tab-pane fade" id="pills-akademik-nobd" role="tabpanel" aria-labelledby="pills-akademik-tab-nobd">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="pills-beasiswa-nobd" role="tabpanel" aria-labelledby="pills-beasiswa-tab-nobd">
                                            <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                            <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                        </div>
                                        <div class="tab-pane fade" id="pills-pressrelease-nobd" role="tabpanel" aria-labelledby="pills-pressrelease-tab-nobd">
                                            <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                            <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title"> </h4>
                                        <a href="" class="ml-auto">
                                            <button class="btn btn-primary btn-round ml-auto">
                                                <i class="fa fa-plus"></i>
                                                Tambah Berita
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Kategori</th>
                                                    <th>Highlight</th>
                                                    <th>Preview</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Kategori</th>
                                                    <th>Highlight</th>
                                                    <th>Preview</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($pesan as $pesan) : ?>
                                                    <tr>
                                                        <td><?= $pesan['judul']; ?></td>
                                                        <td><?= $pesan['kategori']; ?></td>
                                                        <td><?= $pesan['highlight']; ?></td>
                                                        <td><?= $pesan['preview']; ?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="#">
                                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </a>
                                                                <a href="#">
                                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                <p>Copyright &copy; 2021 | Himpunan Mahasiswa Teknik Lingkungan Universitas Diponegoro</p>
            </footer>
        </div>


    </div>
    <!--   Core JS Files   -->
    <script src="/admin/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="/admin/assets/js/core/popper.min.js"></script>
    <script src="/admin/assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Bootstrap Toggle -->
    <script src="/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="/admin/assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Atlantis JS -->
    <script src="/admin/assets/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="/admin/assets/js/setting-demo2.js"></script>

    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
</body>

</html>