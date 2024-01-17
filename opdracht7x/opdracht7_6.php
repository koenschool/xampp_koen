<!DOCTYPE html>
<html>
<body>

<form method="post">

<label for="num">Cijfer:         </label>
  <input type="number" id="num" name="num" ><br>

  <input type="submit" name="toevoegen" value="toevoegen">

</form>


<?php
session_start();

$_SESSION["num"];

$num=$_POST["num"];

$_SESSION["num2"];

$_SESSION["num1"]=$num;

$_SESSION["num"]++;

$_SESSION["num2"]=$_SESSION["num1"]+$_SESSION["num2"];


echo "aantal ingevoegde cijfers:". $_SESSION["num"];

echo "<br>gemiddelde:". $_SESSION["num2"];

$_SESSION["num1"]=0;

?>
</body>
</html>