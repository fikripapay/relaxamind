<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-lg-6 align-self-center">
        <h4 class="text-themecolor"><?= $title; ?></h4>
    </div>
    <div class="col-lg-6 align-self-center">
        <button type="button" class="btn btn-info float-right add"><i class="fa fa-plus-circle"></i> Tambah</button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- table responsive -->
<div class="card radius shadow">
    <div class="card-header bg-info"></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table display table-bordered table-striped no-wrap datatables" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Example</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($example)) { ?>
                        <?php $no = 1; foreach ($example as $key => $value) { ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $value['example'] ?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info edit" data-id="<?= $value['id'] ?>">Edit</button>
                                    <a href="<?= base_url('example/delete/'.$value['id']); ?>" class="btn btn-sm btn-danger del btn-fill delete">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<div class="modal fade" id="modal-add" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>example/save" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><strong>Example</strong> <strong class="text-danger">*</strong></label>
                            <input type="text" name="example" id="example" class="form-control" placeholder="Example" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Form Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>example/edit" method="POST">
                <!-- hidden value -->
                <input type="hidden" name="id" id="id_example">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><strong>Example</strong> <strong class="text-danger">*</strong></label>
                            <input type="text" name="example" id="example" class="form-control" placeholder="Example" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
	$(document).ready(function() {
        const base_url = '<?= base_url(); ?>';
        $('.datatables').DataTable();
		// var urlData = '<?= base_url()?>master/example/load_data';
		// var oTable = $('.datatables').DataTable({
		// 	"processing": true, //Feature control the processing indicator.
		// 	"serverSide": true, //Feature control DataTables' server-side processing mode.
		// 	"responsive": true,
		// 	"order": [],
		// 	"ajax": {
		// 		"url": urlData,
		// 		"type": "POST"
		// 	}
		// });

        $(document).on('click', '.add', function(e){
            e.preventDefault();
            $('#modal-add').modal('show');
        });

        $(document).on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data-id');
            $.post(base_url+'example/get_data', {id : id}, function(res){
                $('#modal-edit').find('#id_example').val(res.id);
                $('#modal-edit').find('#example').val(res.example);
                $('#modal-edit').modal('show');
            }, 'json');
        });

        $(document).on('click', '.delete', function(e){
            e.preventDefault();
            var url = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Ingin menghapus data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = url;
                }
            });
        })
	});
</script>