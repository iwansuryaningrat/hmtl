<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="/admin/assets/img/hmtl.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="/admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Lato:300,400,700,900"],
            },
            custom: {
                families: [
                    "Flaticon",
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["/admin/assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/atlantis.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/admin/assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <a href="/admin/index" class="logo">
                    <img src="/admin/assets/img/logo-title-hmtl.svg" alt="navbar brand" class="navbar-brand" />
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
                            <a href="/admin-page">
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
                            <a data-toggle="collapse" href="#biro">
                                <i class="fas fa-users"></i>
                                <p>Biro</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="biro">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/admin/biro">
                                            <span class="sub-item">Daftar Biro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/prokerbiro">
                                            <span class="sub-item">Proker Biro</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Biro Done -->

                        <!-- UKM -->
                        <li class="nav-item <?php if ($tab == 'ukm') : echo 'active';
                                            endif; ?>">
                            <a data-toggle="collapse" href="#ukm">
                                <i class="fas fa-users"></i>
                                <p>UKM</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="ukm">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/admin/ukm">
                                            <span class="sub-item">Daftar UKM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/galeri">
                                            <span class="sub-item">Galeri UKM</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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

                        <!-- Arsip NOT FIX -->
                        <li class="nav-item <?php if ($tab == 'arsip') : echo 'active';
                                            endif; ?>">
                            <a data-toggle="collapse" href="#arsip">
                                <i class="fas fa-book"></i>
                                <p>Arsip</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="arsip">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/admin/#">
                                            <span class="sub-item">Daftar Matkul</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/#">
                                            <span class="sub-item">Daftar Arsip</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Arsip Done -->

                        <!-- Pesan -->
                        <li class="nav-item <?php if ($tab == 'pesan') : echo 'active';
                                            endif; ?>">
                            <a href="/admin/pesan">
                                <i class="fas fa-envelope"></i>
                                <p>Pesan</p>
                                <?php if ($jumlahpesan > 0) : ?>
                                    <span class="badge badge-info"><?= $jumlahpesan; ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                        <!-- Pesan Done -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar (Done) -->

        <!-- Main Panel -->
        <?= $this->renderSection('admin'); ?>

    </div>

    <!--   Core JS Files   -->
    <script src="/admin/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="/admin/assets/js/core/popper.min.js"></script>
    <script src="/admin/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="/admin/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="/admin/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="/admin/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="/admin/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="/admin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="/admin/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="/admin/assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="/admin/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="/admin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="/admin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="/admin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="/admin/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="/admin/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="/admin/assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="/admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="/admin/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="/admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Atlantis JS -->
    <script src="/admin/assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="/admin/assets/js/setting-demo.js"></script>
    <script src="/admin/assets/js/setting-demo2.js"></script>
    <script src="/admin/assets/js/demo.js"></script>

    <?= $this->renderSection('script'); ?>

</body>

</html>