<div>
    <form wire:submit.prevent="submit">
        <div class="card mb-4">
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-primary success-alert">{{ session('message') }}
                    </div>
                @endif
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" wire:model="settings.name" id="name"
                            placeholder="name" />
                        @error('settings.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" wire:model="settings.email" id="email"
                            placeholder="email" />
                        @error('settings.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" wire:model="settings.phone" id="phone"
                            placeholder="phone" />
                        @error('settings.phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" wire:model="settings.address" id="address"
                            placeholder="address" />
                        @error('settings.address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="facebook" class="form-label">facebook</label>
                        <input type="text" class="form-control" wire:model="settings.facebook" id="facebook"
                            placeholder="facebook" />
                        @error('settings.facebook')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="linkedin" class="form-label">linkedin</label>
                        <input type="text" class="form-control" wire:model="settings.linkedin" id="linkedin"
                            placeholder="linkedin" />
                        @error('settings.linkedin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="instagram" class="form-label">instagram</label>
                        <input type="text" class="form-control" wire:model="settings.instagram" id="instagram"
                            placeholder="instagram" />
                        @error('settings.instagram')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="twitter" class="form-label">twitter</label>
                        <input type="text" class="form-control" wire:model="settings.twitter" id="twitter"
                            placeholder="twitter" />
                        @error('settings.twitter')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">Save</button>
        </div>
    </form>
</div>
{{-- @script
    <script>
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            // alert("Morph Updated");
        });
    </script>
@endscript --}}
