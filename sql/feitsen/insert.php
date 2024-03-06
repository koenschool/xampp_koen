<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fiets Form</title>
  <link rel="stylesheet" href="allcss.css">
</head>
<body>

<h2>fiets Form</h2>

<form method="post">
  <label for="merk">Merk:</label>
  <input type="text" id="merk" name="merk" required><br>

  <label for="id">ID:</label>
  <input type="number" id="id" name="id" required><br>

  <label for="type">Type:</label>
  <input type="text" id="type" name="type" required><br>

  <label for="prijs">Prijs:</label>
  <input type="number" id="prijs" name="prijs" required><br>

  <label for="foto">Foto:</label>
  <input type="text" id="foto" name="foto" required><br>

  <input type="submit" name value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";


$sql= "INSERT INTO fietsen (merk, type, prijs, foto)
       VALUES (:merk, :type, :prijs, :foto);";


$query = $conn->prepare($sql);

$query->execute(
    [
        'merk'=>$_POST['merk'],
        'type'=>$_POST['type'],
        'prijs'=>$_POST['prijs'],
        'foto'=>$_POST['foto']
    ]
);
echo "<script>location.replace('select.php'); </script>";

}


if(isset($_POST)){

}

?>


</body>
</html>
