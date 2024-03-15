<head>
  <link rel="stylesheet" href="styles.css">
</head> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "er is gepost<br>";
include "connect.php";



$sql= "INSERT INTO berichten (naam, bericht)
       VALUES (:naam, :bericht);";


$query = $conn->prepare($sql);

$query->execute(
    [
        'naam'=>$_POST['naam'],
        'bericht'=>$_POST['bericht'],
    ]
);
echo "<script>location.replace('main.php'); </script>";

}


?>