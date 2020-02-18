<?php
require_once "./view/template/header.php";
require_once "./view/template/navbar.php";
?>
<script type="text/javascript">
    /**
     * @author Maximilian Lembke
     */
$(document).ready(function () {
    $('.form-group input').on('input',function() {
        if($('#device-id').val() !== "" && $('#cart-id').val() !== ""){
            $('#senden').prop( "disabled", true )
            $('#error').show()
        } else {
            $('#senden').prop( "disabled", false )
            $('#error').hide()
        }
    })
});
</script>
<main role="main" class="container">
    <div class="headline col-12">
        <h4>Gerät/Wagen zurücknehmen:</h4>
    </div>
    <form>
        <div class="col-12 row form-content">
            <div class="offset-lg-4 col-lg-4">
                <div class="form-group">
                    <label for="device-id">Geräte-ID:</label>
                    <input type="text" class="form-control" name="device-id" id="device-id" >
                </div>
                <div class="form-group">
                    <label for="cart-id">Wagen-ID:</label>
                    <input type="text" class="form-control" name="cart-id" id="cart-id">
                </div>
            </div>

            <div class="col-12 text-center">
            <div class="alert alert-danger" role="alert" id="error" style="display: none;">
                Bitte füllen Sie nur ein Feld aus. 
            </div>
                <button type="submit" class="btn btn-primary" id="senden">Senden</button>
            </div>
        </div>
    </form>
</main>


<?php require_once "./view/template/footer.php"; ?>
