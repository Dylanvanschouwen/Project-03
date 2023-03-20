<form method="post" action="">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    Bericht: <textarea type="text" name="bericht" id="bericht"></textarea></br></br>
    Medewerker: <textarea type="text" name="medewerker" id="Medewerker"></textarea></br></br>
    Straatnaam: <textarea type="text" name="straatnaam" id="Straatnaam"></textarea></br></br>
    Huisnummer: <textarea type="text" name="huisnummer" id="huisnummer"></textarea></br></br>
    Contact: <textarea type="text" name="contact" id="contact"></textarea></br></br>
     <textarea type="text" name="bericht" id="bericht"></textarea></br></br>
    <input type="submit" name="knop" id="knop">
</form>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "klachtenform";

// connectiem maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if (isset($_POST["knop"])){
  echo ("verzend knop werkt");
  $naam = $_POST ["naam"];
  $bericht = $_POST ["bericht"];
  $queryupdate = $conn->prepare("INSERT INTO Klachten(berichten, naam) VALUES ('$bericht', '$naam')");
  $queryupdate->execute();

}





?>
















