<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

include "connect.php";


$sql= "UPDATE news SET 
        categorie = :categorie,
        titel = :titel,
        inhoud = :inhoud
    WHERE newsid = :newsid
    ";

$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        'categorie'=>$_POST['categorie'],
        'titel'=>$_POST['titel'],
        'inhoud'=>$_POST['inhoud'],
        'newsid'=>$_POST['newsid']
    ]
    
);

if($stmt->rowCount() <= 1){
        echo "<script>alert('news is gewijzigd')</script>";
        echo "<script>location.replace('select.php'); </script>";
    } else{
        echo '<script>alert("ziekmnewwselding is NIET gewijzigd")</scriptlocation.replace>';
    }
    echo "<script>location.replace('select.php'); </script>";

}

?>