<!-- This is the Klachten pagina voor de website -->
<!-- Author: Dylan -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>

<!-- main code -->

    <header class="WKlachten_header">
        <h1> Klachten over website</h1>
    </header>

<form method="post" action="./Websiteklachtaction.php"  class="Websiteklacht_form">
    <label for="WVoornaam">Voornaam: </label>
    <input type="text" name="Voornaam"><br>

    <label for="WAchternaam">Achternaam: </label>
    <input type="text" name="l_name"><br>

    <label for="WTelefoon">Telefoonnummer: </label>
    <input type="number" name="Wtelefoon"><br>

    <label for="WAdress">Adress: </label>
    <input type="text" name="WAdress"><br>

    <label for="WPostcode">Postcode: </label>
    <input type="text" name="WPostcode"><br>

    <div id="WGeslacht">
        <label for="WGeslacht">Man</label>    
        <input type="radio" name="Wgeslacht" value="Man">
        <label for="WGeslacht">Vrouw</label>   
        <input type="radio" name="Wgeslacht" value="Vrouw">
    </div> <br>

    <label for="W_Klacht">Wat is de klacht?</label>
    <input type="text" name="W_Klacht" class="WKlacht_text">
    <br>

    <label for="WKlacht_fix">Wat zou u wijzigen om deze klacht op te lossen? </label>
    <input type="text" name="WKlacht_fix" class="WKlacht_text"><br>

    <br><br>

    <input type="submit" value="Verzenden" name="submit_btn" id="WKlacht_submit">
</form>

</main>
