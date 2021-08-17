<?php $__env->startSection('title', 'HomePC'); ?>

<?php $__env->startSection('ingredients'); ?>

<ul>
    <?php $__currentLoopData = $meals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($meal->title); ?> - <?php echo e($meal->ingredients); ?> </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('jela', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>