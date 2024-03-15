<?php
if($_SERVER['REQUEST_METHOD'] == "GET" &&
    isset($_GET['berichtid'])){

        include "connect.php";

$sql= "
        DELETE FROM berichten 
        WHERE berichtid = :berichtid";


$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        ':berichtid'=>$_GET['berichtid']
    ]
);

    if($stmt->rowCount() == 1){
        echo "<script>alert('bericht is verijderd'); </script>";
        echo "<script>location.replace('main.php'); </script>";
    } else{
        echo '<script>alert("bericht is NIET verwijderd");  location.replace("main.php"); </script>';
    }


}

?>