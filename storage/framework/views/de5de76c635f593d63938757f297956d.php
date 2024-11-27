<div>
    <!-- Modal -->
    <div class="modal fade" id="updateModalToggle" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalToggleTitle">Edit Skills</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" placeholder=""
                                    wire:model="skills.name" />

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
                        </div>
                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/pages/skills/update.blade.php ENDPATH**/ ?>