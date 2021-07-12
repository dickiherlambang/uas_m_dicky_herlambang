<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('')); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('')); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- DataTables -->
    <script src="<?php echo e(asset('')); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('')); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('')); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('')); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    
    <script>
        $('#example1').DataTable({});
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($user->uname); ?></td>
                                    <td><?php echo e($user->namalengkap); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('edit')); ?>/<?php echo e($user->id); ?>"
                                            class="edit btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbo3app\resources\views/master/user.blade.php ENDPATH**/ ?>