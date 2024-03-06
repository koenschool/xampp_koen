<?php
// auteur: Wigmans
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deletefiets($_GET['id']) == true){
        echo '<script>alert("fietscode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_fietsen.php'); </script>";
    } else {
        echo '<script>alert("fiets is NIET verwijderd")</script>';
    }
}
?>

