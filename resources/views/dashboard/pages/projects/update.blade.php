<div>
    <x-dashboard.layouts.modal :id="'updateModalToggle'" :title="'Edit Project'">
        <div class="col-6 mb-0">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="name" />
            <x-dashboard.layouts.error :error="'name'" />
        </div>
        <div class="col-6 mb-0">
            <label for="link" class="form-label">link</label>
            <input type="url" id="link" class="form-control" placeholder="" wire:model="link" />
            <x-dashboard.layouts.error :error="'link'" />
        </div>
        <div class="col-6 mb-0">
            <label for="image" class="form-label">image</label>
            <input type="file" id="image" class="form-control" placeholder="" accept="*.image"
                wire:model="image" />
            <div wire:loading wire:target="image" class="text-primary">Uploading...</div>
            <x-dashboard.layouts.error :error="'image'" />
        </div>
        <div class="col-6 mb-0">
            <label for="category" class="form-label">category</label>
            <select id="category" class="form-control" placeholder="" wire:model="category_id">
                <option disabled>select Category </option>
                @if (count($categories) > 0)
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" wire:key="category-{{ $item->id }}">{{ $item->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            <x-dashboard.layouts.error :error="'category_id'" />
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
