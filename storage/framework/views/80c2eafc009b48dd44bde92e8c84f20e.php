<?php $__env->startSection('front-title', 'Projects'); ?>
<?php $__env->startSection('project-active', 'active'); ?>
<?php $__env->startSection('front-header'); ?>
    <?php if (isset($component)) { $__componentOriginalc65fe9c0bdf06a3f68a305266d9dc346 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc65fe9c0bdf06a3f68a305266d9dc346 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\SubHeader::resolve(['slug' => 'Projects'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.sub-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\SubHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc65fe9c0bdf06a3f68a305266d9dc346)): ?>
<?php $attributes = $__attributesOriginalc65fe9c0bdf06a3f68a305266d9dc346; ?>
<?php unset($__attributesOriginalc65fe9c0bdf06a3f68a305266d9dc346); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc65fe9c0bdf06a3f68a305266d9dc346)): ?>
<?php $component = $__componentOriginalc65fe9c0bdf06a3f68a305266d9dc346; ?>
<?php unset($__componentOriginalc65fe9c0bdf06a3f68a305266d9dc346); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalab084e7bc7b51e0e38d63761ff7aa968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\Projects::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\Projects::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968)): ?>
<?php $attributes = $__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968; ?>
<?php unset($__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab084e7bc7b51e0e38d63761ff7aa968)): ?>
<?php $component = $__componentOriginalab084e7bc7b51e0e38d63761ff7aa968; ?>
<?php unset($__componentOriginalab084e7bc7b51e0e38d63761ff7aa968); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/front/pages/projects.blade.php ENDPATH**/ ?>