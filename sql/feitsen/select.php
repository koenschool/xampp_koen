<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:monospace;
            color:deepskyblue;
            background-color:grey;
        }
        table{
            border-color:black;
            background-color:black;
        }
    </style>
</head>
<body>
    
 
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
echo "<table border=1px";
    echo "<tr>";
    echo "<th>". "merk"."";
    echo "<th>". "type"."";
    echo "<th>". "prijs"."<br>";
    echo "</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['merk'] . "";
    echo "<td>". $row['type']. "";
    echo "<td>". $row['prijs']."<br>";
    echo "</tr>";
}
?>
</body>
</html>