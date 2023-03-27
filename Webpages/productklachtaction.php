<!-- This is the product complaint action page -->
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
<main>
    <h1>De ingevulde informatie:</h1>
</main>

<!-- product complaint action page php code -->
<?php

function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function printtable() {
    echo "<table id='productklacht_action'>";
    echo "<tr><td>Voornaam: </td><td>" . $_POST["f_name"] . "</td></tr>";
    echo "<tr><td>Achternaam: </td><td>" . $_POST["l_name"] . "</td></tr>";
    echo "<tr><td>Telefoonnummer: </td><td>" . $_POST["phone"] . "</td></tr>";
    echo "<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>";
    echo "<tr><td>Gender: </td><td>" . $_POST["gender"] . "</td></tr><";
    echo "<tr><td>Product: </td><td>" . $_POST["product_naam"] . "</td></tr>";
    echo "<tr><td>Het probleem: </td><td>" . $_POST["klacht_beschrijving"] . "</td></tr>";
    echo "<tr><td>De oplossing: </td><td>" . $_POST["klacht_oplossing"] . "</td></tr>";
    echo "</table><br>";
}

function queryinsert($conn) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $product = $_POST["product_naam"];
    $probleem = $_POST["klacht_beschrijving"];
    $oplossing = $_POST["klacht_oplossing"];
    // query insert
    $queryinsert = $conn->prepare("INSERT INTO productklachten(voornaam, achternaam, telefoon, email, gender, product, probleem, oplossing) VALUES ('$fname', '$lname', '$phone', '$email', '$gender', '$product', '$probleem', '$oplossing')");
    $queryinsert->execute();
}

printtable();
$conn = connectdb();

if (isset($_POST["submit_btn"])) {
    queryinsert($conn);
}

?>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
