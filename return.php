<?php
require_once "./header.php";
require_once "./navbar.php";
?>
    <div class="container">
        <div class="headline col-12">
            <h4>Gerät/Wagen zurücknehmen:</h4>
        </div>
        <form>
            <div class="col-12 row form-content">

                <div class="offset-lg-4 col-lg-4">
                    <br>
                    <p class="form-label">Geräte-ID:</p><input type="text" name="device-id"><br><br>
                    <p class="form-label">Wagen-ID:</p><input type="text" name="cart-id"><br><br>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class="btn submit-btn">
                </div>
            </div>
        </form>
    </div>


<?php require_once "./footer.php"; ?>