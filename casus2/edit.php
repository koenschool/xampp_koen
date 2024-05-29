<?php

    if(isset($_GET['newsid'])){


        include "connect.php";        
        $sql="SELECT * FROM news WHERE newsid = :newsid";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':newsid'=>$_GET['newsid']]);
        $result =$stmt->fetch(PDO::FETCH_ASSOC);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>weizig news</title>
  <link rel="stylesheet" href="allcss.css">
</head>
<body>

<h2>wijzig news</h2>

<form action="edit_db.php" method="post">

<label for="categorie">categorie:</label>
  <input type="text" id="categorie" name="categorie" value="<?php echo $result['categorie']?>" required><br><br>

  <label for="titel">titel:</label>
  <input type="text" id="titel" name="titel" value="<?php echo $result['titel']?>" required><br><br>
  
  <label for="inhoud">inhoud:</label>
  <input type="text" id="inhoud" name="inhoud" value="<?php echo $result['inhoud']?>" required><br><br>

  <!-- <label for="newsid">newsid:</label> -->
  <input type="number" id="newsid" name="newsid" required value="<?php echo $result['newsid']?>" hidden><br>

  <input type="submit" name value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";


$sql= "INSERT INTO ziekmelding (categorie, titel, inhoud)
       VALUES (:categorie, :titel, :inhoud);";


$query = $conn->prepare($sql);

$query->execute(
    [
        'categorie'=>$_POST['categorie'],
        'titel'=>$_POST['titel'],
        'inhoud'=>$_POST['inhoud'],
        'newsid'=>$_POST['newsid']
    ]
);


}


if(isset($_POST)){

}

?>


</body>
</html>
