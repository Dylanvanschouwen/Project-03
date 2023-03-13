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
    <header>
        <h1>Klacht over een product formulier</h1>
    </header>

    <section class="productklacht_form">
        <form method="post" action="#">
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
            <input type="radio" name="gender">
            <label for="gender">Vrouw</label>   
            <input type="radio" name="gender">
            <br>


            
            <br>
            <input type="submit" value="Verzenden" name="submit_btn">
        </form>
    </section>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
