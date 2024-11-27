<div class="modal fade" id="deleteModalToggle" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalToggleTitle">Delete Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <h5>Are you sure you want to delete this skill?</h5>
                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
