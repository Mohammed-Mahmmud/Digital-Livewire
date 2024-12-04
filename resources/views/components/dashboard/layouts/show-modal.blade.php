<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form wire:submit.prevent="submit"> --}}
                <div class="modal-body">
                    <div class="row g-2">
                        {{ $slot }}
                    </div>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        {{-- <button type="submit" class="btn btn-primary">
                            <x-dashboard.layouts.loading :name="'Save'"></x-dashboard.layouts.loading>
                        </button> --}}
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
