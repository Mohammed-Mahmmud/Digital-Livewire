<div>
    <form wire:submit.prevent="submit">
        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email"
            style="height: 48px;" wire:model="email">
        <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                class="fa fa-paper-plane text-primary fs-4"></i></button>
    </form>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/front/pages/subscribes/create.blade.php ENDPATH**/ ?>