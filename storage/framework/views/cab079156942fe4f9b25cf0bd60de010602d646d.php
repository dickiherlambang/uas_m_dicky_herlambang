

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="<?php echo e(asset('')); ?>update">
                    <?php echo e(csrf_field()); ?> 
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="hidden" class="form-control" name="txtid" value="<?php echo e($user->id); ?>">
                            <input type="text" class="form-control" name="txtnama" value="<?php echo e($user->namalengkap); ?>" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="txtemail" value="<?php echo e($user->email); ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="txtuname" value="<?php echo e($user->uname); ?>" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtupass" value="<?php echo e($user->upass); ?>" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\All My Htdocs\pbo3app\resources\views/master/useredit.blade.php ENDPATH**/ ?>