<?php $__env->startSection('content'); ?>  
    <h1><?php echo e($title); ?></h1>
    <p>This is the About Us page.</p>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>