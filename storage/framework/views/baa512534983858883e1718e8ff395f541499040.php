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
                <hr class="invis1">

                <div class="custombox clearfix">
                    <h4 class="small-title"><?php echo e($post->commentsCount()); ?> Comments</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comments-list">

                                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="upload/author.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading user_name"><?php echo e($comment->name); ?> <small><?php echo e($comment->getCommentDate()); ?></small></h4>
                                            <p><?php echo e($comment->comment); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end custom-box -->

                <hr class="invis1">

                <?php if(Auth::check()): ?>
                    <div class="custombox clearfix">
                        <h4 class="small-title">Leave a comment</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="<?php echo e(route('comments.store', $post->id)); ?>" class="form-wrapper">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="name" class="form-control" placeholder="Your name">

                                    <textarea name="comment" class="form-control" placeholder="Your comment"></textarea>
                                    <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" title="">Войдите, чтобы оставить комментарий</a>
                <?php endif; ?>

                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>


        </div><!-- end title -->


    </div><!-- end page-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\laravel.blog\resources\views/posts/show.blade.php ENDPATH**/ ?>