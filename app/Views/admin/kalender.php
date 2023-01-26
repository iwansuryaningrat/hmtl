<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kalender</h4>
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
                        <a href="/admin/kalender">Daftar Kegiatan</a>
                    </li>
                </ul>
            </div>

            <!-- Kalender Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Kegiatan</h4>
                                <a href="/add/addkalenderform" class="ml-auto">
                                    <button class="btn btn-primary btn-round ml-auto">
                                        <i class="fa fa-plus"></i>
                                        Tambah Kegiatan
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($kalender as $data) : ?>
                                            <tr>
                                                <td><?= $data['kegiatan']; ?></td>
                                                <td><?= $data['kategori']; ?></td>
                                                <td><?= $data['tanggal']; ?></td>
                                                <td><?= $data['keterangan']; ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="/edit/editkalenderform/<?= $data['id']; ?>">
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="/delete/deletekalender/<?= $data['id']; ?>">
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

<?php if (session()->getFlashdata('kalender')) : ?>
    <script>
        $.notify({
            icon: "flaticon-alarm-1",
            title: "Congratulation!!",
            message: "<?= session()->getFlashdata('kalender'); ?>",
        }, {
            type: "success",
            placement: {
                from: "bottom",
                align: "right",
            },
            time: 1000,
        });
    </script>
<?php endif; ?>

<?= $this->endSection(); ?>