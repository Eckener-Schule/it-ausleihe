<?php
require_once "./header.php";
require_once "./navbar.php";
?>
<main role="main" class="container">
    <div class="headline col-12">
        <h4>Gerät/Wagen zurücknehmen:</h4>
    </div>
    <form>
        <div class="col-12 row form-content">
            <div class="offset-lg-4 col-lg-4">
                <div class="form-group">
                    <label for="device-id">Geräte-ID:</label>
                    <input type="text" class="form-control" name="device-id">
                </div>
                <div class="form-group">
                    <label for="cart-id">Wagen-ID:</label>
                    <input type="text" class="form-control" name="cart-id">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Senden</button>
            </div>
        </div>
    </form>
</main>


<?php require_once "./footer.php"; ?>