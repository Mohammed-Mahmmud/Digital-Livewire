<div>
    <span wire:loading.remove><?php echo e($name ?? ''); ?></span>
    <div class="text-center">
        <div class="spinner-border spinner-border-sm text-white" role="status" wire:loading wire:target="submit">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/components/dashboard/layouts/loading.blade.php ENDPATH**/ ?>