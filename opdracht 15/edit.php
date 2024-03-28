<?php

include "functions.php";

      
    if(isset($_GET['id'])){   
        get("*", "poll", "id = ".$_GET['id']);
        // function directget($data){
        //     global $db;
        //     $query = $db->prepare("SELECT * FROM poll WHERE id = :id");
            // $query->execute([':id'=>$_GET['id']]);
        //     $result = $query->fetch(PDO::FETCH_ASSOC);
        } 

        // $result = constant("result");
        $result = $_SESSION['result'];
        print_r($result);
        
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
  <input type="submit" value="Submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";

$sql= "INSERT INTO poll (id, vraag)
       VALUES (:id, :vraag);";


$query = $conn->prepare($sql);

$query->execute(
    [
        'id'=>$_POST['id'],
        'vraag'=>$_POST['vraag'],

    ]
);

}


if(isset($_POST)){

}

?>


</body>
</html>
