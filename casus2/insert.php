<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>news maken</title>
  <link rel="stylesheet" href="allcss.css">
</head>
<body>

<h2>News bericht maken</h2>

<form method="post">
  <label for="categorie">categorie:</label>
  <!-- <input type="text" id="categorie" name="categorie" required><br><br> -->
  <select id="categorie" name="categorie" size="3">
    <option value="sport">sport</option>
    <option value="populair">populair</option>
    <option value="school">school</option>
  </select required><br><br>

  <label for="titel">titel:</label>
  <input type="text" id="titel" name="titel" required><br><br>

  <label for="inhoud">inhoud:</label>
  <input type="text" id="inhoud" name="inhoud" required><br><br>

  <input type="submit" name value="Submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";


$sql= "INSERT INTO news (categorie, titel, inhoud)
       VALUES (:categorie, :titel, :inhoud);";


$query = $conn->prepare($sql);

$query->execute(
    [
      'categorie'=>$_POST['categorie'],
      'titel'=>$_POST['titel'],
      'inhoud'=>$_POST['inhoud']
    ]
);
echo "<script>alert('news is gemaakt')</script>";
echo "<script>location.replace('select.php'); </script>";

}


if(isset($_POST)){

}

?>


</body>
</html>
