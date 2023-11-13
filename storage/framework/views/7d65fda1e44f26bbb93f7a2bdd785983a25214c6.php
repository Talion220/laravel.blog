<?php if ($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="<?php echo e(__('Pagination Navigation')); ?>" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (is_string($element)): ?>
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 rounded"><?php echo e($element); ?></span>
                            </span>
                        <?php endif; ?>

                        <?php if (is_array($element)): ?>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if ($page == $paginator->currentPage()): ?>
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-blue border border-gray-300 cursor-default leading-5 rounded"><?php echo e($page); ?></span>
                                    </span>
                                <?php else: ?>
                                    <?php if ($loop->first): ?>
                                        <a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 rounded" aria-label="<?php echo e(__('Go to page :page', ['page' => $page])); ?>">
                                            <?php echo e($page); ?>
                                        </a>
                                    <?php elseif ($loop->last): ?>
                                        <a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 rounded" aria-label="<?php echo e(__('Go to page :page', ['page' => $page])); ?>">
                                            <?php echo e($page); ?>
                                        </a>
                                    <?php elseif (abs($paginator->currentPage() - $page) < 3 || ($page == 1 || $page == $paginator->lastPage())): ?>
                                        <a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 rounded" aria-label="<?php echo e(__('Go to page :page', ['page' => $page])); ?>">
                                            <?php echo e($page); ?>
                                        </a>
                                    <?php elseif (abs($paginator->currentPage() - $page) === 3): ?>
                                        <span aria-disabled="true">
                                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 rounded">...</span>
                                        </span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
            </div>
        </div>
    </nav>
<?php endif; ?>


<?php /**PATH F:\OpenServer\domains\laravel.blog\vendor\laravel\framework\src\Illuminate\Pagination/resources/views/tailwind.blade.php ENDPATH**/ ?>
