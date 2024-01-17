<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";

// maak een query
$sql="SELECT * FROM feitsen";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);

echo "<br>";
foreach ($result as $row) {
    echo $row['merk'] . "";
    echo $row['type']. "";
    echo $row['prijs']."<br>";
}
?>