<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Pesan</h4>
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
                        <a href="/admin/pesan">Pesan dari <?= $pesan['nama']; ?></a>
                    </li>
                </ul>
            </div>

            <!-- Detail Pesan -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pesan Masuk dari <?= $pesan['nama']; ?></h4>
                        </div>
                        <form action="/edit/updatepesan/<?= $pesan['id']; ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Nama
                                            </label>
                                            <p class="form-control-static"><?= $pesan['nama']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">
                                                Subject
                                            </label>
                                            <p class="form-control-static"><?= $pesan['subject']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Email
                                            </label>
                                            <p class="form-control-static"><?= $pesan['email']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">
                                                Telepon
                                            </label>
                                            <p class="form-control-static"><?= $pesan['telp']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Pesan
                                            </label>
                                            <p class="form-control-static" name="pesan" id="pesan" value='<?= $pesan['pesan']; ?>'><?= $pesan['pesan']; ?></p>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-check">
                                            <label>Apakah Anda Ingin Membalas Pesan Ini?</label><br />
                                            <label class="form-radio-label">
                                                <input class="form-radio-input" type="radio" name="reply" id="reply" value="yes" checked="">
                                                <span class="form-radio-sign">Yes</span>
                                            </label>
                                            <label class="form-radio-label ml-3">
                                                <input class="form-radio-input" type="radio" name="reply" id="reply" value="no">
                                                <span class="form-radio-sign">No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <input class="btn btn-primary ml-4" type="submit" value="Ok" style="border-radius: 100px;">
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

<?= $this->endSection(); ?>