<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);

include "connect.php";


$sql= "UPDATE fietsen SET 
        merk = :merk,
        type = :type,
        prijs = :prijs
    WHERE id = :id
    ";


$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        'merk'=>$_POST['merk'],
        'type'=>$_POST['type'],
        'prijs'=>$_POST['prijs'],
        'id'=>$_POST['id']
    ]
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('Fiets is gewijzigd')</script>";
        echo "<script>location.replace('select.php'); </script>";
    } else{
        echo '<script>alert("Fiets is NIET gewijzigd")</scriptlocation.replace>';
    }


}

?>