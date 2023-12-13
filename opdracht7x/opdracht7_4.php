<!DOCTYPE html>
<html>
<body>
<form action="opdracht7_4.php" method="post">
<label for="pr">prijs</label>
  <input type="number" id="pr" name="pr" ><br>

  <label for="ko">korting(%)</label>
  <input type="number" id="ko" name="ko" ><br>

  <input type="submit" name="berekenen" value="berekenen">
</form>

<?php

$pr=$_POST["pr"];
$ko=$_POST["ko"];

$ko = $ko / 100 + 1;

if(isset($_POST)){
    
    $prijs = $pr * $ko;
}

$ko = ($ko-1) * 100;

echo 'bedrag inculsief '.$ko.'% korting: '.$prijs;

?>
</body>
</html>