<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fiets Form</title>
  <link rel="stylesheet" href="allcss.css">
</head>
<body>

<h2>Docent ziekmedling maken</h2>

<form method="post">
  <label for="docent_naam">docent_naam:</label>
  <input type="text" id="docent_naam" name="docent_naam" required><br><br>

  <label for="datum">Datum:</label>
  <input type="text" id="datum" name="datum" required><br><br>

  <input type="submit" name value="Submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";


$sql= "INSERT INTO ziekmelding (docent_naam, datum)
       VALUES (:docent_naam, :datum);";


$query = $conn->prepare($sql);

$query->execute(
    [
      'docent_naam'=>$_POST['docent_naam'],
      'datum'=>$_POST['datum']
    ]
);
echo "<script>alert('ziekmelding is gemaakt')</script>";
echo "<script>location.replace('select.php'); </script>";

}


if(isset($_POST)){

}

?>


</body>
</html>
