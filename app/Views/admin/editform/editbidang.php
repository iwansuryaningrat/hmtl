<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Edit Bidang</h4>
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
                        <a href="/admin/bidang">Data Bidang</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/edit/editbidangform/<?= $data['id']; ?>">Formulir Edit Bidang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Bidang</div>
                            <div class="card-category">Masukkan data bidang dengan sebenar-benarnya</div>
                        </div>
                        <form action="/edit/editbidang/<?= $data['id']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="nama" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Bidang <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama bidang..." value="<?= $data['nama']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end nama -->

                                <div class="form-group form-show-validation row">
                                    <label for="profil" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Profil <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="profil" id="profil" cols="30" rows="10"><?= $data['profil']; ?></textarea>
                                    </div>
                                </div> <!-- end profil -->

                                <div class="form-group form-show-validation row">
                                    <label for="deskripsi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $data['deskripsi']; ?></textarea>
                                    </div>
                                </div> <!-- end deskripsi -->

                                <div class="form-group form-show-validation row">
                                    <label for="tujuan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tujuan <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="tujuan" id="tujuan" cols="30" rows="10"></textarea>
                                    </div>
                                </div> <!-- end tujuan -->

                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/bidang" class="btn btn-danger" style="border-radius: 100px;">
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
    $('#tujuan').summernote({
        placeholder: 'Tambahkan Tujuan Bidang',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });
</script>

<?= $this->endSection(); ?>