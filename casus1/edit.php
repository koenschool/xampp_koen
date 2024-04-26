<?php

    if(isset($_GET['id'])){


        include "connect.php";        
        $sql="SELECT * FROM ziekmelding WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id'=>$_GET['id']]);
        $result =$stmt->fetch(PDO::FETCH_ASSOC);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>weizig fiets</title>
  <link rel="stylesheet" href="allcss.css">
</head>
<body>

<h2>wijzig ziekmelding</h2>

<form action="edit_db.php" method="post">

<label for="docent_naam">docent_naam:</label>
  <input type="text" id="docent_naam" name="docent_naam" value="<?php echo $result['docent_naam']?>" required><br><br>

  <label for="datum">Datum:</label>
  <input type="text" id="datum" name="datum" value="<?php echo $result['datum']?>" required><br><br>

  <!-- <label for="id">ID:</label> -->
  <input type="number" id="id" name="id" required value="<?php echo $result['id']?>" hidden><br>

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
        'datum'=>$_POST['datum'],
        'id'=>$_POST['id']
    ]
);


}


if(isset($_POST)){

}

?>


</body>
</html>
