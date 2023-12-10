<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/images/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/front/images/apple-touch-icon.png')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/front.css')); ?>">

    
    
</head>
<body>

<div id="wrapper">

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('header'); ?>

    <section class="section lb <?php if(!Request::is('/')): ?> m3rem <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                    <?php echo $__env->yieldContent('content'); ?>

                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <footer class="footer">
        <div class="container">







































































































            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <br>
                    <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                </div>
            </div>
        </div><!-- end container -->
    </footer><!-- end footer -->


</div><!-- end wrapper -->

<script src="<?php echo e(asset('assets/front/js/front.js')); ?>"></script>

</body>
</html>
<?php /**PATH F:\OpenServer\domains\laravel.blog\resources\views/layouts/layout.blade.php ENDPATH**/ ?>