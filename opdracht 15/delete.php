<?php
if($_SERVER['REQUEST_METHOD'] == "GET" &&
    isset($_GET['id'])){

        include "functions.php";
        connectdb();
        global $db;

$sql= "
        DELETE FROM poll 
        WHERE id = :id";


$stmt = $db->prepare($sql);

$stmt->execute(
    [
        ':id'=>$_GET['id']
    ]
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('poll is verijderd')</script>";
        echo "<script>location.replace('main.php'); </script>";
    } else{
        echo '<script>alert("poll is NIET verwijderd")</scriptlocation.replace>';
    }


}

?>