<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('students.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('POST')); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.students.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/laravel-napaeduhub/resources/views/back/students/create.blade.php ENDPATH**/ ?>