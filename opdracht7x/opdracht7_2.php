<!DOCTYPE html>
<html>
<body>
<form action="opdracht7_2.php" method="post">

  <label for="g1">getal1</label>
  <input type="number" id="g1" name="g1" ><br>

  <input type="radio" id="optellen" name="kies" value="+" required>
  <label for="optellen">optellen</label>

  <input type="radio" id="aftrekken" name="kies" value="-" required>
  <label for="aftrekken">aftrekken</label>

  <input type="radio" id="vermenigvuldigen" name="kies" value="*" required>
  <label for="vermenigvuldigen">vermenigvuldigen</label>

  <input type="radio" id="delen" name="kies" value="/" required>
  <label for="delen">delen</label><br>

  <label for="g2">getal2</label>
  <input type="number" id="g2" name="g2" ><br>

  <input type="submit" name="berekenen" value="berekenen">
</form> 
<?php


$g1=$_POST["g1"]; 
$g2=$_POST["g2"];
$ki=$_POST["kies"];

if ($_POST['kies'] == "+"){
    $prijs=$g1+$g2;
}

else if ($_POST['kies'] == "-"){
    $prijs=$g1-$g2;
}

else if ($_POST['kies'] == "*"){
    $prijs=$g1*$g2;
}

else if ($_POST['kies'] == "/"){
    $prijs=$g1/$g2;
}




echo "$g1 $ki $g2 = $prijs";  

?>
</body>
</html>