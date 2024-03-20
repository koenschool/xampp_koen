<?php
    // functie: formulier en database insert bier
    // auteur: Koen

    echo "<h1>Insert bier</h1>";

    include 'functions.php';
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertbier($_POST) == true){
            echo "<script>alert('bier is toegevoegd')</script>";
        } else {
            echo '<script>alert("bier is NIET toegevoegd")</script>';
        }
    }


    

?>
<html>
    <body>
        <form method="post">

        <label for="naam">naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="soort">soort:</label>
        <input type="text" id="soort" name="soort" required><br>

        <label for="stijl">stijl:</label>
        <input type="text" id="stijl" name="stijl" required><br>
        
        <label for="alcohol">alcohol:</label>
        <input type="number" id="alcohol" name="alcohol" required><br>

        <label for="brouwcode">brouwcode:</label>
        <select name="brouwcode" id="bouwcode" required value="<?php echo $row['brouwcode']; ?>">
        <?php
            gettable('brouwcode','naam', 'brouwer');
        ?>
        </select><br>

        <!-- <label for="brouwcode">brouwcode:</label>
        <input type="number" id="brouwcode" name="brouwcode" required><br> -->

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_bier.php'>Home</a>
    </body>
</html>
