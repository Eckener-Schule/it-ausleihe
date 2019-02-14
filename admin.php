<?php
include "./header.php";
include "./navbar.php";

// Including of bootstrap-modals
include "./modals/modal_admin_device.php";
include "./modals/modal_history_device.php";
include "./modals/modal_delete_device.php";

include "./modals/modal_admin_cart.php";
include "./modals/modal_history_cart.php";
include "./modals/modal_delete_cart.php";

include "./modals/modal_add_cart.php";
include "./modals/modal_add_device.php";
?>

<div class="container">
    <div class="row">
        <button type="button" class="btn btn-create" data-toggle="modal" data-target="#modal_add_cart">
            + Wagen anlegen
        </button>
        <div class="headline col-12">
            <h4>Wagen verwalten:</h4>
        </div>
        <div class="dataTable col-12">
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
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_admin_cart">
                            <img src="./img/writing.png" width="15px" height="15px">
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_history_cart">
                            <img src="./img/eye.png" width="15px" height="15px">
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_delete_cart">
                            <img src="./img/trash.png" width="15px" height="15px">
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <button type="button" class="btn btn-create" data-toggle="modal" data-target="#modal_add_device">
            + Gerät anlegen
        </button>
        <div class="headline col-12">
            <h4>Geräte verwalten:</h4>
        </div>
        <div class="dataTable col-12">
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
                            <img src="./img/writing.png" width="15px" height="15px">
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_history_device">
                            <img src="./img/eye.png" width="15px" height="15px">
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal_delete_device">
                            <img src="./img/trash.png" width="15px" height="15px">
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php include "./footer.php"; ?>

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
                "sInfo": "Ergebnisse _START_ bis _END_ von (_TOTAL_)"
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
                "sInfo": "Ergebnisse _START_ bis _END_ von (_TOTAL_)"
            },
            "lengthChange": false
        });
    });

    //Show modal
    $('#myModal').on('shown.bs.modal', function () {
        $('#modal_admin_device').modal('show')    })

</script>
