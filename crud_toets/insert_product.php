<?php
    // functie: formulier en database insert product
    // auteur: Koen

    echo "<h1>Insert product</h1>";

    include 'functions.php';
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertproduct($_POST) == true){
            echo "<script>alert('product is toegevoegd')</script>";
        } else {
            echo '<script>alert("product is NIET toegevoegd")</script>';
        }
    }


    

?>
<html>
    <body>
        <form method="post">

        <label for="naam">naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="merk">merk:</label>
        <input type="text" id="merk" name="merk" required><br>

        <label for="prijs">prijs:</label>
        <input type="text" id="prijs" name="prijs" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_product.php'>Home</a>
    </body>
</html>
