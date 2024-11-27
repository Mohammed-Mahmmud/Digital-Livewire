<div>
    <!-- Modal -->
    <div class="modal fade" id="createModalToggle" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalToggleTitle">Add New Skills</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" placeholder=""
                                    wire:model="skills.name" />
                                <x-dashboard.layouts.error :error="'skills.name'" />
                            </div>
                            <div class="col mb-0">
                                <label for="progress" class="form-label">Progress</label>
                                <input type="number" id="progress" class="form-control" placeholder="" min="1"
                                    wire:model="skills.progress" max="100" />
                                <x-dashboard.layouts.error :error="'skills.progress'" />
                            </div>
                        </div>
                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
