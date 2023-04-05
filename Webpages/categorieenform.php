<html>
<style>
table, th, td {
  border:1px solid black;
}

  <html>
  <style>
  table, th, td {
  border:1px solid black;
}
  </style>
  </body>
  </html>

  <?php
    if (isset($_POST['submit'])) {
        $connection = new mysqli("localhost", "root", "", "mediamarkt");
        $q = $connection->real_escape_string($_POST['q']);
        $column = $connection->real_escape_string($_POST['column']);

        if ($column == "" || ($column != "wasmachines" && $column != "lastName"))
            $column = "wasmachines";

        $sql = $connection->query("SELECT firstName FROM users WHERE $column LIKE '%$q%'");
        if ($sql->num_rows > 0) {
            while ($data = $sql->fetch_array())
                echo $data['wasmachines'] . "<br>";
        } else
            echo "Your search query doesn't match any data!";
    }
?>
<html>
    <head>
        <title>Filter</title>
    </head>
    <body>
        <form method="post" action="search.php">
            <input type="text" name="q" placeholder="Search Query...">
            <select name="column">
                <option value="">Select Filter</option>
                <option value="categorien">wasmachines</option>
                <option value="lastName">Last Name</option>
            </select>
            <input type="submit" name="submit" value="Find">
        </form>
    </body>
</html>


<table style="width:100%">
  <tr>
    <th>categorieen</th>
    <th>id</th>
  </tr>
  <tr>
    <td>Computermuizen</td>
    <td>Producten_idcategorie</td>
   
  </tr>
  <tr>
    <td>wasmachines</td>
    <td>leveranciers_idleverancier</td>
    
  </tr>
  
  <td>Schermen</td>
  <tr>
  </tr>
  
  <td>Koffiezetapperaten</td>
  <tr>
  </tr>
  
  <td>Toetsenborden</td>
  <tr>
  </tr>
  
  <td>Tv's</td>
  <tr>
  </tr>
  
  <td>Koelkasten</td>
  <tr>
  </tr>
  
  <td>Laptops</td>
  <tr>
  </tr>
  
  <td>Smartphones</td>
  <tr>
  </tr>
  <td>tablets</td>
  <tr>
</table>



</body>
</html>
