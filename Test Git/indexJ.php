<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Github test</title>
</head>
<body>
<header>
        <h1>Github test voor project 03</h1>
        <h2>Deze pagina is gemaakt door Jack</h2>
        <?php
        include "menu.php";
        ?>
    </header>

    <main>
        <?php
        date_default_timezone_set("Europe/Amsterdam");
        echo "De datum van vandaag is ", date("d F o");
        ?>
    </main>

</body>
</html>