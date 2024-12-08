<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?php echo e(asset('dashboard')); ?>/assets/" data-template="vertical-menu-template-free">

<?php echo $__env->make('dashboard.layouts.partials.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php if (isset($component)) { $__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2)): ?>
<?php $attributes = $__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2; ?>
<?php unset($__attributesOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2)): ?>
<?php $component = $__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2; ?>
<?php unset($__componentOriginal776ff88c4d0482d2ae3c8a9d7aaf75f2); ?>
<?php endif; ?>

            <!-- Layout container -->
            <div class="layout-page">
                <?php echo $__env->make('dashboard.layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                    <?php echo $__env->make('dashboard.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <?php echo $__env->make('dashboard.layouts.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/layouts/master.blade.php ENDPATH**/ ?>