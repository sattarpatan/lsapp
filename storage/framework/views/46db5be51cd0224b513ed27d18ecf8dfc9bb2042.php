<?php $__env->startSection('content'); ?>
    <h2>Posts</h2>
    <?php if(count($posts)>0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_image/<?php echo e($post->cover_image); ?>" class="img-thumbnail">     
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                        <small>Written On: <?php echo e($post->created_at); ?>, by <?php echo e($post->user->name); ?> </small>                
                    </div>
                </div>
            </div>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?> 



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>