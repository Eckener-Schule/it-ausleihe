
 <!-- @author Jacob Prütz
 @author Maximilian Lembke -->

<div class="modal fade" id="modal_add_cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="post">
            <div class="modal-header">
                <h5 class="modal-title">Wagen anlegen:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="cart-id">Wagen-ID:</label>
                            <input type="text" class="form-control" name="cart-id" id="cart-id">
                        </div>
                        <div class="form-group">
                            <label for="cart-name">Name:</label>
                            <input type="text" class="form-control" name="cart-name" id="cart-name">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-1">Gerät1-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-1">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-2">Gerät2-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-2">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-3">Gerät3-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-3">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-4">Gerät4-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-4">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="cart-device-5">Gerät5-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-5">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-6">Gerät6-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-6">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-7">Gerät7-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-7">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-8">Gerät8-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-8">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-9">Gerät9-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-9">
                        </div>
                        <div class="form-group">
                            <label for="cart-device-10">Gerät10-ID:</label>
                            <input type="text" class="form-control" name="cart-device[]" id="cart-device-10">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>
                <button type="submit" name="do" value="addCart" class="btn btn-primary">Wagen anlegen</button>
            </div>
        </form>
    </div>
</div>
