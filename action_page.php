<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action php</title>
</head>
<body>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";?>
    <?php 
    if (isset ($_POST)){
        echo ("Username: " . $_POST["user"] . "<br>");

        echo ("Password: " . $_POST["password"]);
    } 
 
    $stre = "jhwdwh";
    echo strlen($stre); // 6<br>



    $len = strlen($_POST ['user']);

    if ($len < 5){
        echo "<br>Username groter  dan 4 tekens<br>";
    }

    elseif($len > 10){
        echo "username mopet korter dan 10";
    }
   ?>
</body>
</html>