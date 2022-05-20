<<?= $this->extend('template/layer') ?> <?= $this->section('content') ?> <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Poin Lists</h3>
            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
        </div>
        <div class="card-body">

            <table class="table table-responsive" id="users-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Triwulan</th>
                        <th>Standar</th>
                        <th>Parameter</th>
                        <th>Pernyataan</th>
                        <th>Capaian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($poin as $row) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row->tahun_name; ?></td>
                            <td><?= $row->triwulan_name; ?></td>
                            <td><?= $row->standar_name; ?></td>
                            <td><?= $row->parameter_name; ?></td>
                            <td><?= $row->pernyataan_name; ?></td>
                            <td><?= $row->poin_capaian; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm btn-edit" data-id="<?= $row->poin_id; ?>" data-capaian="<?= $row->poin_capaian; ?>" data-tahun_id="<?= $row->poin_tahun_id; ?>" data-triwulan_id="<?= $row->poin_triwulan_id; ?>" data-standar_id="<?= $row->poin_standar_id; ?>" data-parameter_id="<?= $row->poin_parameter_id; ?>" data-pernyataan_id="<?= $row->poin_pernyataan_id; ?>">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->poin_id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>


    </div>

    <!-- Modal Add Product-->
    <form action="/poin/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Poin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Tahun</label>
                            <select name="poin_tahun" class="form-control">
                                <option value="">-Pilih Tahun-</option>
                                <?php foreach ($tahun as $row) : ?>
                                    <option value="<?= $row->tahun_id; ?>"><?= $row->tahun_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Triwulan</label>
                            <select name="poin_triwulan" class="form-control">
                                <option value="">-Pilih Triwulan-</option>
                                <?php foreach ($triwulan as $row) : ?>
                                    <option value="<?= $row->triwulan_id; ?>"><?= $row->triwulan_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Standar</label>
                            <select name="poin_standar" class="form-control">
                                <option value="">-Pilih Standar-</option>
                                <?php foreach ($standar as $row) : ?>
                                    <option value="<?= $row->standar_id; ?>"><?= $row->standar_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Parameter</label>
                            <select name="poin_parameter" class="form-control">
                                <option value="">-Pilih Parameter-</option>
                                <?php foreach ($parameter as $row) : ?>
                                    <option value="<?= $row->parameter_id; ?>"><?= $row->parameter_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pernyataan</label>
                            <select name="poin_pernyataan" class="form-control">
                                <option value="">-Pilih Pernyataan-</option>
                                <?php foreach ($pernyataan as $row) : ?>
                                    <option value="<?= $row->pernyataan_id; ?>"><?= $row->pernyataan_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Capaian</label>
                            <input type="text" class="form-control" name="poin_capaian" placeholder="Capaian">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add Product-->

    <!-- Modal Edit Product-->
    <form action="/poin/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Poin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Tahun</label>
                            <select name="poin_tahun" class="form-control poin_tahun">
                                <option value="">-Pilih Tahun-</option>
                                <?php foreach ($tahun as $row) : ?>
                                    <option value="<?= $row->tahun_id; ?>"><?= $row->tahun_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Triwulan</label>
                            <select name="poin_triwulan" class="form-control poin_triwulan">
                                <option value="">-Pilih Triwulan-</option>
                                <?php foreach ($triwulan as $row) : ?>
                                    <option value="<?= $row->triwulan_id; ?>"><?= $row->triwulan_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Standar</label>
                            <select name="poin_standar" class="form-control poin_standar">
                                <option value="">-Pilih Standar-</option>
                                <?php foreach ($standar as $row) : ?>
                                    <option value="<?= $row->standar_id; ?>"><?= $row->standar_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Parameter</label>
                            <select name="poin_parameter" class="form-control poin_parameter">
                                <option value="">-Pilih Parameter-</option>
                                <?php foreach ($parameter as $row) : ?>
                                    <option value="<?= $row->parameter_id; ?>"><?= $row->parameter_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pernyataan</label>
                            <select name="poin_pernyataan" class="form-control poin_pernyataan">
                                <option value="">-Pilih Pernyataan-</option>
                                <?php foreach ($pernyataan as $row) : ?>
                                    <option value="<?= $row->pernyataan_id; ?>"><?= $row->pernyataan_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Capaian</label>
                            <input type="text" class="form-control poin_capaian" name="poin_capaian" placeholder="Capaian">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="poin_id" class="poin_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->

    <!-- Modal Delete Product-->
    <form action="/poin/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Poin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4>Anda yakin ingin menghapus data Poin?</h4>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="poin_id" class="deleteID">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Iya</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
    <!-- data table -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users-list').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {

            // get Edit Product
            $('.btn-edit').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                const capaian = $(this).data('capaian');
                const tahun = $(this).data('tahun_id');
                const triwulan = $(this).data('triwulan_id');
                const standar = $(this).data('standar_id');
                const parameter = $(this).data('parameter_id');
                const pernyataan = $(this).data('pernyataan_id');
                // Set data to Form Edit
                $('.poin_id').val(id);
                $('.poin_capaian').val(capaian);
                $('.poin_tahun').val(tahun).trigger('change');
                $('.poin_triwulan').val(triwulan).trigger('change');
                $('.poin_standar').val(standar).trigger('change');
                $('.poin_parameter').val(parameter).trigger('change');
                $('.poin_pernyataan').val(pernyataan).trigger('change');
                // Call Modal Edit
                $('#editModal').modal('show');
            });

            // get Delete Product
            $('.btn-delete').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                // Set data to Form Edit
                $('.deleteID').val(id);
                // Call Modal Edit
                $('#deleteModal').modal('show');
            });

        });
    </script>

    <?= $this->endSection() ?>