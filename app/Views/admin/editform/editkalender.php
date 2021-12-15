<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Edit Kegiatan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/admin-page">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/kalender">Data Kegiatan</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/add/editkalenderform/<?= $data['id']; ?>">Formulir Edit Kegiatan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Kegiatan</div>
                            <div class="card-category">Masukkan data kegiatan dengan sebenar-benarnya</div>
                        </div>
                        <form action="/edit/editkegiatan/<?= $data['id']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <select id="kategori" required class="form-control" name="kategori" required>
                                            <option hidden> -- Pilih Kategori --</option>
                                            <option value="akademik" <?php if ($data['kategori'] == 'akademik') echo 'selected'; ?>>Akademik</option>
                                            <option value="kegiatan" <?php if ($data['kategori'] == 'kegiatan') echo 'selected'; ?>>Kegiatan</option>
                                        </select>
                                    </div>
                                </div> <!-- end kategori -->

                                <div class="form-group form-show-validation row">
                                    <label for="kegiatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Kegiatan <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan nama kegiatan..." value="<?= $data['kegiatan']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end kegiatan -->

                                <div class="form-group form-show-validation row">
                                    <label for="tanggal" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Kegiatan <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal']; ?>" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-calendar-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end Tanggal -->

                                <div class="form-group form-show-validation row">
                                    <label for="keterangan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Tambahkan keterangan..." value="<?= $data['keterangan']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end keterangan -->

                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/kalender" class="btn btn-danger" style="border-radius: 100px;">
                                            Batal
                                        </a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Edit" style="border-radius: 100px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | Himpunan Mahasiswa Teknik Lingkungan Universitas Diponegoro</p>
    </footer>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
    $('#tanggal').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $('#state').select2({
        theme: "bootstrap"
    });

    /* validate */

    // validation when select change
    $("#state").change(function() {
        $(this).valid();
    })

    // validation when inputfile change
    $("#uploadImg").on("change", function() {
        $(this).parent('form').validate();
    })

    $("#exampleValidation").validate({
        validClass: "success",
        rules: {
            gender: {
                required: true
            },
            confirmpassword: {
                equalTo: "#password"
            },
            birth: {
                date: true
            },
            uploadImg: {
                required: true,
            },
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
    });
</script>

<?= $this->endSection(); ?>