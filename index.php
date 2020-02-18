<?php require_once "./_autoload.php"; ?>

<?php require_once "./view/template/header.php"; ?>
<?php require_once "./view/template/navbar.php"; ?>

<main role="main" class="container">
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
                    <td>10107</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 1</td>
                </tr>
                <tr>
                    <td>10109</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 3</td>
                </tr>
                <tr>
                    <td>10087</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 5</td>
                </tr>
                <tr>
                    <td>10111</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 7</td>
                </tr>
                <tr>
                    <td>10102</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>5000 Serie</td>
                </tr>
                <tr>
                    <td>10094</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>7000 Serie</td>
                </tr>
                <tr>
                    <td>10112</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad X1 Extreme</td>
                </tr>
                <tr>
                    <td>10191</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad T590</td>
                </tr>
                <tr>
                    <td>10105</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad L590</td>
                </tr>
                <tr>
                    <td>10103</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Air</td>
                </tr>
                <tr>
                    <td>10086</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Pro</td>
                </tr>
                <tr>
                    <td>10630</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 LTE</td>
                </tr>
                <tr>
                    <td>10618</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 Wi-Fi</td>
                </tr>
                <tr>
                    <td>10692</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW7100</td>
                </tr>
                <tr>
                    <td>10664</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW9400W</td>
                </tr>
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
                    <td>10099</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 1</td>
                    <td>01-01-2020</td>
                </tr>
                <tr>
                    <td>10108</td>
                    <td>Notebook</td>
                    <td>Acer</td>
                    <td>Aspire 3</td>
                    <td>12-01-2020</td>
                </tr>
                <tr>
                    <td>10090</td>
                    <td>Notebook</td>
                    <td>Dell</td>
                    <td>5000 Serie</td>
                    <td>13-02-2020</td>
                </tr>
                <tr>
                    <td>10089</td>
                    <td>Notebook</td>
                    <td>Lenovo</td>
                    <td>ThinkPad L590</td>
                    <td>20-08-2019</td>
                </tr>
                <tr>
                    <td>10110</td>
                    <td>Notebook</td>
                    <td>Apple</td>
                    <td>MacBook Pro</td>
                    <td>15-10-2019</td>
                </tr>
                <tr>
                    <td>10088</td>
                    <td>Tablet</td>
                    <td>Samsung</td>
                    <td>Galaxy Tab S6 Wi-Fi</td>
                    <td>14-09-2019</td>
                </tr>
                <tr>
                    <td>10093</td>
                    <td>Beamer</td>
                    <td>Epson</td>
                    <td>EH-TW9400W</td>
                    <td>01-12-2019</td>
                </tr>
            </table>
        </div>

    </div>
</div>
<?php require_once "./view/template/footer.php"; ?>
<script>
    $(document).ready(function () {
        $('#avbl_devices').DataTable({
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
        $('#lend_devices').DataTable({
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
</script>
