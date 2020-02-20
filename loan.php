<?php
require_once "./_autoload.php";
require_once "./view/template/header.php";
require_once "./view/template/navbar.php";

$Loan = new Loan(Database::getDbConnection());

?>
<main role="main" class="container">
    <div class="headline col-12">
         <h4>Gerät/Wagen ausleihen:</h4>
    </div>
    <form method="post">
        <div class="col-12 row form-content">
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="device-id">Geräte-ID:</label>
                    <input type="text" class="form-control" name="device-id" id="device-id">
                </div>
                <div class="form-group">
                    <label for="cart-id">Wagen-ID:</label>
                    <input type="text" class="form-control" name="cart-id" id="cart-id">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="borrower-surname">Vorname:</label>
                    <input type="text" class="form-control" name="borrower-surname" id="borrower-surname">
                </div>
                <div class="form-group">
                    <label for="borrower-name">Nachname:</label>
                    <input type="text" class="form-control" name="borrower-name" id="borrower-name">
                </div>
                <div class="form-group">
                    <label for="borrower-class">Klasse:</label>
                    <input type="text" class="form-control" name="borrower-class" id="borrower-class">
                </div>
                <div class="form-group">
                    <label for="teacher">Lehrer:</label>
                    <input list="teacher" class="form-control" name="teacher">
                    <!-- Datalist values for autocomplete of the input field teacher -->
                    <datalist id="teacher">
                        <option value="Björn Baß">
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="save-data-date">Daten für:</label>
                    <input type="number" name="save-data-date" class="form-control" id="save-data-date" size="3" value="14">
                    <span> Tage speichern</span>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Senden</button>
            </div>
        </div>
    </form>
</main>
<?php require_once "./view/template/footer.php"; ?>
