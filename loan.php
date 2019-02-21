<?php
require_once "./header.php";
require_once "./navbar.php";
?>
    <div class="container">
        <div class="headline col-12">
            <h4>Gerät/Wagen ausleihen:</h4>
        </div>
        <form>
            <div class="col-12 row form-content">

                <div class="col-sm-12 col-lg-6">
                    <br>
                    <p class="form-label">Geräte-ID:</p><input type="text" name="device-id" id="device-id"><br><br>
                    <p class="form-label">Wagen-ID:</p><input type="text" name="cart-id" id="cart-id">
                </div>

                <div class="col-sm-12 col-lg-6">
                    <br>
                    <p class="form-label">Vorname:</p><input type="text" name="borrower-surname"
                                                             id="borrower-surname"><br><br>
                    <p class="form-label">Nachname:</p><input type="text" name="borrower-name"
                                                              id="borrower-name"><br><br>
                    <p class="form-label">Klasse:</p><input type="text" name="borrower-class"
                                                            id="borrower-class"><br><br>
                    <p class="form-label">Lehrer:</p><input list="teacher" name="teacher"><br><br>
                    <!-- Datalist values for autocomplete of the input field teacher -->
                    <datalist id="teacher">
                        <option value="Björn Baß">
                    </datalist>

                    <p class="form-label">Daten für:</p><input type="text" name="save-data-date" id="save-data-date"
                                                               size="3" value="14"><span> Tage speichern</span><br><br>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class="btn submit-btn">
                </div>
            </div>

        </form>
    </div>
<?php require_once "./footer.php"; ?>