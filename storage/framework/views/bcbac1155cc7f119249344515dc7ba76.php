<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('front.layouts.partials.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="container-xxl bg-white p-0">
        <?php echo $__env->make('front.layouts.partials.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-xxl position-relative p-0">
            <?php if (isset($component)) { $__componentOriginal15d3b44609c50769a7fd943d084fb620 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15d3b44609c50769a7fd943d084fb620 = $attributes; } ?>
<?php $component = App\View\Components\Front\Layouts\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.layouts.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Layouts\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15d3b44609c50769a7fd943d084fb620)): ?>
<?php $attributes = $__attributesOriginal15d3b44609c50769a7fd943d084fb620; ?>
<?php unset($__attributesOriginal15d3b44609c50769a7fd943d084fb620); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15d3b44609c50769a7fd943d084fb620)): ?>
<?php $component = $__componentOriginal15d3b44609c50769a7fd943d084fb620; ?>
<?php unset($__componentOriginal15d3b44609c50769a7fd943d084fb620); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('front-header'); ?>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
        <?php if (isset($component)) { $__componentOriginal3d76232ff45d4432a85ac6e5f752e342 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d76232ff45d4432a85ac6e5f752e342 = $attributes; } ?>
<?php $component = App\View\Components\Front\Layouts\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Layouts\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d76232ff45d4432a85ac6e5f752e342)): ?>
<?php $attributes = $__attributesOriginal3d76232ff45d4432a85ac6e5f752e342; ?>
<?php unset($__attributesOriginal3d76232ff45d4432a85ac6e5f752e342); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d76232ff45d4432a85ac6e5f752e342)): ?>
<?php $component = $__componentOriginal3d76232ff45d4432a85ac6e5f752e342; ?>
<?php unset($__componentOriginal3d76232ff45d4432a85ac6e5f752e342); ?>
<?php endif; ?>
        <?php echo $__env->make('front.layouts.partials.scroll-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('front.layouts.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/front/layouts/master.blade.php ENDPATH**/ ?>