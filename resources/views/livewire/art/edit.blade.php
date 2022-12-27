<div>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div id="edit-card" class="card bg-light">
           <h3 class="text-center m-3 ">Edit Art Details</h3>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name">Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="artist">
                    <label for="artist">Artist</label>
                    @error('artist')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="description">
                    <label for="description">Description</label>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="price">
                    <label for="price">Price</label>
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button id="save-btn" class="btn btn-success" type="submit" wire:click="updateArt()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
