<!DOCTYPE html>
<head>
<title>schoolding</title>
</head>
<html>
<body>

<form action="schoolja.php">   

  <label for="dennis">dennis:</label>
  <input type="text" id="dennis" name="dennis" value="100" ><br>

  <label for="henk">henk:</label>
  <input type="text" id="henk" name="henk" value="AA" ><br>

  
  <input type="submit" name="knop" value="verzend">

</form>

<?php


if(isset($_GET['dennis']) == true){
  echo "<h2>" . $_GET['dennis'] . "</h2>";
}

else {
  echo "<h2>HTML Forms</h2>";
}

/*
print($_POST);

echo "<br>";
$henk=$_POST["henk"];

echo $henk;

action="schoolding2.php"

*/
?>

</body>
</html>