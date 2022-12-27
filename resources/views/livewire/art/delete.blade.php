<div>
    <div class="container col-md-6 offset-md-3 delete-card mt-5">
        <div class="card card-delete">
            <div class="card-body card-body-delete">
                <h3 class="text-center">Are you sure you want to remove this artwork from exhibit?</h3>
            </div>

           
            <div class="card-footer card-footer-delete">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="delete()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="back()">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
