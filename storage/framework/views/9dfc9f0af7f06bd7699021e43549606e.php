<div>
    <?php if (isset($component)) { $__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Modal::resolve(['id' => 'deleteModalToggle','title' => 'Delete counter'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <h5>Are you sure you want to delete this counter?</h5>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7)): ?>
<?php $attributes = $__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7; ?>
<?php unset($__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7)): ?>
<?php $component = $__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7; ?>
<?php unset($__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/pages/counters/delete.blade.php ENDPATH**/ ?>