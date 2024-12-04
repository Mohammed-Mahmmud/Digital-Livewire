<div>
    <span wire:loading.remove>{{ $name ?? '' }}</span>
    <div class="text-center">
        <div class="spinner-border spinner-border-sm text-white" role="status" wire:loading wire:target="submit">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
