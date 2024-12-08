<div>
    <?php if (isset($component)) { $__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Modal::resolve(['id' => 'createModalToggle','title' => 'Add New Skills'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="skills.name" />
            <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'skills.name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $attributes = $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $component = $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
        </div>
        <div class="col mb-0">
            <label for="progress" class="form-label">Progress</label>
            <input type="number" id="progress" class="form-control" placeholder="" min="1"
                wire:model="skills.progress" max="100" />
            <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'skills.progress'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $attributes = $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $component = $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
        </div>
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
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/pages/skills/create.blade.php ENDPATH**/ ?>