<div class="modal fade" id="modal_delete_device" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Gerät löschen:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Sind sie sicher das sie das unten genannte Gerät entfernen möchten ?</p>
                <div class="modal-device">
                    <div><strong>Geräte-ID:</strong> <span id="modal-deleted-device"></span></div>
                    <div><strong>Type:</strong> <span id="modal-type-device"></span></div>
                    <div><strong>Name:</strong> <span id="modal-name-device"></span></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>
                <form id="delete-device-form" method="post">
                    <button id="delete-device-button" name="deleteDevice" value="0" type="submit" class="btn btn-primary">Löschen</button>
                </form>
            </div>
        </div>
    </div>
</div>