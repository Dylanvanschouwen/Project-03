<?php
        require_once('functions.php');
        // test of er op de wijzig knop is gedrukt
        if(isset ($_POST['btn_wzg'])){
            UpdateBier ($_POST);

            //header("location: update.php?$_POST[NR]");
            

        }
        
        if (isset($_GET['biercode'])){
        echo "<h1>Update Bier</h1>";

        echo "Data uit het vorige formulier:<br>";
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];

        $row = GetBier($biercode);
    
   ?>

<html>
    <body>
        <form method="post" action='crud_bieren.php'><br>
        Biercode:<input type="" name="biercode" value="<?php echo $row['biercode'];?>"><br>
        Naam:<input type="" name="Naam" value="<?php echo $row ['naam'];?>"><br>
        Soort:<input type="" name="Soort" value="<?php echo $row ['soort'];?>"><br>
        Stijl:<input type="" name="Stijl" value="<?php echo $row ['stijl'];?>"><br>
        Alcohol:<input type="" name="Alcohol" value="<?php echo $row ['alcohol'];?>"><br>
        Brouwcode:<input type="" name="Brouwcode" value="<?php echo $row ['brouwcode'];?>"><br>
       
        <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
    </body>
</html>

<?php
        }
        ?>