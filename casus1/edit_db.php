<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

include "connect.php";


$sql= "UPDATE ziekmelding SET 
        docent_naam = :docent_naam,
        datum = :datum
    WHERE id = :id
    ";

$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        'docent_naam'=>$_POST['docent_naam'],
        'datum'=>$_POST['datum'],
        'id'=>$_POST['id']
    ]
    
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('ziekmelding is gewijzigd')</script>";
        echo "<script>location.replace('select.php'); </script>";
    } else{
        echo '<script>alert("ziekmelding is NIET gewijzigd")</scriptlocation.replace>';
    }
    echo "<script>location.replace('select.php'); </script>";

}

?>