<?php




    if(isset($_GET['id'])){    
        include "functions.php";
        global $db;
          $query = $db->prepare("SELECT * FROM poll WHERE id = :id");
          $query->execute([':id'=>$_GET['id']]);
          $result = $query->fetch(PDO::FETCH_ASSOC); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wijzig poll</title>
</head>
<body>

<h2>wijzig poll</h2>

<form action="edit_db.php" method="post">
<input type="number" id="id" name="id" required value="<?php echo $result['id']?>" hidden>
  <label for="vraag">Vraag:</label>
  <input type="text" id="vraag" style="width:1000px;" name="vraag" required value="<?php echo $result['vraag']?>"><br>


  <input type="submit" name="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";


$sql= "INSERT INTO producten (productid, merk, naam, prijs)
       VALUES (:productid, :merk, :naam, :prijs);";


$query = $conn->prepare($sql);

$query->execute(
    [
        'productid'=>$_POST['productid'],
        'merk'=>$_POST['merk'],
        'type'=>$_POST['naam'],
        'prijs'=>$_POST['prijs'],
    ]
);

}


if(isset($_POST)){

}

?>


</body>
</html>
