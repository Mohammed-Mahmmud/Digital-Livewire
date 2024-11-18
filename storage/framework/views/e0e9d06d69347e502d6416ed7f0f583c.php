<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="<?php echo e(asset('dashboard')); ?>/assets/" data-template="vertical-menu-template-free">

<?php echo $__env->make('dashboard.auth.layouts.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

  <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('dashboard.auth.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/auth/layouts/master.blade.php ENDPATH**/ ?>