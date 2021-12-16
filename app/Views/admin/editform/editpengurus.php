<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Edit Pengurus</h4>
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
                        <a href="/admin/pengurus">Data Pengurus</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/edit/editpengurusform/<?= $data['id']; ?>">Formulir Edit Pengurus</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Pengurus</div>
                            <div class="card-category">Masukkan data pengurus dengan sebenar-benarnya</div>
                        </div>
                        <form action="/edit/editpengurus/<?= $data['id']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="pengurus" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pengurus <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="pengurus" name="pengurus" placeholder="Masukkan nama pengurus..." value="<?= $data['pengurus']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end pengurus -->

                                <div class="form-group form-show-validation row">
                                    <label for="nim" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIM Pengurus <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim pengurus..." value="<?= $data['nim']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end nim -->

                                <div class="form-group form-show-validation row">
                                    <label for="bidangid" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Bidang <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <select id="bidangid" required class="form-control" name="bidangid" required>
                                            <option hidden> -- Pilih Bidang --</option>
                                            <?php foreach ($bidang as $row) : ?>
                                                <option value="<?= $row['id']; ?>" <?php if ($row['id'] == $data['bidangid']) echo 'selected'; ?>><?= $row['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> <!-- end bidangid -->

                                <div class="form-group form-show-validation row">
                                    <label for="jabatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jabatan <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan..." value="<?= $data['jabatan']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end jabatan -->

                                <div class="form-group form-show-validation row">
                                    <label for="angkatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Angkatan <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan angkatan..." value="<?= $data['angkatan']; ?>" required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end angkatan -->

                                <div class="form-group form-show-validation row">
                                    <label for="ig" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Instagram</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="ig" name="ig" placeholder="Masukkan link instagram..." value="<?= $data['ig']; ?>" autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end ig -->

                                <div class="form-group form-show-validation row">
                                    <label for="linkedin" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">LinkedIn</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Masukkan link linkedin..." value="<?= $data['linkedin']; ?>" autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end linkedin -->

                                <div class="form-group form-show-validation row">
                                    <label for="twitter" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Twitter</label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukkan link twitter..." value="<?= $data['twitter']; ?>" autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end twitter -->

                                <div class="form-group form-show-validation row">
                                    <label for="isActive" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Apakah Masih aktif? <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <select id="isActive" required class="form-control" name="isActive" required>
                                            <option hidden> -- Pilih Status --</option>
                                            <option value="Ya" <?php if ($data['isActive'] == 'Ya') echo 'selected'; ?>>Ya</option>
                                            <option value="Tidak" <?php if ($data['isActive'] == 'Tidak') echo 'selected'; ?>>Tidak</option>
                                        </select>
                                    </div>
                                </div> <!-- end isActive -->

                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Foto <span class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview" width="100" height="100" src="/img/pengurus/<?= $data['foto']; ?>" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*" required>

                                            <label for="image" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto</label>
                                        </div>
                                    </div>
                                </div>

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