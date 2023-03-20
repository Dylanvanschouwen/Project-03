<form method="post" action="">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    Bericht <textarea type="text" name="bericht" id="bericht"></textarea></br></br>
    <input type="submit" name="knop" id="knop">
</form>


<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "klachtenform";

// connectiem maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password) ;
$conn->setAttribute(PDO: ATTR_ERRMODE ,  PDO: ERRMODE_EXCEPTION) ;

?>


try {
    // INSERT query uitvoeren
    $stmt = $conn->prepare ("INSERT INTO berichten (naam, bericht, datumtijd)
    VALUES (:naam , :bericht, :datumtijd)");
    $stmt->bindParam (':naam', $naam);
    $stmt->bindParam (':bericht', $bericht);
    $stmt->bindParam (':datumtijd', $datumtijd);

    // insert rij
if (isset($_RESQUEST['naam']))
{
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];
    $datumtijd = Date('d-m-y');
    $stmt->execute();

    // terugsturen naar de hoofdpagina
    header('Location: index.php');
}}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$sqlSelect = "SELECT * from berichten";
$data = $conn->query($sqlSelect);

$conn = null;
?>















}
