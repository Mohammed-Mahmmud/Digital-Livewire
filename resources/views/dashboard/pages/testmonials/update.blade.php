<div>
    <x-dashboard.layouts.modal :id="'updateModalToggle'" :title="'Edit testmonial'">
       <div class="col-4 mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="name" />
            <x-dashboard.layouts.error :error="'name'" />
        </div>
        <div class="col-4 mb-0">
            <label for="position" class="form-label">position</label>
            <input type="text" id="position" class="form-control" placeholder="" wire:model="position" />
            <x-dashboard.layouts.error :error="'position'" />
        </div>
        <div class="col-4 mb-0">
            <label for="image" class="form-label">image</label>
            <input type="file" id="image" class="form-control" placeholder="" accept="*.image"
                wire:model="image" />
            <div wire:loading wire:target="image" class="text-primary">Uploading...</div>
            <x-dashboard.layouts.error :error="'image'" />
        </div>
        @if ($image)
            <div class="col-12 mb-0 my-3" style="text-align: center">
                <img src="{{ $image->temporaryUrl() }}" height="100px">
            </div>
        @endif
        <div class="col-12 mb-0">
            <label for="description" class="form-label">description</label>
            <textarea id="description" class="form-control" placeholder="" rows="5" wire:model="description"></textarea>
            <x-dashboard.layouts.error :error="'description'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
