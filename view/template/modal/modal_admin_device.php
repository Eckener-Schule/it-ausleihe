<div class="modal fade" id="modal_admin_device" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Gerät bearbeiten:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="form-label">Geräte-ID:</label>
                                <input type="text" class="form-control" name="device-id" id="edit-device-id">
                            </div>
                            <div class="form-group">
                                <label for="form-label">Type:</label>
                                <input type="text" class="form-control" name="device-type" id="edit-device-type">
                            </div>
                            <div class="form-group">
                                <label for="form-label">Hersteller:</label>
                                <input type="text" class="form-control" name="device-brand" id="edit-device-brand">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="form-label">Name:</label>
                                <input type="text" class="form-control" name="device-name" id="edit-device-name">
                            </div>
                            <div class="form-group">
                                <label for="form-label">Wagen-ID:</label>
                                <select class="form-control" name="device-cart-id" name="device-cart-id" id="edit-device-cart-id">
                                    <!-- @ToDo Exchange static cart values with database data -->
                                    <option value="1">Cart 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>

                    <input type="hidden" name="newDevice" value="1">
                    <button type="submit" class="btn btn-primary">Änderungen speichern</button>
                </div>
            </form>
        </div>
    </div>
</div>