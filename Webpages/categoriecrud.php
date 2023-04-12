<!-- Category CRUD page which can be used to view, change or delete categories from the database -->
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
<main class="cat_toevoeg_main">
    <div class="cat_toevoeg_h1_container">
        <h1 id="cat_toevoeg_h1">Categorieën toevoegen</h1>
    </div>


<!-- Main PHP code -->
<?php
// Connect to the database
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        getdata($db);
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

// Get category data from the database
function getdata($db) {
    $query = $db->prepare("SELECT idcategorie, categorienaam AS 'Categorie' FROM categorieën");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    printdata($result);
}

// Universal printable table
function printdata($result) {
    $table = "<table border=1px>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach ($headers as $headers) {
        $table .= "<th>" . $headers . "</th>";
    }
    $table .= "</tr>";

    foreach ($result as $row) {
        $table .= "<tr>";
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }

        // CRUD buttons (change/delete)
        $table .= "<td>";
        $table .= "<form method='POST' action='categoriewzg.php'>
                    <button name='wzg_btn' value='$row[idcategorie]'>Wijzigen</button>
                   </form>";
        $table .= "</td>";
        $table .= "<td>";
        $table .= "<form method='POST' action='#'>
                    <button name='del_btn' value='$row[idcategorie]'>Verwijderen</button>
                   </form>";
        $table .= "</td>";

        $table .= "</tr>";
    }

    $table .= "</table>";
    echo $table;
}

$db = connectdb();

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>