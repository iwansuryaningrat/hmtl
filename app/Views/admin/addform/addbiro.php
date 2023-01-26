<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Tambah Biro</h4>
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
                        <a href="/admin/biro">Data Biro</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/add/addbiroform">Formulir Tambah Biro</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Biro</div>
                            <div class="card-category">Masukkan data biro dengan sebenar-benarnya</div>
                        </div>
                        <form action="/add/addbiro" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="nama" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama biro..." required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end nama -->

                                <div class="form-group form-show-validation row">
                                    <label for="deskripsi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">Masukkan Deskripsi Biro</textarea>
                                    </div>
                                </div> <!-- end deskripsi -->

                                <div class="form-group form-show-validation row">
                                    <label for="ketua" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Ketua <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="ketua" name="ketua" placeholder="Masukkan nama ketua biro..." required autofocus>
                                    </div>
                                </div> <!-- end ketua -->

                                <div class="form-group form-show-validation row">
                                    <label for="angkatan_ketua" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Angkatan Ketua <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="angkatan_ketua" name="angkatan_ketua" placeholder="Masukkan Angkatan Ketua biro..." required autofocus>
                                    </div>
                                </div> <!-- end angkatan_ketua -->

                                <div class="form-group form-show-validation row">
                                    <label for="wakil" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Wakil <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="wakil" name="wakil" placeholder="Masukkan nama wakil biro..." required autofocus>
                                    </div>
                                </div> <!-- end wakil -->

                                <div class="form-group form-show-validation row">
                                    <label for="angkatan_wakil" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Angkatan Wakil <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="angkatan_wakil" name="angkatan_wakil" placeholder="Masukkan angkatan wakil biro..." required autofocus>
                                    </div>
                                </div> <!-- end angkatan_wakil -->

                                <div class="form-group form-show-validation row">
                                    <label for="ig" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Instagram <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="ig" name="ig" placeholder="Masukkan Link Instagram..." required autofocus>
                                    </div>
                                </div> <!-- end ig -->

                                <div class="form-group form-show-validation row">
                                    <label for="yt" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Youtube</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="yt" name="yt" placeholder="Masukkan Link Youtube..." autofocus>
                                    </div>
                                </div> <!-- end yt -->

                                <div class="form-group form-show-validation row">
                                    <label for="line" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Line</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="line" name="line" placeholder="Masukkan Link Line..." autofocus>
                                    </div>
                                </div> <!-- end line -->

                                <div class="form-group form-show-validation row">
                                    <label for="twitter" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Twitter</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukkan Link Twitter..." autofocus>
                                    </div>
                                </div> <!-- end twitter -->

                                <div class="form-group form-show-validation row">
                                    <label for="fb" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Facebook</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="fb" name="fb" placeholder="Masukkan Link Facebook..." autofocus>
                                    </div>
                                </div> <!-- end fb -->

                                <div class="form-group form-show-validation row">
                                    <label for="web" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Link Website</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="web" name="web" placeholder="Masukkan Link Website..." autofocus>
                                    </div>
                                </div> <!-- end web -->

                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Gambar <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*" required>

                                            <label for="image" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/berita" class="btn btn-danger" style="border-radius: 100px;">
                                            Batal
                                        </a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Tambah" style="border-radius: 100px;">
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
    $('#birth').datetimepicker({
        format: 'MM/DD/YYYY'
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