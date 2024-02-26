<div>

<div class="modal fade"  wire:ignore.self id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="" wire:submit.prevent='store'>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Enter Category Name</label>
                    <input type="text" wire:model='category_name' class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="">Enter Description</label>
                    <textarea wire:model='description' cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>

</div>