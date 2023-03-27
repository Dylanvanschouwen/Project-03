<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mediamarkt";

  // connectiem maken met de PDO.
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  if (isset($_POST["knop"])){

    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = $_POST["klachtdatum"];
    $contactmanier = $_POST["contactmanier"];
    $huisnummer = $_POST["huisnummer"];
    $medewerker = $_POST["medewerker"];
    $probleem = $_POST["probleem"];
    $oplossing = $_POST["oplossing"];
    // INSERT INTO `medewerkerklachten` (`idmedewerkerklachten`, `volledigenaam`, `straatnaam`, `huisnummer`, `klachtdatum`, `contactmanier`, `medewerker`, `probleem`, `oplossing`) VALUES ('', 'naam', 'straat', 'huis', '2023-03-02', 'online', 'DYlan', 'bla', 'asdasda');
    $queryupdate = $conn->prepare("INSERT INTO medewerkerklachten (idmedewerkerklachten, klachtdatum, volledigenaam, medewerker, straatnaam, huisnummer, contactmanier, probleem, oplossing) VALUES ('NULL', '$klachtdatum', '$volledigenaam', 'asd', 'agw', 'ajsjd', 'whds', 'usdw', 'jsudw')");
    $queryupdate->execute();
  }   

  if (isset($_POST["knop"])){
    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = $_POST["klachtdatum"];
    $contactmanier = $_POST["contactmanier"];
    $huisnummer = $_POST["huisnummer"];
    $medewerker = $_POST["medewerker"];
    $probleem = $_POST["probleem"];
    $oplossing = $_POST["oplossing"];
  }

    echo "naam: ", $volledigenaam, "<br>";
    echo "Straat: ",  $straatnaam, "<br>";
    echo "Datum: ",  $klachtdatum, "<br>";
    echo "Contact: ", $contactmanier, "<br>";
    echo "Huisnummer: ",  $huisnummer, "<br>";
    echo "Medewerker: ",  $medewerker, "<br>";
    echo "Probleem: ",  $probleem, "<br>";
    echo "Oplossing: ",  $oplossing, "<br>";
    
