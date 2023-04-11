<!-- On this page you can add categories to the database -->
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

    <div class="cat_toevoeg_form_container">
        <form method="POST" id="cat_toevoeg_form">
            <label for="cat_name">Naam van de categorie: </label>
            <input type="text" name="cat_name">
            <br>
            <input type="submit" name="submit_btn" value="Toevoegen">
        </form>
    </div>

<!-- Main PHP code -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        checkpost($db);
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

function checkpost($db) {
    if (isset($_POST["cat_name"])) {
        $cat_name = $_POST["cat_name"];
        updatedb($cat_name, $db);
    }
}

function updatedb($cat_name, $db) {
    $queryupdate = $db->prepare("INSERT INTO `categorieën` (`idcategorie`, `categorienaam`) VALUES (NULL, '$cat_name')");
    $queryupdate->execute();
    echo "<br><p id='submit_txt'>De categorie $cat_name is toegevoegd aan de database!</p>";
}

$db = connectdb();

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>