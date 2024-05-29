<?php
if($_SERVER['REQUEST_METHOD'] == "GET" &&
    isset($_GET['newsid'])){

        include "connect.php";

$sql= "
        DELETE FROM news
        WHERE newsid = :newsid";


$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        ':newsid'=>$_GET['newsid']
    ]
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('news is verijderd')</script>";
        echo "<script>location.replace('select.php'); </script>";
    } else{
        echo '<script>alert("news is NIET verwijderd")</scriptlocation.replace>';
    }


}

?>