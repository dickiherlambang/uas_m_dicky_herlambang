<li class="nav-item">
    <a class="nav-link" href="<?php echo e(asset('')); ?><?php echo e($child_category->linkmenu); ?>">
        <i class="far fa-circle nav-icon"></i>
        <p><?php echo e($child_category->namamenu); ?></p>
    </a>
</li>
<?php if($child_category->categories): ?>
    <ul class="nav nav-treeview">
        <?php $__currentLoopData = $child_category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('layout.child_category', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
</li><?php /**PATH D:\All My Htdocs\pbo3app\resources\views/layout/child_category.blade.php ENDPATH**/ ?>