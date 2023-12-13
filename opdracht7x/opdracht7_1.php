<!DOCTYPE html>
<html>
<body>
<form action="opdracht7_1.php" method="post">

  <label for="bd">Bedrag exclusief BTW</label>
  <input type="number" id="bd" name="bd" ><br>

  <input type="radio" id="laag" name="%" value="1.09" required>
  <label for="laag">Laag, 9%</label><br>

  <input type="radio" id="hoog" name="%" value="1.21" required>
  <label for="hoog">Hoog, 21%</label><br>

  <input type="submit" name="omzetten" value="omzetten">
</form> 
<?php


$bd=$_POST["bd"]; 
$pr=$_POST["%"];
$prijs = $bd * $pr;

if ($pr==1.09){
  $pr=9;
}

else if ($pr==1.21){
  $pr=21;
}

echo "Bedrag inclusief $pr BTW: €$prijs";  

?>
</body>
</html>