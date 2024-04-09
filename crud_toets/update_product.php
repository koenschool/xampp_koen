<?php
    // functie: update product
    // auteur: Koen

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateproduct($_POST) == true){
            echo "<script>alert('product is gewijzigd')</script>";
        } else {
            echo '<script>alert("product is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['productcode'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $productcode = $_GET['productcode'];
        $row = getproduct($productcode);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig product</title>
</head>
<body>
  <h2>Wijzig product</h2>
  <form method="post">

    <label for="naam">naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="merk">merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $row['merk']; ?>"><br>

    <label for="prijs">prijs:</label>
    <input type="text" id="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>
    
    <input type="hidden" id="naam" name="productcode" required value="<?php echo $row['productcode']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_product.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen productcode opgegeven<br>";
    }
?>