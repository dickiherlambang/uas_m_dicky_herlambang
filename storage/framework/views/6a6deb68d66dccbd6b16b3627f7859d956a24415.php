<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset ('')); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset ('')); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('')); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('')); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('')); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('')); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">
   $(function () {
    var table = $('#example1').DataTable({
        processing: true,
        serverSide: true,
        ajax: "<?php echo e(asset('')); ?>list",
        columns: [
            { data: 'id', name: 'id' },
            {data: 'uname', name: 'uname'},
            {data: 'namalengkap', name: 'namalengkap'},
            {data: 'email', name: 'email'},
			{data: 'jabatan', name: 'jabatan'},
            {
                    data: null,
                    className: "center",
                    defaultContent: '<a href="#" class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>' 
            }
        ]
    });

    $('#example1 tbody').on( 'click', 'a.edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var txt = '<?php echo e(asset('')); ?>edit/'+data.id;
        location = txt;
    } );
    
  });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <a href="<?php echo e(asset('')); ?>add" type="button" class="btn btn-block btn-primary col-2">Tambah</a>
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
						<th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
						<th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\All My Htdocs\pbo3app\resources\views/master/user.blade.php ENDPATH**/ ?>