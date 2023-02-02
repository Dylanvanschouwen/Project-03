<html>
<?php 
date_default_timezone_set("Europe/Amsterdam");
echo "De datum van vandaag is " . date ("D-m-y") . "<br>"; 
/* print username */
echo "Username:" . $_POST ["Uname"] . "<br>";
//var_dump($_POST);


/* print een foutmelding als username < 5 tekens */

echo "Password:" . $_POST ["Pname"] . "<br>";
//var_dump($_POST);
/* print een foutmelding als password <5 tekens */

?>
</html>