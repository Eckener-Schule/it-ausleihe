<nav class="navbar navbar-expand-lg navbar-light eckener-moodle">
    <p class="navbar-brand-logo"></p><a class="navbar-brand" href="./"><h1>IT-Ausleihe</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    $path = "";
    if (isset($_SERVER['REDIRECT_URL'])) {
        $splitted_url = explode("/", $_SERVER['REDIRECT_URL']);
        $path = end($splitted_url);
    }
    ?>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?php if ($path != "admin" AND $path != "loan" AND $path != "return") {
                echo "active";
            }; ?>">
                <a class="nav-link" href="./">Übersicht </a>
            </li>

            <li class="nav-item <?php if ($path == "admin") {
                echo "active";
            }; ?>">
                <a class="nav-link" href="./admin">Verwaltung</a>
            </li>

            <li class="nav-item <?php if ($path == "loan") {
                echo "active";
            }; ?>">
                <a class="nav-link" href="./loan">Ausleihe</a>
            </li>

            <li class="nav-item <?php if ($path == "return") {
                echo "active";
            }; ?>">
                <a class="nav-link" href="./return">Rücknahme</a>
            </li>
        </ul>
    </div>
</nav>