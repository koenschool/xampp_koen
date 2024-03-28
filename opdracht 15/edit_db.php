<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

include "functions.php";
connectdb();
global $db;

$sql= "UPDATE poll SET 
        vraag = :vraag
    WHERE id = :id
    ";

$stmt = $db->prepare($sql);

$stmt->execute(
    [
        'id'=>$_POST['id'],
        'vraag'=>$_POST['vraag'],
    ]
);
    if($stmt->rowCount() <= 1){
        echo "<script>alert('vraag is gewijzigd')</script>";
        echo "<script>location.replace('main.php'); </script>";
    } else{
        echo '<script>alert("vraag is NIET gewijzigd")</scriptlocation.replace>';
    }
    echo "<script>location.replace('main'.php'); </script>";

}

?>