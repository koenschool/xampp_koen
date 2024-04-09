<?php
// auteur: Koen
// functie: verwijder een product op basis van de id
include 'functions.php';
// Haal product uit de database
if(isset($_GET['productcode'])){
 
    // test of insert gelukt is
    if(deleteproduct($_GET['productcode']) == true){
        echo '<script>alert("productcode: ' . $_GET['productcode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_product.php'); </script>";
    } else {
        echo '<script>alert("product is NIET verwijderd omdat het nog verbonden is aan een product")</script>';
    }
}
?>