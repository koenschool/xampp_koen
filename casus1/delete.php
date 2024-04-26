<?php
if($_SERVER['REQUEST_METHOD'] == "GET" &&
    isset($_GET['id'])){

        include "connect.php";

$sql= "
        DELETE FROM ziekmelding
        WHERE id = :id";


$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        ':id'=>$_GET['id']
    ]
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('ziekmelding is verijderd')</script>";
        echo "<script>location.replace('select.php'); </script>";
    } else{
        echo '<script>alert("ziekmelding is NIET verwijderd")</scriptlocation.replace>';
    }


}

?>