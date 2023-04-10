<?php
$connection = new mysqli("localhost", "root", "", "mediamarkt");

// SQL-query om de product-ID's van de wasmachines op te halen
$sql = $connection->query("SELECT Producten_id FROM categorien WHERE categorieen = 'wasmachines'");

// Tabelkoppen
echo "<table>";
echo "<tr><th>categorieen</th><th>id</th></tr>";

// Tabelgegevens
if ($sql->num_rows > 0) {
    while ($data = $sql->fetch_array()) {
        echo "<tr><td>wasmachines</td><td>" . $data['Producten_id'] . "</td></tr>";
    }
}

// Tabel afsluiten
echo "</table>";
?>
