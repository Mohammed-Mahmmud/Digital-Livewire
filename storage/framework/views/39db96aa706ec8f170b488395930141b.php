<!-- Modal -->
<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="<?php echo e($id); ?>Title"><?php echo e($title); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="row g-2">
                        <?php echo e($slot); ?>

                    </div>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <?php if (isset($component)) { $__componentOriginal1b4f6045dd35dc500e043d939b7dcdf4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4f6045dd35dc500e043d939b7dcdf4 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Loading::resolve(['name' => 'Save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Loading::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4f6045dd35dc500e043d939b7dcdf4)): ?>
<?php $attributes = $__attributesOriginal1b4f6045dd35dc500e043d939b7dcdf4; ?>
<?php unset($__attributesOriginal1b4f6045dd35dc500e043d939b7dcdf4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4f6045dd35dc500e043d939b7dcdf4)): ?>
<?php $component = $__componentOriginal1b4f6045dd35dc500e043d939b7dcdf4; ?>
<?php unset($__componentOriginal1b4f6045dd35dc500e043d939b7dcdf4); ?>
<?php endif; ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/components/dashboard/layouts/modal.blade.php ENDPATH**/ ?>