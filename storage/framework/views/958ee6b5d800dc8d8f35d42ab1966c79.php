<?php $__env->startSection('front-title', 'Agency'); ?>
<?php $__env->startSection('index-active', 'active'); ?>
<?php $__env->startSection('front-header'); ?>
    <?php if (isset($component)) { $__componentOriginal46d87300226e51ee530349869d53f478 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46d87300226e51ee530349869d53f478 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\MainHeader::resolve(['slug' => 'Home'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.main-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\MainHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46d87300226e51ee530349869d53f478)): ?>
<?php $attributes = $__attributesOriginal46d87300226e51ee530349869d53f478; ?>
<?php unset($__attributesOriginal46d87300226e51ee530349869d53f478); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46d87300226e51ee530349869d53f478)): ?>
<?php $component = $__componentOriginal46d87300226e51ee530349869d53f478; ?>
<?php unset($__componentOriginal46d87300226e51ee530349869d53f478); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.front.partials.services-component', ['count' => 3]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4261827964-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.front.partials.skills-component', ['count' => 4]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4261827964-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.front.partials.counter-component');

$__html = app('livewire')->mount($__name, $__params, 'lw-4261827964-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.front.partials.services-component');

$__html = app('livewire')->mount($__name, $__params, 'lw-4261827964-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php if (isset($component)) { $__componentOriginal6ce7979d766b3cffcf035247339a8522 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6ce7979d766b3cffcf035247339a8522 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\Newsletter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.newsletter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\Newsletter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6ce7979d766b3cffcf035247339a8522)): ?>
<?php $attributes = $__attributesOriginal6ce7979d766b3cffcf035247339a8522; ?>
<?php unset($__attributesOriginal6ce7979d766b3cffcf035247339a8522); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ce7979d766b3cffcf035247339a8522)): ?>
<?php $component = $__componentOriginal6ce7979d766b3cffcf035247339a8522; ?>
<?php unset($__componentOriginal6ce7979d766b3cffcf035247339a8522); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalab084e7bc7b51e0e38d63761ff7aa968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968 = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\Projects::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.partials.projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Front\Partials\Projects::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968)): ?>
<?php $attributes = $__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968; ?>
<?php unset($__attributesOriginalab084e7bc7b51e0e38d63761ff7aa968); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab084e7bc7b51e0e38d63761ff7aa968)): ?>
<?php $component = $__componentOriginalab084e7bc7b51e0e38d63761ff7aa968; ?>
<?php unset($__componentOriginalab084e7bc7b51e0e38d63761ff7aa968); ?>
<?php endif; ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.front.partials.testimonial', ['count' => 3]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4261827964-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php if (isset($component)) { $__componentOriginal37fe193c41aa33d0aa6185284f665bad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37fe193c41aa33d0aa6185284f665bad = $attributes; } ?>
<?php $component = App\View\Components\Front\Partials\Team::resolve(['count' => '3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/front/pages/index.blade.php ENDPATH**/ ?>