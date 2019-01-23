<?php $__env->startSection('content'); ?>
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $post->title, array_merge(['class' => 'form-control', 'placeholder'=>'Title']))); ?>

        </div> 
        
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', $post->body, array_merge(['id'=>'article-ckeditor','class' => 'form-control', 'placeholder'=>'Body Text']))); ?>

        </div> 

        <div class="form-group">
            <?php echo e(Form::file('cover_image', '', array_merge(['id'=>'article-ckeditor','class' => 'form-control', 'placeholder'=>'Body Text']))); ?>

        </div>
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>