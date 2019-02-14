<?php include "./header.php"; ?>
<?php include "./navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="headline">
            <h4>Geräte verfügbar:</h4>
        </div>
        <div class="dataTable col-12">
            <table id="avbl_devices" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Geräte-ID</th>
                    <th>Type</th>
                    <th>Hersteller</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                </tr>
                </tfoot>
            </table>
        </div>



        <div class="headline">
            <h4>Geräte verliehen:</h4>
        </div>
        <div class="dataTable col-12">
            <table id="lend_devices" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Geräte-ID</th>
                    <th>Type</th>
                    <th>Hersteller</th>
                    <th>Name</th>
                    <th>Ausgeliehen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>
                <tr>
                    <td>123456</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 555</td>
                    <td>12-01-2019</td>
                </tr>

                </tfoot>
            </table>
        </div>

    </div>
</div>
<?php include "./footer.php"; ?>
<script>
    $(document).ready(function () {
        $('#avbl_devices').DataTable({
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
        $('#lend_devices').DataTable({
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
</script>
