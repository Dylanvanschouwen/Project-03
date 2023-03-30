<!-- This is the webshop -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>



<!-- Main code -->
<main class="webshop_main">
<div id="webshop_h1">
    <h1>Webshop</h1>
</div>

<!-- Main PHP code -->
<?php
// Functions
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        // echo "Connection succesful!";
        queryread($db);
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($db) {
    $read = $db->prepare("");
    $read->execute();
    queryprint($read);
    return $read;
}

function queryprint($read) {
    echo "<div class='productentable_container'><table id='productentable_body'>";
    echo "<th></th><th></th><th></th><th></th>";
    foreach ($read as $data) {
        echo "<tr>";
        echo "<td>" . $data[''] . "</td>";
        echo "</tr>";
//         SELECT producten.idproduct, producten.productnaam, producten.prijs, leveranciers.leveranciernaam, categories.idcategorie
// FROM producten
// INNER JOIN leveranciers ON leveranciers.idleverancier = producten.leveranciers_idleverancier
// INNER JOIN categories ON categories.idcategorie = producten.categories_idcategorie
    }
    echo "</table></div>";
}

// Execute functions
$db = connectdb();

?>

</main>



<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
