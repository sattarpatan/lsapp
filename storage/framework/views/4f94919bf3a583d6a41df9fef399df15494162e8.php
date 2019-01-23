<?php $__env->startSection('content'); ?>
    <h3><?php echo e($post->title); ?></h3>
    <p><?php echo e($post->body); ?></p>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>