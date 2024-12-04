<div>
    <x-dashboard.layouts.modal :id="'updateModalToggle'" :title="'Edit service'">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="services.name" />

            <x-dashboard.layouts.error :error="'services.name'" />
        </div>
        <div class="col-12 mb-0">
            <label for="description" class="form-label">description</label>
            <textarea type="number" id="description" class="form-control" placeholder="" wire:model="services.description"></textarea>
            <x-dashboard.layouts.error :error="'services.description'" />
        </div>
        <div class="col mb-0">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" id="icon" class="form-control" placeholder="" wire:model="services.icon" />
            <x-dashboard.layouts.error :error="'services.icon'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
