<div class="modal fade" id="modal_add_device" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gerät anlegen:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="device-id">Geräte-ID:</label>
                            <input type="text" class="form-control" name="device-id">
                        </div>
                        <div class="form-group">
                            <label for="device-type">Type:</label>
                            <input type="text" class="form-control" name="device-type">
                        </div>
                        <div class="form-group">
                            <label for="device-brand">Hersteller:</label>
                            <input type="text" class="form-control" name="device-brand">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="device-name">Name:</label>
                            <input type="text" class="form-control" name="device-name">
                        </div>
                        <div class="form-group">
                            <label for="device-cart-id">Wagen-ID:</label>
                            <input type="text" class="form-control" name="device-cart-id">
                        </div>
                        <div class="form-group">
                            <label class="device-link">Link:</label>
                            <input type="text" class="form-control" name="device-link">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>
                <button type="submit" class="btn btn-primary">Gerät anlegen</button>
            </div>
        </form>
    </div>
</div>
