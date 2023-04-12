<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>

<?php method: "post";
// auteur: Dylan
// functie: algemene functies tbv hergebruik

function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        // echo "Connection succesful!";
        queryread($db);
        return $dblever;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($leverdb) {
    $readlever = $leverdb->prepare("SELECT IDlever, naamlever, IDland_landen FROM leveranciers WHERE idleverancier = IDlever, leveranciernaam = naamlever, landen_idland = IDland_landen");
    $readlever->execute();
    queryprint($read);
    return $read;
}

function queryprint($readlever) {
    foreach ($readlever as $leverdata) {
        echo "<tr>";
        echo "<td>" . $leverdata['IDlever'] . "</td>";
        echo "<td>" . $leverdata['naamlever'] . "</td>";
        echo "<td>" . $leverdata['IDland_landen'] . "</td>";
        echo "</tr>";
    }
    echo "</table></div>";
}

// Executing functions
$dblever = connectdb();

?>

</main>
