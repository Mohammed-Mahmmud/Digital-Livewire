<?php $__env->startSection('front-title', 'Our Team'); ?>
<?php $__env->startSection('team-active', 'active'); ?>
<?php $__env->startSection('team-testimonial-active', 'active'); ?>
<?php $__env->startSection('front-header'); ?>
    <?php if (isset($component)) { $__componentOriginalc65fe9c0bdf06a3f68a305266d9dc346 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc65fe9c0bdf06a3f68a305266d9dc346 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\SubHeader::resolve(['slug' => 'Our Team'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <?php if (isset($component)) { $__componentOriginal37fe193c41aa33d0aa6185284f665bad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37fe193c41aa33d0aa6185284f665bad = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\Team::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\Team::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37fe193c41aa33d0aa6185284f665bad)): ?>
<?php $attributes = $__attributesOriginal37fe193c41aa33d0aa6185284f665bad; ?>
<?php unset($__attributesOriginal37fe193c41aa33d0aa6185284f665bad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37fe193c41aa33d0aa6185284f665bad)): ?>
<?php $component = $__componentOriginal37fe193c41aa33d0aa6185284f665bad; ?>
<?php unset($__componentOriginal37fe193c41aa33d0aa6185284f665bad); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/front/pages/team.blade.php ENDPATH**/ ?>