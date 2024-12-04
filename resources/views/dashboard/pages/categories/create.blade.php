<div>
    <x-dashboard.layouts.modal :id="'createModalToggle'" :title="'Add New category'">
        <div class="col-12 mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="category.name" />
            <x-dashboard.layouts.error :error="'category.name'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
