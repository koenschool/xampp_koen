<!DOCTYPE html>
<html>
<body>
<form action="opdracht7_3.php" method="post">


  <input type="radio" id="rood" name="kies" value="red" required>
  <label for="rood">rood</label>

  <input type="radio" id="groen" name="kies" value="green" required>
  <label for="groen">groen</label>

  <input type="radio" id="blauw" name="kies" value="blue" required>
  <label for="blauw">blauw</label>

  <input type="radio" id="roze" name="kies" value="pink" required>
  <label for="roze">roze</label><br>

  <input type="submit" name="instellen" value="instellen">
</form> 
<?php


$kleur=$_POST["kies"];

if(isset($_POST)){
    if ($_POST['kies'] == "red"){
        echo '<body style="background-color:red">';
    }
    else if ($_POST['kies'] == "green"){
        echo '<body style="background-color:green">';
    }
    else if ($_POST['kies'] == "blue"){
        echo '<body style="background-color:blue">';
    }
    else if ($_POST['kies'] == "pink"){
        echo '<body style="background-color:pink">';
    }
}

?>
</body>
</html>