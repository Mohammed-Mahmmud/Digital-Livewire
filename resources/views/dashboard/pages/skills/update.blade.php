<div>
    <x-dashboard.layouts.modal :id="'updateModalToggle'" :title="'Edit Skills'">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="skills.name" />

            <x-dashboard.layouts.error :error="'skills.name'" />
        </div>
        <div class="col mb-0">
            <label for="progress" class="form-label">Progress</label>
            <input type="number" id="progress" class="form-control" placeholder="" min="1"
                wire:model="skills.progress" max="100" />
            <x-dashboard.layouts.error :error="'skills.progress'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
