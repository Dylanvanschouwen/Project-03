<!-- This is an overview of all order, only accessible to admins -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>



<!-- Main HTML code -->
<main>
<div class="bestelling_main">
    <h1 id="bestelling_h1">Alle bestellingen:</h1>
</div>

<!-- Main PHP code -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        $queryread = $db->prepare("SELECT ");
        // MySQL query
        // SELECT bestellingen.idbestelling, klanten.voornaam, klanten.achternaam, producten.productnaam, bestellingen.datum, bestellingen.datum, bestellingen.totaalprijs
        // FROM bestellingen_has_producten
        // INNER JOIN bestellingen ON bestellingen.idbestelling = bestellingen_has_producten.bestellingen_idbestelling
        // INNER JOIN producten ON producten.idproduct = bestellingen_has_producten.producten_idproduct
        // INNER JOIN klanten ON klanten.idklant = bestellingen.klanten_idklant
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }

}

?>

</main>



<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>