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
        <?php include "menu.php" ?>
        <h1>Github test voor project 03</h1>
    </header>
    <main>
    <?php
    date_default_timezone_set("Europe/Amsterdam"); 
    echo "de datum van vandaag is" . date ("D-m-y") . "<br>";?>
    </main>
</body>
</html>