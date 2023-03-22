<!-- This is the product complaint form -->
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
    <header class="productklacht_header">
        <h1>Klacht over een product</h1>
    </header>

    <section>
        <form method="post" action="./productklachtaction.php"  class="productklacht_form">
            <label for="f_name">Voornaam: </label>
            <input type="text" name="f_name"> 
            <br>

            <label for="l_name">Achternaam: </label>
            <input type="text" name="l_name">
            <br>

            <label for="phone">Telefoonnummer: </label>
            <input type="number" name="phone">
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>

            <label for="gender">Man</label>    
            <input type="radio" name="gender" value="Man">
            <label for="gender">Vrouw</label>   
            <input type="radio" name="gender" value="Vrouw">
            <br>

            <label for="product_naam">Over welk product gaat het?</label>
            <input type="text" name="product_naam">
            <br>

            <label for="klacht_beschrijving">Wat is uw klacht over dit product?</label>
            <input type="text" name="klacht_beschrijving">
            <br>

            <label for="klacht_oplossing">Hoe wilt u dat wij dit oplossen?</label>
            <input type="text" name="klacht_oplossing">
            <br>

            <br>
            <input type="submit" value="Verzenden" name="submit_btn" id="productklacht_submit">
        </form>
    </section>


    <!-- PHP van product klachten formulier -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        echo "Connection succesful! <br>";
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($conn) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $product = $_POST["product_naam"];
    $probleem = $_POST["klacht_beschrijving"];
    $oplossing = $_POST["klacht_oplossing"];

    // query read
    $queryinsert = $conn->prepare("INSERT INTO productklachten(voornaam, achternaam, telefoon, email, gender, product, probleem, oplossing) VALUES ('$fname', '$lname', '$phone', '$email', '$gender', '$product', '$probleem', '$oplossing')");
    $queryinsert->execute();
}

$conn = connectdb();
if (isset($_POST["submit_btn"])) {
    queryread($conn);
}

    ?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
