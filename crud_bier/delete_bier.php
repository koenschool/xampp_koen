<?php
// auteur: Koen
// functie: verwijder een bier op basis van de id
include 'functions.php';
// Haal bier uit de database
if(isset($_GET['biercode'])){

    // test of insert gelukt is
    if(deletebier($_GET['biercode']) == true){
        echo '<script>alert("biercode: ' . $_GET['biercode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_bier.php'); </script>";
    } else {
        echo '<script>alert("bier is NIET verwijderd omdat het nog verbonden is aan een bier")</script>';
    }
}
?>