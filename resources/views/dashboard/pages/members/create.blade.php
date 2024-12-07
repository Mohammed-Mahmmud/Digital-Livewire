<div>
    <x-dashboard.layouts.modal :id="'createModalToggle'" :title="'Add New member'">
        <div class="col-6 mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="name" />
            <x-dashboard.layouts.error :error="'name'" />
        </div>
        <div class="col-6 mb-0">
            <label for="position" class="form-label">position</label>
            <input type="text" id="position" class="form-control" placeholder="" wire:model="position" />
            <x-dashboard.layouts.error :error="'position'" />
        </div>
        <div class="col-6 mb-0">
            <label for="facebook" class="form-label">facebook</label>
            <input type="url" id="facebook" class="form-control" placeholder="" wire:model="facebook" />
            <x-dashboard.layouts.error :error="'facebook'" />
        </div>
        <div class="col-6 mb-0">
            <label for="twitter" class="form-label">twitter</label>
            <input type="url" id="twitter" class="form-control" placeholder="" wire:model="twitter" />
            <x-dashboard.layouts.error :error="'twitter'" />
        </div>
        <div class="col-6 mb-0">
            <label for="linkedin" class="form-label">linkedin</label>
            <input type="url" id="linkedin" class="form-control" placeholder="" wire:model="linkedin" />
            <x-dashboard.layouts.error :error="'linkedin'" />
        </div>
        <div class="col-6 mb-0">
            <label for="instagram" class="form-label">instagram</label>
            <input type="url" id="instagram" class="form-control" placeholder="" wire:model="instagram" />
            <x-dashboard.layouts.error :error="'instagram'" />
        </div>
        <div class="col-6 mb-0">
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
    </x-dashboard.layouts.modal>
</div>
