<?php $__env->startSection('content'); ?>
<a href="/posts" class="btn btn-primary">Go Back</a>
    <h3><?php echo e($post->title); ?></h3>  
    <img src="/storage/cover_image/<?php echo e($post->cover_image); ?>" class="img-thumbnail" style="width:100%;">           
    <p><?php echo $post->body; ?></p>
    <hr>
    <small>Written On: <?php echo e($post->created_at); ?>, by <?php echo e($post->user->name); ?> </small>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>
            <?php echo Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']); ?>

                <?php echo Form::hidden('_method', 'DELETE'); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

       <?php endif; ?> 
    <?php endif; ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>