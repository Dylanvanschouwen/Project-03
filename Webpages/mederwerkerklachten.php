<form method="post" action="medewerkeraction.php">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    Probleem: <textarea type="text" name="probleem" id="probleem"></textarea></br></br>
    Oplossing: <textarea type="text" name="oplossing" id="oplossing"></textarea></br></br>
    Medewerker: <textarea type="text" name="medewerker" id="medewerker"></textarea></br></br>
    klachtdatum: <textarea type="radio" name="klachtdatum" id="klachtdatum"></textarea></br></br>
    Straatnaam: <textarea type="text" name="straatnaam" id="straatnaam"></textarea></br></br>
    Huisnummer: <textarea type="text" name="huisnummer" id="huisnummer"></textarea></br></br>
    Contact: <textarea type="text" name="contactmanier" id="contactmanier"></textarea></br></br>
     <textarea type="text" name="bericht" id="bericht"></textarea></br></br>
    <input type="submit" name="knop" id="knop">
</form>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mediamarkt";

  // connectiem maken met de PDO.
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  if (isset($_POST["knop"])){
    echo ("verzend knop werkt");
    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = "NULL";
    $contactmanier = $_POST["contactmanier"];
    $huisnummer = $_POST["huisnummer"];
    $medewerker = $_POST["medewerker"];
    $probleem = $_POST["probleem"];
    $oplossing = $_POST["oplossing"];
    // INSERT INTO `medewerkerklachten` (`idmedewerkerklachten`, `volledigenaam`, `straatnaam`, `huisnummer`, `klachtdatum`, `contactmanier`, `medewerker`, `probleem`, `oplossing`) VALUES ('', 'naam', 'straat', 'huis', '2023-03-02', 'online', 'DYlan', 'bla', 'asdasda');
    $queryupdate = $conn->prepare("INSERT INTO medewerkerklachten (idmedewerkerklachten, klachtdatum, volledigenaam, medewerker, straatnaam, huisnummer, contactmanier, probleem, oplossing) VALUES ('NULL', 'NULL', '$volledigenaam', 'asd', 'agw', 'ajsjd', 'whds', 'usdw', 'jsudw')");
    $queryupdate->execute();
  }   

  





?>
















