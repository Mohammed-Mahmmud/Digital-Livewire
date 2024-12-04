<div>
    <x-dashboard.layouts.show-modal :id="'updateModalToggle'" :title="'Show message'">
        <div class="col-6 mb-0">
            <label for="name" class="form-label">Name</label>
            <input disabled type="text" id="name" class="form-control" wire:model="name" />
            <x-dashboard.layouts.error :error="'name'" />
        </div>

        <div class="col-6 mb-0">
            <label for="email" class="form-label">email</label>
            <input disabled type="email" id="email" class="form-control" wire:model="email" />
            <x-dashboard.layouts.error :error="'email'" />
        </div>

        <div class="col-6 mb-0">
            <label for="subject" class="form-label">Subject</label>
            <input disabled type="text" id="subject" class="form-control" wire:model="subject" />
            <x-dashboard.layouts.error :error="'subject'" />
        </div>

        <div class="col-6 mb-0">
            <label for="status" class="form-label">status</label>
            <input disabled type="text" id="status" class="form-control" wire:model="status" />
            <x-dashboard.layouts.error :error="'status'" />
        </div>

        <div class="col mb-0">
            <label for="message" class="form-label">message</label>
            <textarea id="message" class="form-control" wire:model="message" rows="5" disabled></textarea>
            <x-dashboard.layouts.error :error="'message'" />
        </div>
    </x-dashboard.layouts.show-modal>
</div>
