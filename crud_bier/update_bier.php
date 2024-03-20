<?php
    // functie: update bier
    // auteur: Koen

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatebier($_POST) == true){
            echo "<script>alert('bier is gewijzigd')</script>";
        } else {
            echo '<script>alert("bier is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['biercode'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $biercode = $_GET['biercode'];
        $row = getbier($biercode);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig bier</title>
</head>
<body>
  <h2>Wijzig bier</h2>
  <form method="post">

    <label for="naam">naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="soort">soort:</label>
    <input type="text" id="soort" name="soort" required value="<?php echo $row['soort']; ?>"><br>

    <label for="stijl">stijl:</label>
    <input type="text" id="stijl" name="stijl" required value="<?php echo $row['stijl']; ?>"><br>

    <label for="alcohol">alcohol:</label>
    <input type="number" id="alcohol" step="any" name="alcohol" required value="<?php echo $row['alcohol']; ?>"><br>



      <label for="brouwcode">brouwcode:</label>
        <select name="brouwcode" id="bouwcode" required value="<?php echo $row['brouwcode']; ?>">
        <?php
            gettable('brouwcode','naam', 'brouwer');
        ?>
        </select><br>
    

    
    <input type="hidden" id="naam" name="biercode" required value="<?php echo $row['biercode']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_bier.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen biercode opgegeven<br>";
    }
?>