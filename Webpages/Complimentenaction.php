<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mediamarkt";

// connectiem maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST["knop"])){

  $volledigenaam = $_POST["naam"];
  $email = $_POST["email"];
  $woonplaats = $_POST["woonplaats"];
  $geboortedatum = $_POST["geboortedatum"];
  $compliment = $_POST["compliment"];
  $Uniek = $_POST["uniek"];

  // INSERT statement with corrected syntax
  $queryupdate = $conn->prepare("INSERT INTO complimenten (idcomplimenten, volledigenaam, email, woonplaats, geboortedatum, compliment, Uniek) 
   VALUES (:volledigenaam, :email, :woonplaats, :geboortedatum, :compliment, :Uniek)");
  $queryupdate->bindParam(':volledigenaam', $volledigenaam);
  $queryupdate->bindParam(':email', $email);
  $queryupdate->bindParam(':woonplaats', $woonplaats);
  $queryupdate->bindParam(':geboortedatum', $geboortedatum);
  $queryupdate->bindParam(':compliment', $compliment);
  $queryupdate->bindParam(':Uniek', $Uniek);
  $queryupdate->execute();
}   

if (isset($_POST["knop"])){
  $volledigenaam = $_POST["naam"];
  $email = $_POST["email"];
  $woonplaats = $_POST["woonplaats"];
  $geboortedatum = $_POST["geboortedatum"];
  $compliment = $_POST["compliment"];
  $Uniek = $_POST["uniek"];
}

echo "naam: ", $volledigenaam, "<br>";
echo "email: ",  $email, "<br>";
echo "woonplaats: ",  $woonplaats, "<br>";
echo "geboortedatum: ", $geboortedatum, "<br>";
echo "Compliment: ",  $compliment, "<br>";
echo "Uniek: ",  $Uniek, "<br>";
?> 