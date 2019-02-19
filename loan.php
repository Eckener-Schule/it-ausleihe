<?php
require_once "./header.php";
require_once "./navbar.php";
?>
    <div class="container">
        <div class="headline col-12">
            <h4>Gerät/Wagen ausleihen:</h4>
        </div>
        <div class="col-12 row form-content">
                <div class="col-sm-12 col-lg-6">
                    <form>
                        <br>
                        <p class="form-label">Geräte-ID:</p><input type="text" name="device-id" id="device-id"><br><br>
                        <p class="form-label">Wagen-ID:</p><input type="text" name="cart-id" id="cart-id">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <br>
                    <p class="form-label">Vorname:</p><input type="text" name="borrower-surname"><br><br>
                    <p class="form-label">Nachname:</p><input type="text" name="borrower-name"><br><br>
                    <p class="form-label">Klasse:</p><input type="text" name="borrower-class"><br><br>
                    <p class="form-label">Lehrer:</p><input list="teacher" name="browser"><br><br>
                    <datalist id="teacher">
                        <option value="Björn Baß">
                    </datalist>
                </div>
            <div class="col-12 text-center">
                <input type="submit" class="btn submit-btn">
            </div>

            </form>
        </div>
    </div>

<?php require_once "./footer.php"; ?>