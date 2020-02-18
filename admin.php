<?php
require_once "./_autoload.php";

require_once "./view/template/header.php";
require_once "./view/template/navbar.php";

// Including of bootstrap-modals
require_once "./view/template/modal/modal_admin_device.php";
require_once "./view/template/modal/modal_history_device.php";
require_once "./view/template/modal/modal_delete_device.php";

require_once "./view/template/modal/modal_admin_cart.php";
require_once "./view/template/modal/modal_history_cart.php";
require_once "./view/template/modal/modal_delete_cart.php";

require_once "./view/template/modal/modal_add_cart.php";
require_once "./view/template/modal/modal_add_device.php";

// Testdata for data to modal
$cartID = "123456";

?>
<main role="main" class="container">
    <div class="row">
        <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_cart">
                <i class="fas fa-plus-square"></i> Wagen anlegen
            </button>
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
                    <td>15</td>
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
                <tr>
                    <td>2</td>
                    <td>Tablets</td>
                    <td>5</td>
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
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_device">
            <i class="fas fa-plus-square"></i> Gerät anlegen
        </button>
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
                    <td>10108</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 3</td>
                    <td>1</td>
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
                <tr>
                    <td>10109</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 3</td>
                    <td>1</td>
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
                <tr>
                    <td>10087</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 5</td>
                    <td>1</td>
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
                <tr>
                    <td>10107</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 1</td>
                    <td>1</td>
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
                <tr>
                    <td>10099</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 1</td>
                    <td>1</td>
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
                <tr>
                    <td>10111</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 7</td>
                    <td>1</td>
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
                <tr>
                    <td>10102</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>5000 Serie</td>
                    <td>1</td>
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
                <tr>
                    <td>10090</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>5000 Serie</td>
                    <td>1</td>
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
                <tr>
                    <td>10094</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>7000 Serie</td>
                    <td>1</td>
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
                <tr>
                    <td>10112</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad X1 Extreme</td>
                    <td>1</td>
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
                <tr>
                    <td>10105</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad L590</td>
                    <td>1</td>
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
                <tr>
                    <td>10191</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad T590</td>
                    <td>1</td>
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
                <tr>
                    <td>10089</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad T590</td>
                    <td>1</td>
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
                <tr>
                    <td>10086</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Pro</td>
                    <td>1</td>
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
                <tr>
                    <td>10110</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Pro</td>
                    <td>1</td>
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
                <tr>
                    <td>10103</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Air</td>
                    <td></td>
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
                <tr>
                    <td>10618</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 Wi-Fi</td>
                    <td>2</td>
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
                <tr>
                    <td>10088</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 Wi-Fi</td>
                    <td>2</td>
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
                <tr>
                    <td>10630</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 LTE</td>
                    <td>2</td>
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
                <tr>
                    <td>10631</td>
                    <td>Tablet</td>
                    <td>Apple</td>
                    <td>iPad</td>
                    <td>2</td>
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
                <tr>
                    <td>10632</td>
                    <td>Tablet</td>
                    <td>Huawei</td>
                    <td>MediaPad T5</td>
                    <td>2</td>
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
                <tr>
                    <td>10633</td>
                    <td>Tablet</td>
                    <td>Huawei</td>
                    <td>MediaPad M5</td>
                    <td></td>
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
                <tr>
                    <td>10664</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW9400W</td>
                    <td></td>
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
                <tr>
                    <td>10093</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW9400W</td>
                    <td></td>
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
                <tr>
                    <td>10692</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW7100</td>
                    <td></td>
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
        </div>
    </div>
</div>
<?php require_once "./view/template/footer.php"; ?>
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
