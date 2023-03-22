<?php
  if (isset($_POST["knop"])){
    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = "NULL";
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
    
