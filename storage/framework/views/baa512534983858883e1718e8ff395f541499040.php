<?php $__env->startSection('title','Markedia - Marketing Blog Template :: ' . $post->title); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">
        <div class="blog-title-area">
            <ol class="breadcrumb hidden-xs-down">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('categories.single', ['slug'=>$post->category->slug])); ?>"><?php echo e($post->category->title); ?></a></li>
                <li class="breadcrumb-item active"><?php echo e($post->title); ?></li>
            </ol>

            <span class="color-yellow"><a href="<?php echo e(route('categories.single', ['slug'=>$post->category->slug])); ?>"><?php echo e($post->category->title); ?></a></span>

            <h3><?php echo e($post->title); ?></h3>

            <div class="blog-meta big-meta">
                <small><?php echo e($post->getPostDate()); ?></small>
                <small><i class="fa fa-eye"></i><?php echo e($post->views); ?></small>
            </div><!-- end meta -->

            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end post-sharing -->
        </div><!-- end title -->

        <div class="single-post-media">
            <img src="<?php echo e($post->getImage()); ?>" alt="" class="img-fluid">
        </div><!-- end media -->

        <div class="blog-content">
            <?php echo $post->content; ?>

        </div><!-- end content -->

        <style>
            img {
                display: block;
                max-width: 400px;
                height: auto;

            }
        </style>

        <div class="blog-title-area">
            <?php if($post->tags->count()): ?>
                <div class="tag-cloud-single">
                    <span>Tags</span>
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <small><a href="<?php echo e(route('tags.single', ['slug'=>$tag->slug])); ?>" title=""><?php echo e($tag->title); ?></a></small>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!-- end meta -->
            <?php endif; ?>
            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end post-sharing -->
        </div><!-- end title -->


    </div><!-- end page-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\laravel.blog\resources\views/posts/show.blade.php ENDPATH**/ ?>