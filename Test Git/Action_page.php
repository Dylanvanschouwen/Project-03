<html>
    <link rel="stylesheet" href="style.css">
<?php 
echo "<br>";


date_default_timezone_set("Europe/Amsterdam");
echo "De datum van vandaag is " . date ("D-m-y") . "<br>"; 
/* print username */
echo "Username:" . $_POST ["Uname"] . "<br>";
echo "Password:" . $_POST ["Pname"] . "<br>";
//var_dump($_POST);


/* print een foutmelding als username < 5 tekens */
$len = strlen($_POST['Uname']);
echo "de lengte van uname: $len";

if ( $len < 5) {
    echo "<br>Username moet groter zijn dan 4 tekens <br>";
}
else if ($len > 10) {
    echo "<br>Username moet kleiner zijn dan 10 tekens <br>";
}
//var_dump($_POST);//
?>
</html>