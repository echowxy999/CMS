<div id="con-edit-api-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit API</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="field-1" placeholder="Ewe">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Username</label>
                            <input type="text" class="form-control" id="field-2" placeholder="Standard">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Password</label>
                            <input type="text" class="form-control" id="field-2" placeholder="Standard">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="field-1" class="form-label">API Key</label>
                            <input type="text" class="form-control" id="field-1" placeholder="Standard">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p><b>Status:</b></p>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input"	id="light-mode-check"/>
                            <label class="form-check-label" for="light-mode-check">Active</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal-API -->