<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Tambah Berita</h4>
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
                        <a href="/admin/news">Data Berita</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/add/addnewsform">Formulir Tambah Berita</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Berita</div>
                            <div class="card-category">Masukkan data barang dengan sebenar-benarnya</div>
                        </div>
                        <form action="/add/addnews" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="judul" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Judul <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Berita..." required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end judul -->

                                <div class="form-group form-show-validation row">
                                    <label for="highlight" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Highlight <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <select id="highlight" required class="form-control" name="highlight" required>
                                            <option hidden> -- Pilih Highlight --</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div> <!-- end highlight -->

                                <div class="form-group form-show-validation row">
                                    <label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <select id="kategori" required class="form-control" name="kategori" required>
                                            <option hidden> -- Pilih Kategori --</option>
                                            <option value="berita terkini">Berita Terkini</option>
                                            <option value="info akademik">Info Akademik</option>
                                            <option value="info beasiswa">Info Beasiswa</option>
                                            <option value="press release">Press Release</option>
                                        </select>
                                    </div>
                                </div> <!-- end kategori -->

                                <div class="form-group form-show-validation row">
                                    <label for="preview" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Preview <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="preview" id="preview" cols="30" rows="10">
												</textarea>
                                    </div>
                                </div> <!-- end preview -->

                                <div class="form-group form-show-validation row">
                                    <label for="isi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Isi <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="isi" id="isi" cols="30" rows="10">
												</textarea>
                                    </div>
                                </div> <!-- end isi -->

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
<script>
    $('#isi').summernote({
        placeholder: 'Tambahkan Berita',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });
</script>

<?= $this->endSection(); ?>