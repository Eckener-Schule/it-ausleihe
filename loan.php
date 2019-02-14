<?php
require_once "./header.php";
require_once "./navbar.php";
?>
    <br><br>
    <div class="container">
        <div class="col-12 row">
                <div class="col-6">
                    <form>
                    Geräte-ID: <input type="text" name="device-id"><br><br>
                    Wagen-ID: <input type="text" name="cart-id">

                </div>
                <div class="col-6">
                    Vorname: <input type="text" name="borrower-surname"><br><br>
                    Nachname:<input type="text" name="borrower-name"><br><br>
                    Klasse: <input type="text" name="borrower-class"><br><br>
                    Lehrer: <input type="text" name="borrower-teacher"><br><br>
                    </form>
                </div>
        </div>
    </div>

<?php require_once "./footer.php"; ?>