<div>
    <x-dashboard.layouts.modal :id="'updateModalToggle'" :title="'Edit counter'">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="counters.name" />

            <x-dashboard.layouts.error :error="'counters.name'" />
        </div>
        <div class="col mb-0">
            <label for="count" class="form-label">Count</label>
            <input type="number" id="count" class="form-control" placeholder="" wire:model="counters.count" />
            <x-dashboard.layouts.error :error="'counters.count'" />
        </div>
        <div class="col mb-0">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" id="icon" class="form-control" placeholder="" wire:model="counters.icon" />
            <x-dashboard.layouts.error :error="'counters.icon'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
