<?= $this->extend('template/layer') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Standar Lists</h3>
            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
        </div>
        <div class="card-body">
            <table class="table table-responsive" id="users-list">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Standar</th>
                        <!-- <th>Price</th>
                                <th>Category</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($standar as $row) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row->standar_name; ?></td>
                            <!-- <td><?= $row->product_price; ?></td>
                                    <td><?= $row->category_name; ?></td> -->
                            <td>
                                <a href="#" class="btn btn-primary btn-sm btn-edit" data-id="<?= $row->standar_id; ?>" data-name="<?= $row->standar_name; ?>">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->standar_id; ?>">Delete</a>
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
<form action="/standar/save" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Standar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Standar</label>
                        <input type="text" class="form-control" name="standar_name" placeholder="Standar">
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
<form action="/standar/update" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Standar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Standar</label>
                        <input type="text" class="form-control standar_name" name="standar_name" placeholder="Standar">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="standar_id" class="standar_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Edit Product-->

<!-- Modal Delete Product-->
<form action="/standar/delete" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Standar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>Anda yakin ingin menghapus data Standar?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="standar_id" class="deleteID">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
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
            const name = $(this).data('name');
            // const price = $(this).data('price');
            // const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.standar_id').val(id);
            $('.standar_name').val(name);
            // $('.product_price').val(price);
            // $('.product_category').val(category).trigger('change');
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