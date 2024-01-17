<!DOCTYPE html>
<head>
<title>schoolding</title>
</head>
<html>
<body>
    

<form method="post">

  <label for="dennis"></label>
  <input type="text" id="dennis" name="dennis" value="100" ><br>

  <label for="henk"></label>
  <input type="text" id="henk" name="henk" value="AA" ><br>

  
  <input type="submit" name="knop" value="verzend">

</form>
<?php


if(isset($_POST['knop']) == true){
    echo $_POST['dennis'];
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