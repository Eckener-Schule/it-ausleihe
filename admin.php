<?php
require_once "./header.php";
require_once "./navbar.php";

// Including of bootstrap-modals
require_once "./modals/modal_admin_device.php";
require_once "./modals/modal_history_device.php";
require_once "./modals/modal_delete_device.php";

require_once "./modals/modal_admin_cart.php";
require_once "./modals/modal_history_cart.php";
require_once "./modals/modal_delete_cart.php";

require_once "./modals/modal_add_cart.php";
require_once "./modals/modal_add_device.php";

// Testdata for data to modal
$cartID = "123456";

?>
<main role="main" class="container">
    <div class="row">
        <div class="col">
            <h4>Wagen verwalten:</h4>
            <table id="admin_carts" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Wagen-ID</th>
                    <th>Wagen-Name</th>
                    <th>Anzahl-Geräte</th>
                    <th>Optionen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Notebooks</td>
                    <td>10</td>
                    <td class="function-icon">
                        <button type="button" class="btn" data-toggle="modal" data-cartid="<?php echo $cartID; ?>" data-target="#modal_admin_cart">
                        <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-cartid="<?php echo $cartID; ?>" data-target="#modal_history_cart">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-cartid="<?php echo $cartID; ?>" data-target="#modal_delete_cart">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_cart">
            <i class="fas fa-plus-square"></i> Wagen anlegen
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4>Geräte verwalten:</h4>
            <table id="admin_devices" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Geräte-ID</th>
                    <th>Type</th>
                    <th>Hersteller</th>
                    <th>Name</th>
                    <th>Wagen-ID</th>
                    <th>Optionen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>7</td>
                    <td class="function-icon">
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_admin_device">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_history_device">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_delete_device">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_device">
            <i class="fas fa-plus-square"></i> Gerät anlegen
        </button>
        </div>
    </div>
</main>
<?php require_once "./footer.php"; ?>
<script>
    // Datatable attributes
    $(document).ready(function () {
        $('#admin_devices').DataTable({
            language: {
                "paginate": {
                    "previous": "<<",
                    "next": ">>",
                },
                "search": "Suche:",
                "sInfo": "Ergebnisse _START_ bis _END_ von (_TOTAL_)",
                "infoFiltered":   "(gefiltert aus insgesamt _MAX_ Einträgen)",
                "infoEmpty":        "Ergebnisse 0 bis 0 von (0)",
                "sEmptyTable": "Keine Einträge zum Anzeigen",
                "sZeroRecords": "Keine Einträge zum Anzeigen"
            },
            "lengthChange": false
        });
        $('#admin_carts').DataTable({
            language: {
                "paginate": {
                    "previous": "<<",
                    "next": ">>",
                },
                "search": "Suche:",
                "sInfo": "Ergebnisse _START_ bis _END_ von (_TOTAL_)",
                "infoFiltered":   "(gefiltert aus insgesamt _MAX_ Einträgen)",
                "infoEmpty":        "Ergebnisse 0 bis 0 von (0)",
                "sEmptyTable": "Keine Einträge zum Anzeigen",
                "sZeroRecords": "Keine Einträge zum Anzeigen"
            },
            "lengthChange": false
        });
    });

    //triggered when modal is about to be shown
    $('#modal_admin_cart').on('show.bs.modal', function(e) {
        var cartID = $(e.relatedTarget).data('cartid');
        $(e.currentTarget).find('input[name="cart-id"]').val(cartID);
    });
    $('#modal_delete_cart').on('show.bs.modal', function(e) {
        var cartID = $(e.relatedTarget).data('cartid');
       // $(e.currentTarget).find('input[name="cart-id"]').val(cartID);
    });
</script>
