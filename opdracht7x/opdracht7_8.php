<!DOCTYPE html>
<html>
<body>

<form method="post">

<label for="fru">Fruitsoort:         </label>
  <input type="text" id="fru" name="fru"><br><br>

    <input type="submit" name="toevoegen" value="Toevoegen"><br>
    <br>
    <br>
    <hr>
    <br>
    <input type="submit" name="sorteren" value="Sorteren">
    <input type="submit" name="schudden" value="Schudden"><br>
    <br>
    <hr>


</form>



<?php
session_start();
$fru=$_POST["fru"];
if(isset($_SESSION['fruit']) == false){
    $_SESSION['fruit'] = [];
}

if(isset($_POST['toevoegen'])) { 
    
    $fru=$_POST["fru"];
    array_push($_SESSION['fruit'],$fru);

} 
    else if(isset($_POST['sorteren'])) { 
    sort($_SESSION['fruit']);
    foreach ($_SESSION['fruit'] as $x) {
        echo "$x<br>";
      }
} 


else if(isset($_POST['schudden'])) { 
    shuffle($_SESSION['fruit']);
    foreach ($_SESSION['fruit'] as $x) {
        echo "$x<br>";
      }
} 



?>

</body>
</html>